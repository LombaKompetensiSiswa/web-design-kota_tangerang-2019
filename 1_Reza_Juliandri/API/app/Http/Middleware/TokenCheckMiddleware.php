<?php

namespace App\Http\Middleware;


use Closure;
use \Auth;
use App\User;
use Illuminate\Http\Request;

class TokenCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->token == null || !$request->token){
            return response()
                ->json([
                    'messages' => "Unauthorized user"
                ], 401);
        }
        $userGet = User::where(['token'=>$request->token]);
        $user = $userGet->first();
        if(!$user){
            return response()
                ->json([
                    'messages'=> "Unauthorized user"
                ], 401);
        }
        Auth::loginUsingId($user->id);
        $a =  $next($request);
        return $a;
    }
}
