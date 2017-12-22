<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17];

function findOdd(array $numbers): array
{
    $oddNumbers = [];
    foreach ($numbers as $number) {
        if ($number % 2 === 1) {
            $oddNumbers[] = $number;
        }

    }

    return $oddNumbers;

}

$odd = findOdd($arr);
echo implode(",", $odd);