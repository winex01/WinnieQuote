<?php 


if (! function_exists('quote_programming')) {
    /**
     *
     */
    function quote_programming($num = null)
    {
    	return \Winnie\WinnieQuote\WinnieQuote::Programming($num);
    }
}