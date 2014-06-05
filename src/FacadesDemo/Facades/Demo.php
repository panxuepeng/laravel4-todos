<?php namespace FacadesDemo\Facades;

use Illuminate\Support\Facades\Facade;

class Demo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'demo'; }

}