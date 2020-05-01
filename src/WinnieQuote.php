<?php

namespace Winnie\WinnieQuote;

use Illuminate\Support\Collection;

class WinnieQuote
{
    /**
     * Get an inspiring quote.
     *
     * Some of the quotes are taken from this package: https://github.com/unicodeveloper/laravel-quotes/blob/master/src/Quotes/programming.php 
     * 
     * @return string
     */
    public static function programming($num = null)
    {
        return Collection::make(config('winniequote.quotes'))->random($num);
    }
}