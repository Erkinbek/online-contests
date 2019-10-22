<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($i=0; $i < count($nums); $i++) { 
            for ($g=0; $g < count($nums); $g++) { 
                if ($nums[$i] + $nums[$g] == $target && $i != $g) {
                    return [$i, $g];
                }
            }
        }        
    }
}

$nums = [2,5,5,11];
$target = 10;

$solution = new Solution();
$r = $solution->twoSum($nums, $target);
var_dump($r);
?>