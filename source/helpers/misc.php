<?php

function requiring ( string $directory )
{
	$directory = new RecursiveDirectoryIterator ( $directory );
	$iterator = new RecursiveIteratorIterator ( $directory );
	$objects = new RegexIterator ( $iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH );
	foreach ( $objects as $directory )
	  	foreach ( $directory as $file )
	  		require $file;
}