<?php

namespace Aheenam\Countries\Test;

use Aheenam\Countries\CountriesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{

    /**
     * add the package provider
     *
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [CountriesServiceProvider::class];
    }
    
}