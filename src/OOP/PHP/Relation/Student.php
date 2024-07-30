<?php

namespace App\OOP\PHP\Relation;

class Student
{
    private string $name;
    private string $homeWork;
    private int $homeWorkScore = 50;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignATempTeacher(Teacher $teacher)
    {
        $this->homeWork = $teacher->assignAHomeWork();
    }

    public function doHomeWork()
    {
        $this->homeWorkScore = 40;
    }

    public function getHomeWorkScore(): int
    {
        return $this->homeWorkScore;
    }
}