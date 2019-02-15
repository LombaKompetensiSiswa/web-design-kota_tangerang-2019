<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Closure;

class Token
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
        if(isset($_GET['token'])) {

            $data = DB::table('users')->get();

            foreach($data as $data)
            {
                if(md5($data->username) == $_GET['token'] && $data->status == 'on')
                {
                    session([
                        'role' => $data->role,
                    ]);
                    return $next($request);

                }
            }
            return response()->json('Unauthorized User', 401);
        } else {
            return response()->json('Unauthorized User', 401);
        }
    }
}
