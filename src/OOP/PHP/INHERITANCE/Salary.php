<?php


namespace App\OOP\PHP\INHERITANCE;


class Salary
{
    protected float $salary;
    protected float $tax;
    protected int $overTime;
    protected int $absent;
    protected float $absentRate;
    protected float $overTimeRate;

    public function __construct(float $salary, float $tax, int $overTime, int $absent, float $absentRate, float  $overTimeRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->overTime = $overTime;
        $this->absent = $absent;
        $this->absentRate = $absentRate;
        $this->overTimeRate = $overTimeRate;
    }

    public function calcSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }

//    static polymorphism => overload
//    public function calcSalary(float $extraTxa): float
//    {
//        return $this->calcSalary - ($this->salary * $this->tax);
//    }
}








