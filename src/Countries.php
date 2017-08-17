<?php

namespace Aheenam\Countries;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

use Aheenam\Countries\Exceptions\DataSourceNotFoundException;

class Countries
{

    /** @var Collection */
    protected $collection;

    /**
     * constructor.
     */
    public function __construct()
    {
        $this->collection = new Collection();
        $this->loadCountries(App::getLocale());
    }

    /**
     * returns all countries
     *
     * @return Collection
     */
    public function all($lang = null)
    {
        return $this->collection;
    }
    
    /**
     * returns all countries by language
     *
     * @param $lang
     * @return Collection
     */
    public function allIn($lang)
    {    
        if ($this->collection->get($lang) === null) $this->loadCountries($lang);
        return $this->collection->get($lang);
    }

    public function get($key, $lang = null)
    {
        if ($lang === null) $lang = App::getLocale();

        if ($this->collection->get($lang) === null) $this->loadCountries($lang);

        return $this->collection->get($lang)->get(strtoupper($key));
    }

    /**
     * loads all countries
     *
     * @return void
     */
    protected function loadCountries($lang)
    {
        
        if(!File::exists(base_path('vendor/umpirsky/country-list/data/'.$lang.'/country.php'))) {
            throw new DataSourceNotFoundException(base_path('vendor/umpirsky/country-list/data/'.$lang.'/country.php'));
        }

        $this->collection->put($lang,collect((require base_path('vendor/umpirsky/country-list/data/'.$lang.'/country.php'))));
    }

}