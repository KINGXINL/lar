<?php

namespace App\Http\Middleware;

use Closure;

class authMiddlewrae
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {dd(122333);
        return $next($request);
    }
}
