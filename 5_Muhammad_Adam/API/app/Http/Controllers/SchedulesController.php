<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schedules;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jadwal = new Schedules;

        $jadwal->from_place_id = $request->from_place_id;
        $jadwal->to_place_id = $request->to_place_id;
        $jadwal->departure_time = $request->departure_time;
        $jadwal->arrival_time = $request->arrival_time;
        $jadwal->distance = $request->distance;
        $jadwal->speed = $request->speed;
        $jadwal->type = $request->type;
        
        
        if($jadwal->save())
        {
            return response()->json('success', 200);
        }

        return response()->json('Data cannot be proccessed', 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = new Schedules;

        if($jadwal->destroy($id))
        {
            return response()->json('success', 200);
        }

        return response()->json('Data cannot be deleted', 400);
    }
}
