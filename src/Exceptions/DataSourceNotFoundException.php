<?php

namespace Aheenam\Countries\Exceptions;

class DataSourceNotFoundException extends \Exception
{

    /**
     * Constructor.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        parent::__construct("No file found at $path");
    }
}
