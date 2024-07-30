<?php

namespace App\OOP\PHP;

use App\OOP\PHP\Employee;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;

    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function deFreeze(): string
    {
        $this->turnOnMicrowave();
        $this->loadingProgram();
        $this->setTimer();
        return "I am de-freezing the food at {$this->temp} using the program {$this->program}";
    }

    private function turnOnMicrowave()
    {
        return "Starting on Heating System";
    }

    private function loadingProgram()
    {
        return "Loading program {$this->program}";
    }

    private function setTimer()
    {
        return "Setting de-freezing time to {$this->time} seconds";
    }
}