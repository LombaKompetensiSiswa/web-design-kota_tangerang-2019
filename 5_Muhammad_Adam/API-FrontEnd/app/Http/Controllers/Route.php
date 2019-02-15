<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Route extends Controller
{
    public function search()
    {
        $a = 2;
        $b = 3;
        $gb = new Client;
        $resource = $gb->get("http://localhost:3000/api/v1/place", []);
        $data = $resource->getBody()->getContents();
        $places = json_decode($data);

        return view('route/view', [
            'places' => $places
        ]);
    }
}
