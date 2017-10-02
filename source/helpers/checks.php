<?php

define ( 'types', 
[ 
	'string' 	=> 'string', 
	'integer' 	=> 'int', 
	'double' 	=> 'float', 
	'boolean' 	=> 'bool', 
	'array' 	=> 'array',
	'null'		=> 'null',
	'NULL'		=> 'null'
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

function get_type ( $variable )
{   
	if ( is_string ( $variable ) )
		$variable = getcorrectvariable ( $variable );
    $type = gettype ( $variable );
    	return types [ $type ];
}

function getcorrectvariable ( $string )
{

    $string = trim ( $string );
   
    if ( empty ( $string ) ) return '';
    
    if ( ! preg_match ( "/[^0-9.]+/",$string ) )
    {
        if ( preg_match ( "/[.]+/",$string ) )
            return ( float ) $string;
        else
            return ( int ) $string;
    }

    if ( $string === 'true' ) return true;
    if ( $string === 'false' ) return false;
    return ( string ) $string;
}