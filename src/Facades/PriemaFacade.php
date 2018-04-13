<?php

namespace Sfkazmi\Priema\Facades;

use Illuminate\Support\Facades\Facade;

class PriemaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'priema';
    }
}