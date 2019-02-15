<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedules;
use Illuminate\Support\Facades\DB;
class RouteController extends Controller
{
    public function search($fpi, $tpi)
    {
        $route = new Schedules;

        $result[] = $route->where('from_place_id', $fpi)->where('to_place_id', $tpi)->get();

        $placeName = [
            'from' => DB::table('places')->where('id', $fpi)->first()->name,
            'to' => DB::table('places')->where('id', $tpi)->first()->name
        ];

        $result[] = $placeName;

        return response()->json($result, 200);
        // ['from_place_id', $fpi] ['to_place_id', $tpi]
    }

    public function store(Request $request)
    {
        if(DB::table('selected_routes')->insert([
            'id_schedules' => $request->id_schedules,
            'id_user' => $request->id_user,
        ])) {
            return response()->json('success', 200);
        }
    }
}
