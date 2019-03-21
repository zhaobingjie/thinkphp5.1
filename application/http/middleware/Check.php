<?php

namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {
//        $id = $request->id;
        $is_age = input('?age');
        $request->age = 18;
        $request->list = array(1,2,3,4);
        $request->name = 'zbj';
        return $next($request);
    }
}
