<?php

namespace Aheenam\Countries\Test;

use Aheenam\Countries\Facades\Countries;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

class CountriesTest extends TestCase
{

    /** @test */
    public function it_runs_tests()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_returns_a_collection_of_all_countries()
    {
        App::setLocale('de');
        $countries = Countries::all();

        $this->assertInstanceOf(Collection::class, $countries);
        $this->assertCount(253, $countries->get('de'));
        $this->assertCount(1, $countries);
        $this->assertEquals('Deutschland', Countries::get('DE'));
    }
    
    /** @test */
    public function it_returns_a_collection_of_all_countries_by_language()
    {
        App::setLocale('de');
        $countries = Countries::allIn('en');

        $this->assertInstanceOf(Collection::class, $countries);
        $this->assertCount(253, $countries);
        $this->assertCount(2, Countries::all());
        $this->assertEquals('Germany', $countries->get('DE'));
    }

    /** @test */
    public function it_returns_a_country_by_key()
    {
        $this->assertEquals('Germany', Countries::get('DE'));
    }

    /** @test */
    public function it_returns_a_country_by_key_and_language()
    {
        App::setLocale('de');
        $this->assertEquals('Germany', Countries::get('DE', 'en'));
    }

}