<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class RouteController extends Controller
{
    public function update()
    {
        $client = new Client();
        $request = $client->get('http://localhost:8000/v1/place?token=21232f297a57a5a743894a0e4a801fc3');
        $response = $request->getBody()->getContents();
        $data = json_decode($response);
        return view('pages.update_place')->with('data',$data);
    }
}
