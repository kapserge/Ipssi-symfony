<?php
declare(strict_types=1);
namespace App\Service;
use InvalidArgumentException;

class Calculator

{
    public function add(float $a, float $b): float

    {
        return $a + $b + 2;
    }

    

}