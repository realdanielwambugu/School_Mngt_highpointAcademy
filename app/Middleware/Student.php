<?php

Namespace App\Middleware;

use Xcholars\Http\Request;

use Xcholars\Support\Proxies\Response;

use Closure;

use Xcholars\Support\Proxies\Auth as Login;

class Student
{
   /**
    * Handle the user request.
    *
    * @param object \Xcholars\Http\Request  $request
    * @param object Closure $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if (Login::user()->isAdmin())
        {
            return Response::withRedirect('/admin');
        }

        return $next($request);
    }
}
