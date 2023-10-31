<?php

namespace ChrisReedIO\ActiveAegis\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisReedIO\ActiveAegis\ActiveAegis
 */
class ActiveAegis extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ChrisReedIO\ActiveAegis\ActiveAegis::class;
    }
}
