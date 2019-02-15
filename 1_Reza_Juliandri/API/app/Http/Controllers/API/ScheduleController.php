<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Place;
use App\Http\Requests\ScheduleInsertRequest;

class ScheduleController extends Controller
{
    public function insert(Request $request){

        if( !$request->type ||
            !$request->line ||
            !$request->from_place_id ||
            !$request->to_place_id ||
            !$request->departure_time ||
            !$request->arrival_time ||
            !$request->distance ||
            !$request->speed){
                return response()
                    ->json(
                        ['messages'=>"Data cannot be processed"]
                    , 422);
            }
        $check_from_place_id = Place::where(['id'=>$request->from_place_id])->first();
        $check_to_place_id = Place::where(['id'=>$request->to_place_id])->first();
        if(!$check_from_place_id || !$check_to_place_id){
            return response()
                ->json([
                    "messages" => "Data cannot be processed"
                ], 422);
        }
        $type =['bus','train'];
        if(!in_array($request->type, $type)){
            return response()
                ->json(
                    ["messages"=> "Data cannot be processed"],
                    422
                );
        }
        $schedule = new Schedule;
        $schedule->type = $request->type;
        $schedule->line = $request->line;
        $schedule->from_place_id = $request->from_place_id;
        $schedule->to_place_id  = $request->to_place_id;
        $schedule->departure_time = $request->departure_time;
        $schedule->arrival_time = $request->arrival_time;
        $schedule->distance = $request->distance;
        $schedule->speed = $request->speed;
        $schedule->save();
        return response()
            ->json(
                ["messages"=>"Create success"],
                200
            );

    }
    public function delete($id){
        $scheduleGet = Schedule::where(['id'=>$id]);
        $schedule = $scheduleGet->first();
        if(!$schedule){
            return response()
                ->json(
                    ["messages"=> "Data cannot be deleted"],
                    422
                );
        }
        $scheduleGet->delete();
        return response()
        ->json([
            "messages" => "Delete success"
        ], 200);
    }
}
