<?php

namespace App\OOP\PHP\Relation\Aggregation;

class Project
{
    private string $name;
    private \DateTime $deadline;
    private array $developer;

    public function __construct(string $name, \DateTime $deadline, array $developer)
    {
        $this->name = $name;
        $this->deadline = $deadline;
        $this->developer = $developer;
    }

    public function setDeadLineTo(\DateInterval $interval) {
        $this->deadline->add($interval);
    }

    public function showProjectInformation(): string
    {
        $list = array_map(function (Developer $dev) {
            return $dev->getName();
        }, $this->developer);

        $devs = implode(', ', $list);

        return
            "
            Project Name: {$this->name}\n
            Project dead line: {$this->deadline->format('Y-m-d')}\n
            Developer: {$devs}\n
            ";
    }
}



