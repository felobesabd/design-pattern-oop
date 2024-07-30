<?php

namespace App\OOP\PHP;

class Mercedes extends Car
{
    public function move(): int
    {
        return $this->speed * 2;
    }

    public function turnOn(): bool
    {
        // 2
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        // 2
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed * 0.5 + 3;
        return true;
    }

    public function park(): bool
    {
        // 2
        return true;
    }
}