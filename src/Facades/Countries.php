<?php 

namespace Aheenam\Countries\Facades;

use Illuminate\Support\Facades\Facade;

class Countries extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Aheenam\Countries\Countries::class;
    }
}
