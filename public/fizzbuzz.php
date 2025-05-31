<?php

function fizzBuzz(): void
{
    for ($i = 1; $i <= 100; $i++) {
        echo getFizzBuzzString($i) . "\n";
    }
}

function getFizzBuzzString(int $number): string
{
    $result = '';

    if ($number % 4 === 0) {
        $result .= 'Fizz';
    }
    if ($number % 5 === 0) {
        $result .= 'Buzz';
    }

    return $result ?: (string)$number;
}

fizzBuzz();
