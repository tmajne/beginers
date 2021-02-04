<?php

declare(strict_types=1);

class PrivateHouse
{
     private string $doorLockCode = '123qwe';
     private bool $closed = true;

     public function close(): void
     {
         $this->closed = true;
     }

     public function open(string $code): void
     {
         if ($code === $this->doorLockCode) {
             $this->closed = false;
             echo "Mieszkanie zostało otwarte\n";
         } else {
             // logowanie informacji o próbie użycia niepoprawnego kodu
             echo "UWAGA: Zły kod.\n";
         }
     }

     public function isOpen(): bool
     {
         return !$this->closed;
     }
}
