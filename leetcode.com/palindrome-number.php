<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0) {
            return false;
        }
        $temp = $x;
        $new = 0;
        while (floor($temp)) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = $temp/10;
        }
        if ($new == $x){
            return true;
        }
        else{
            return false;
        }
    }
}

$x = 10;

$solution = new Solution();
$r = $solution->isPalindrome($x);
var_dump($r);
?>