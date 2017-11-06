<?php

trait readable
{
	public function jsonSerialize ( )
    {
    	return $this->mayRead ( );
    }

    public function mayRead ( )
    {
    	return get_object_vars ( $this );
    }
}