<?php

namespace Aheenam\Countries\Test;

use Aheenam\Countries\CountriesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{

    /**
     * setup environment
     *
     * @param $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app->setBasePath(__DIR__ . '/..');
    }

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

    /**
     * add the facade
     *
     * @param $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Countries' => \Aheenam\Countries\Facades\Countries::class
        ];
    }

}