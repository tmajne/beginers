<?php

interface EmployeeInterface
{
    public const WORKING_HOURS_PER_DAY = 8;

    public function name(): string;
    public function position(): string;

    // without currency for simplicity
    public function salary(): float;
}
