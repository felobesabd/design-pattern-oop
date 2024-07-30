<?php

namespace App\OOP\PHP\INHERITANCE;

class HttpClient extends Client
{
    public function __construct(string $source, int $timeout)
    {
        parent::__construct($source, $timeout);
    }

    public function connectAfter(): string
    {
        return "connected After " . $this->source;
    }
}