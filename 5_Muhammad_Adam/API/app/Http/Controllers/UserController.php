<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use App\User;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|max:191',
            'password' => 'required'
        ]);

        $data = DB::table('users')->where(
            'username', $request->username
        )->first();

        if($data)
        {
            if($request->password == $data->password)
            {
                $token = md5($data->username);
                // Auth::login();
                DB::table('users')->where('id', $data->id)->update([
                    'status' => 'on'
                ]);
                // dd(Auth::user());
                return response()->json($token, 200);
            }
        }

        return response()->json('Invalid Login', 401);
    }

    public function logout()
    {
        if(!isset($_GET['token']))
        {
            return response()->json('Unauthorized User', 401);
        }

        $data = DB::table('users')->get();

        // session('login')->pull();

        foreach($data as $data)
        {
            if($_GET['token'] == md5($data->username))
            {
                DB::table('users')->where('id', $data->id)->update([
                    'status' => 'off'
                ]);
            }
            return response()->json('success', 200);
        }
        return response()->json('Unauthorized User', 401);
    }
}
