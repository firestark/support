<?php

define ( 'types', 
[ 
	'string' 	=> 'string', 
	'integer' 	=> 'int', 
	'double' 	=> 'float', 
	'boolean' 	=> 'bool', 
	'array' 	=> 'array' 
] );

if ( ! function_exists ( 'is_html' ) )
{
    function is_html ( $string ) : bool
    {
        if ( ! is_string ( $string ) )
            return false;
            
        return $string !== strip_tags ( $string ) ? true : false;
    }
}

if ( ! function_exists ( 'get_type' ) )
{
    function get_type ( $variable ) : string
    {
        $type = gettype ( $variable );
    	return types [ $type ];
    }
}