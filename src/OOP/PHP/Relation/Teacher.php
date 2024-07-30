<?php


namespace App\OOP\PHP\Relation;

use App\OOP\PHP\Relation\Printer\Printer;

abstract class Teacher
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayHello(Printer $printer): string
    {
        $printer->setStringPrinter($this->name);
        return $printer->printToScreen();
    }

    abstract public function assignAHomeWork(): string;

    public function evaluateStudentHomeWork(Student $student): string
    {
        if ($student->doHomeWork() >= 50) {
            return "success";
        }
        return "Failed";
    }
}