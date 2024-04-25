<?php

namespace App;

class Employee
{
    private string $name;
    private int $age;
    private float $salary;

    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): string
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): int
    {
        $this->age = $age;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): float
    {
        $this->salary = $salary;
    }

}