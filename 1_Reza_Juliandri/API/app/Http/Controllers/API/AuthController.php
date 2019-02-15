<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        if($request->username == null || $request->password == null){
            return response()
                ->json([
                    "messages" => "Invalid login"
                ], 401);
        }
        $userGet = User::where(['username'=>$request->username]);
        $user = $userGet->first();
        if(!$user){
            return response()
                ->json([
                    "messages" => "Invalid login"
                ],401);
        }
        $check = Hash::check($request->password, $user->password);
        if(!$check){
            return response()
                ->json([
                    "messages" => "Invalid login"
                ], 401);
        }
        $token = str_random(32);
        $userGet->update(['token'=>$token]);
        return response()
            ->json([
                "token" => $token,
                "role" => $user->permission
            ], 200);
    }

    public function logout(Request $request){
        $userGet = User::where(['token'=> $request->token]);
        $user = $userGet->first();
        if(!$user){
            return response()
                ->json(
                    [
                        "messages" => "Unauthorized user"
                    ], 401
                );
        }
        $userGet->update(['token'=>null]);
        return response()
            ->json(
                [
                    "messages" => "Successfully logout"
                ], 200
            );
    }
}
