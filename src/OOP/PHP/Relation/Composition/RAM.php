<?php

namespace App\OOP\PHP\Relation\Composition;

class RAM
{
    private int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}