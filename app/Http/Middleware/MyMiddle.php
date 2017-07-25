<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddle
{
    /**
     * @param $request
     * @param Closure $next
     * @param $param
     * @return mixed
     */

    public function handle($request, Closure $next,$param)
    {
        /*
         * El metodo handle es ejecutado antes de ejecutar la accion
         */
        //Filters

        return $next($request);
    }

    public function terminate(){
        /*
         * El metodo terminate es ejecutado al terminar el render de la operacion
         */
    }
}
