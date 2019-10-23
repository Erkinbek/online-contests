<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
    	$s = trim($s);
    	if (strlen($s) == 0) {
    		return 0;
    	}
    	if ($s[strlen($s)-1] == " ") {
    		return 1;
    	}
        $s = explode(" ", $s);
        return strlen(end($s));
    }
}

$str = "        ";
$t = new Solution();
$result = $t->lengthOfLastWord($str);
var_dump($result);
?>