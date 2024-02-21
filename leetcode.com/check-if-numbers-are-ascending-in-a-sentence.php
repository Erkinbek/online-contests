<?php

/**
 * @link https://leetcode.com/problems/check-if-numbers-are-ascending-in-a-sentence/description/
 * Runtime 9ms, Memory 19.70MB
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending(String $s): bool
    {
        $arr = explode(" ", $s);
        $prev = 0;
        foreach ($arr as $item) {
            $item = (int)$item;
            if ($item > 0) {
                if($item <= $prev) {
                    return false;
                }
                $prev = $item;
            }
        }
        return true;
    }
}
$test_case = [
    "1 box has 3 blue 4 red 6 green and 12 yellow marbles",
    "hello world 5 x 5",
    "sunset is at 7 51 pm overnight lows will be in the low 50 and 60 s"
];
$sol = new Solution();
foreach ($test_case as $item) {
    var_dump($sol->areNumbersAscending($item));
}
