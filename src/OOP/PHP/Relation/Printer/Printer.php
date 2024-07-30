<?php

namespace App\OOP\PHP\Relation\Printer;

abstract class Printer
{
    protected string $stringPrinter;

    public function setStringPrinter(string $stringPrinter): void
    {
        $this->stringPrinter = $stringPrinter;
    }

    abstract public function printToScreen(): string;
}