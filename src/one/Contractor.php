<?php

require_once 'Employee.php';

class Contractor extends Employee
{
    private float $hourRate;
    private int $workedHours = 0;

    public function __construct(string $name, string $position, float $hourRate)
    {
        parent::__construct($name, $position);
        $this->hourRate = $hourRate;
    }

    public function worked(int $hours): void
    {
        $this->workedHours = $hours;
    }

    public function salary(): float
    {
        return $this->hourRate * $this->workedHours;
    }
}