<?php

namespace Exercises;


class Fibonacci
{

    public function fibNormal($n)
    {
        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return 1;
        }

        list($a, $b) = [0, 1];

        for ($index = 2; $index <= $n; $index++) {
            list($a, $b) = [$b, $a + $b];
        }

        return $b;
    }

    public function fibRecursive(int $n)
    {

        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return 1;
        }

        $result = $this->fibRecursive($n - 1) + $this->fibRecursive($n - 2);


        return $result;
    }

    public function fibClosureCount($n)
    {
        $f = $this->fibClosure();
        for ($i = 0; $i < $n; $i++) {
            $result = $f();
        }
        return $result;
    }

    function fibClosure()
    {
        list($a, $b) = [0, 1];
        $first = true;

        return function () use (&$a, &$b, &$first) {

            if ($first) {
                $first = false;
                return 1;
            }

            list($a, $b) = [$b, $a + $b];

            return $b;
        };
    }
}

//echo 'Choose [0]-normal, [1]-recursive, [2]-closure' . PHP_EOL;
//$choose = readline();
//
//echo 'Give which fibonacci number you wish to calculate' . PHP_EOL;
//$fibNumber = readline();
//
//$fibClass = new Fibonacci();
//
//
//switch ($choose) {
//    case 0:
//        $fibResult = $fibClass->fibNormal($fibNumber);
//        break;
//    case 1:
//        $fibResult = $fibClass->fibRecursive($fibNumber);
//        break;
//    case 2:
//        $fibResult = $fibClass->fibClosureCount($fibNumber);
//        break;
//    default:
//        break;
//}
//
//var_dump($fibResult);
