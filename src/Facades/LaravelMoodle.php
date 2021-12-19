<?php

namespace Kiba86\LaravelMoodle\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelMoodle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelmoodle';
    }
}
