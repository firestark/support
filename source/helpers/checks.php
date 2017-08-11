<?php

if ( ! function_exists ( 'is_html' ) )
{
    function is_html ( string $string ) : bool
    {
    	   return $string !== strip_tags ( $string ) ? true : false;
    }
}
