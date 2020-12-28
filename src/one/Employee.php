<?php

declare(strict_types=1);

namespace Beginer\One;

abstract class Employee implements EmployeeInterface
{
    protected string $name;
    protected string $position;

    abstract public function salary(): float;

    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function position(): string
    {
        return $this->position;
    }
}
