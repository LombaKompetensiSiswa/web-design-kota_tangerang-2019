<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class adminController extends Controller
{
    public $token;

    public function loginAPI()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $gh = new Client;

        if($gh->post('http://localhost:3000/api/v1/auth/login', [
            'username' => $request->username,
            'password' => $request->password
        ])->getBody()) {
            $this->token = md5($request->username);
            session(['token' => $this->token, 'login' => true]);
            return redirect('place');
            
        }

        return redirect('login');
    }

    public function logout($token)
    {
        $gh = new Client;

        $response = $gh->get('http://localhost:3000/api/v1/auth/logout?token='.$token)->getBody();

        session()->pull('login');

        return redirect('login');
    }

    public function createPlace()
    {
        return view('place/create');
    }

    public function addPlace(Request $request)
    {

        $gh = new Client;

        $run = $gh->post(('http://localhost:3000/api/v1/place/post?token='. session('token')), [
            'form-params' => [
                'name' => $request->name,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'x' => $request->x,
                'y' => $request->y,
                'image_path' => $request->image_path,
                'description' => $request->description
            ]])->getBody()->getContents();

        $response = $run;

        if($response == 'success')
        {
            return redirect('/place/insert');
        }

        return redirect('/place');

    }

    public function place()
    {
        $gh = new Client;
        $data = $gh->get('http://localhost:3000/api/v1/place');

        $result = $data->getBody()->getContents();

        $hasil = json_decode($result);

        return view('place.view', [
            'places' => $hasil
        ]);
    }

    public function deletePlace($id)
    {
        $gh = new Client;

        $result = $gh->delete('http://localhost:3000/api/v1/place/'.$id.'?token='.$this->token, []);
        $response = $result->send();

        dd($response);
        
    }
}
