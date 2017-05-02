<?php

namespace Exercises;

class SpojnyCiag
{

    /**
     * @param array $tab
     * @return array
     */
    public function findLongest(array $tab): array
    {
        $result = [];
        $tmpResult = [];

        foreach ($tab as $key => $t) {

            if (isset($tab[$key + 1]) && $tab[$key] < $tab[$key + 1]) {
                $tmpResult[] = $tab[$key];
            } else {
                $tmpResult[] = $tab[$key];
                if (count($tmpResult) > count($result)) {
                    $result = $tmpResult;
                }
                $tmpResult = [];
            }
        }
        return $result;
    }
}
