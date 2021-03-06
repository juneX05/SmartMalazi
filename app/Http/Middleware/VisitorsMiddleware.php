<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class VisitorsMiddleware
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
        if (!Sentinel::check())
            return $next($request);
        else
        {
            if(Sentinel::getUser()->roles()->first()->slug == 'admin')
            {
                return redirect('/lodges');
            }
            else if(Sentinel::getUser()->roles()->first()->slug == 'lodge-admin')
            {
                $lodge_id = Sentinel::getUser()->lodge_id;
                return redirect('/rooms/'.$lodge_id);
            }
        }
    }
}
