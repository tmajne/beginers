<?php

declare(strict_types=1);

class PublicHouse
{
     public bool $closed = true;

     public function close(): void
     {
         $this->closed = true;
     }

     public function open(): void
     {
         $this->closed = false;
     }
}
