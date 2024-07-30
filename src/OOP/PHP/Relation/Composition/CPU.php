<?php

namespace App\OOP\PHP\Relation\Composition;

class CPU
{
    private int $speed;

    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}