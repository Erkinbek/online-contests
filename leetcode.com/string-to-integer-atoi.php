<?php
class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $str = trim($str);
        if (strpos($str, "e")) {
            $x = (int)substr($str, 0, strpos($str, "e"));
        } else {
            $x = (int)$str;
        }
        $min_range = -2147483648;
        $max_range = 2147483647;
        if ($min_range > $x) {
            return $min_range;
        }
        if ($max_range < $x) {
            return $max_range;
        }
        return $x;
    }
}
?>