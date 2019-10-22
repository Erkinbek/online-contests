<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $y = 0;
        while ($x != 0) {
            $y = $y * 10 + $x % 10;
            $x = (int) ($x/10);
        }
        if (!$this->is_32bit_signed_int($y)) {
            return 0;
        }
        return $y;
    }

    function is_32bit_signed_int($value)
    {
        $options = ['min_range' => -2147483647, 'max_range' => 2147483647];

        return false !== filter_var($value, FILTER_VALIDATE_INT, compact('options'));
    }

}

$x = 123;

$solution = new Solution();
$r = $solution->reverse($x);
var_dump($x, $r);
?>