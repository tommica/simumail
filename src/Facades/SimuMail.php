<?php

namespace Tommica\SimuMail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tommica\SimuMail\SimuMail
 */
class SimuMail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tommica\SimuMail\SimuMail::class;
    }
}
