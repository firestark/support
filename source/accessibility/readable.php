<?php

trait readable
{
	public function jsonSerialize ( )
    {
        return get_object_vars ( $this );
    }
}