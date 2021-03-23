<?php

/**
 * Referencje
 */

class SomeClass
{
    public function __construct(
        private string $foo,
        private int $count
    ) {}

    public function setFoo(string $value): void
    {
        $this->foo = $value;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}

$foo = new SomeClass('foo', 10);

//print_r($foo);

$bar = $foo;

//print_r($bar);

$bar->setCount(22);

//print_r($foo);
//print_r($bar);


$zet = & $bar;

print_r($foo);
print_r($bar);
print_r($zet);

$bar = new SomeClass('sss', 4444);
print_r('========');
print_r($foo);
print_r($bar);
print_r($zet);


