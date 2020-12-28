<?php

declare(strict_types=1);

namespace Beginer\One;

class FullTimeEmployee extends Employee
{
    private float $salary;

    public function __construct(string $name, string $position, float $sallary)
    {
        parent::__construct($name, $position);
        $this->salary = $sallary;
    }

    public function salary(): float
    {
        return $this->salary;
    }
}
