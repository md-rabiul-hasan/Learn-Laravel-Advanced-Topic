<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IpCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->ip() == '127.0.0.1'){
            return $next($request);
        }
        
        $data = [
            "status"  => 200,
            "message" => "invalid ip address"
        ];
        return response()->json($data);
        
    }
}
