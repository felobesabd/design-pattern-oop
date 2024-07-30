<?php


namespace App\OOP\PHP\INHERITANCE;


class OrganizationSalary extends Salary
{
    protected float $organizeSalary;

    public function __construct
    (
        float $salary, float $tax,
        int $overTime, int $absent,
        float $absentRate, float $overTimeRate,
        float $organizeSalary
    )
    {
        parent::__construct($salary, $tax, $overTime, $absent, $absentRate, $overTimeRate);
        $this->organizeSalary = $organizeSalary;
    }

    public function calcSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizeSalary);
    }
}