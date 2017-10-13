<?php

trait readableEntries
{
	public function jsonSerialize ( )
    {
        return $this->entries;
    }
} 
