<?php

namespace App\OOP\PHP\INHERITANCE;

class Client
{
    protected string $source;
    protected int $timeout;

    public function __construct(string $source, int $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }

    public function connect(): string
    {
        return "connected";
    }

    public function call(string $url): string
    {
        return "I have fetched data";
    }

    public function terminate()
    {
        return true;
    }
}