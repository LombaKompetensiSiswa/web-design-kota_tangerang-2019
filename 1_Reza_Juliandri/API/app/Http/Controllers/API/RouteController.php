<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Schedule;
use App\Models\Route;
use Auth;

class RouteController extends Controller
{
    public function index($from, $to, $time = null){
        if(strlen($time) == 2){
            $time = $time.":00";
        } else if(strlen($time) == 1){
            $time = "0".$time.":00";
        }
        $time = date("H:i:s", strtotime($time));
        if($time == null){
            $time = date("H:i");
            $time = date('H:i:s', strtotime($time.":00"));
        }
        $check1 = Place::where('id', $from);
        $check2 = Place::where('id', $to);
        // dd($time);
        if(!$check1 || !$check2){
            return response()
                ->json([
                    'message' => 'Data cannot be processed'
                ], 422);
        }
        $scheduleGet = Schedule::with(['fromPlace','toPlace'])
        ->where([
            'from_place_id' => $from,
            'to_place_id' => $to
        ])
        ->limit(5)
        ->whereTime('departure_time', $time);
        $schedule =  $scheduleGet->get();
        return $schedule;
    }
    public function insert(Request $request){
        $req = $request->all();
        if(
            !$request->from_place_id||
            !$request->to_place_id ||
            !$request->schedule_id
        ){
            return response()
                ->json(
                    ['messages'=>"Data cannot be processed"]
                ,422);
        }
        $allowed = [
            'from_place_id',
            'to_place_id',
            'schedule_id'
        ];
        foreach($req as $key => $value){
            if(!in_array($key, $allowed)){
                unset($req[$key]);
            }
        }
        $check1 = Place::where('id', $req['from_place_id']);
        $check2 = Place::where('id', $req['to_place_id']);
        // dd($time);
        if(!$check1 || !$check2){
            return response()
                ->json([
                    'message' => 'Data cannot be processed'
                ], 422);
        }
        $schedule = json_decode($req['schedule_id']);
        if(!is_array($schedule)){
            $req['schedule_id'] = "[".$req['schedule_id']."]";
        }
        $route = new Route;
        $route->from_place_id = $req['from_place_id'];
        $route->to_place_id = $req['to_place_id'];
        $route->schedule_id = $req['schedule_id'];
        $route->id_user = Auth::user()->id;
        $route->save();
        return response()
            ->json(
                ['messages'=>'Create success']
            , 200);
    }
}
