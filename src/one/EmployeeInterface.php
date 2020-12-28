<?php

declare(strict_types=1);

namespace Beginer\One;

interface EmployeeInterface
{
    public function name(): string;
    public function position(): string;

    // without currency for simplicity
    public function salary(): float;
}
