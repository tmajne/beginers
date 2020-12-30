<?php

require_once 'Employee.php';

class FullTimeEmployee extends Employee
{
    private float $salary;

    public function __construct(string $name, string $position, float $salary)
    {
        parent::__construct($name, $position);
        $this->salary = $salary;
    }

    public function salary(): float
    {
        return $this->salary;
    }
}
