<?php

trait readable_entries
{
	public function jsonSerialize ( )
    {
        return $this->entries;
    }
} 
