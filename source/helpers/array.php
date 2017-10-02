<?php

/**
 * Get an item from an array using "dot" notation.
 *
 * @param  array   $subject
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
function array_get ( array $subject, $key, $default = null )
{
	$current = $subject;
	$token = strtok ( $key, '.' );

	while ( $token !== false ) 
	{
		if ( ! isset ( $current [ $token ] ) ) 
			return $default;
	    $current = $current [ $token ];
    	$token = strtok ( '.' );
	}

	return $current;
}