<?php

namespace Winnie\WinnieQuote\Facades;

use Illuminate\Support\Facades\Facade;

class WinnieQuote extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'winniequote';
    }
}
