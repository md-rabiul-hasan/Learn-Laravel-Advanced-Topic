<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $email, $name)
    {
        if( ($request->user()->email == $email) && ($name == 'hasan') ){
            return $next($request);
        }
        
        $data = [
            "status"  => 200,
            "message" => "invalid email address"
        ];
        return response()->json($data);  
    }
}
