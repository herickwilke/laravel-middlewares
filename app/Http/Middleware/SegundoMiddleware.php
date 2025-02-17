<?php

namespace App\Http\Middleware;
use Log;
use Closure;

class SegundoMiddleware
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
        Log::debug('Passou pelo segundo middleware, ANTES');
        $res = $next($request);
        Log::debug('Passou pelo segundo middleware, DEPOIS');
        return $res;
    }
}
