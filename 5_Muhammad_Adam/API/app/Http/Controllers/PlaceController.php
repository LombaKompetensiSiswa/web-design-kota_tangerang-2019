<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Places;
use Illuminate\Validation\ValidationException;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Places::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($_GET['token'] != '')

        // $request->validate([
        //     'name' => 'max:191|string|require',
        //     'latitude' => 'max:191|string|require',
        //     'longitude' => 'max:191|string|require',
        //     'x' => 'max:191|integer|require',
        //     'y' => 'max:191|integer|require',
        //     'image_path' => 'max:191|string|require',
        //     'description' => 'require',
        // ]);

        $places = new Places;

        $places->name = $request->name;
        $places->latitude = $request->latitude;
        $places->longitude = $request->longitude;
        $places->x = $request->x;
        $places->y = $request->y;
        $places->image_path = $request->image_path;
        $places->description = $request->description;

        if($places->save())
        {
            return response()->json('success', 200);
        }
        else
        {
            
        }
        

        return response()->json('failed', 400);
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

        $places = new Places;
        $data = $places->find($id);

        return response()->json($data, 200);
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
        $places = new Places;

        if($places->where('id', $id)->update([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'x' => $request->x,
            'y' => $request->y,
            'image_path' => $request->image,
            'description' => $request->description
        ]))
        {
            return response()->json('success', 200);
        }

        return response()->json('Data cannot be updated', 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $places = new Places;

        if($places->destroy($id))
        {
            return response()->json('success', 200);
        }

        return response()->json('Data cannot be deleted', 400);
    }
}
