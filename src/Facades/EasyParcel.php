<?php

namespace Adly\EasyParcel\Facades;

use Illuminate\Support\Facades\Facade;

class EasyParcel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'easyparcel';
    }
}
