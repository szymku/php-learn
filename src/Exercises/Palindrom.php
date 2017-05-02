<?php

namespace Exercises;

class Palindrom
{

    public function checkIfPalindrom(string $string): bool
    {
        $strlen = strlen($string);

        if ($strlen < 2) {
            return TRUE;
        }

        $iterations = floor($strlen / 2);

        for ($i = 0; $i < $iterations; $i++) {
            if ($string[$i] !== $string[$strlen - $i - 1]) {
                return FALSE;
            }
        }

        return TRUE;
    }
}

//var_dump((new Palindrom())->checkIfPalindrom('123456'));
