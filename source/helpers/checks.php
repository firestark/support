<?php

if ( ! function_exists ( 'is_html' ) )
{
    function is_html ( $string ) : bool
    {
        if ( ! is_string ( $string ) )
            return false;
            
        return $string !== strip_tags ( $string ) ? true : false;
    }
}
