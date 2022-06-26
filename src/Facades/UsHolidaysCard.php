<?php

namespace palPalani\UsHolidaysCard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \palPalani\UsHolidaysCard\UsHolidaysCard
 */
class UsHolidaysCard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'usholidayscard';
    }
}
