<?php

namespace App\OOP\PHP\Relation\Printer;

class HTMLPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "<h1> say Hello {$this->stringPrinter}</h1>>";
    }
}