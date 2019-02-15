<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index($from_place,$to_place)
    {
        $client = new Client();
        $request = $client->get('http://localhost:8000/v1/route/search/'.$from_place.'/'.$to_place.'?token=21232f297a57a5a743894a0e4a801fc3');
        $response = $request->getBody()->getContents();
        $data = json_decode($response);
        //dd($data);
        return view('pages.search')->with('data',$data);
    }
    public function store(Request $request)
    {
        $client = new Client();
        $request = $client->post('http://localhost:8000/v1/place?token=21232f297a57a5a743894a0e4a801fc3',[
            'form_params'=> [
                'name'=>$request->name,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'x' => $request->x,
                'y' => $request->y,
                'image_path' => $request->image_path,
                'description' => $request->description,
            ]
        ]);
        $response = $request->getBody()->getContents();
        if ($response) {
            return "berhasil";
        }
        else
        {
            return "gagal";
        }
    }
}
