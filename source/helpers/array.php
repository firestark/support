<?php

if ( ! function_exists ( 'array_get' ) )
{

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

}

/**
 * Implode with the addition of an alternative last glue
 *
 * @param  string $glue     A string to put in between the array pieces
 * @param  array  $pieces   The pieces to make the string from
 * @param  string $lastGlue A string to put in between the first to last and last pieces
 * @return string           The imploded array.
 */
function imploding ( string $glue, array $pieces, string $lastGlue = 'and' ) : string
{
	$last  = array_slice ( $pieces, -1 );
	$first = join (', ', array_slice ( $pieces, 0, -1 ) );
	$both  = array_filter ( array_merge ( array ( $first ), $last ), 'strlen' );
	return join ( ' ' . $lastGlue . ' ', $both );
}
