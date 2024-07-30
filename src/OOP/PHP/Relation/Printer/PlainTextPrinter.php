<?php

namespace App\OOP\PHP\Relation\Printer;

class PlainTextPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "say Hello {$this->stringPrinter}";
    }
}