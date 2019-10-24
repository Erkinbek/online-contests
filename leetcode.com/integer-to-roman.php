<?php
class Solution {

  /**
   * @param Integer $num
   * @return String
   */
  function intToRoman($number) {
    $map = [
      'M' => 1000,
      'CM' => 900,
      'D' => 500,
      'CD' => 400,
      'C' => 100,
      'XC' => 90,
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1
    ];
    $returnValue = '';
    while ($number > 0) {
      foreach ($map as $roman => $int) {
        if($number >= $int) {
          $number -= $int;
          $returnValue .= $roman;
          break;
        }
      }
    }
    return $returnValue;
  }
}

$s = new Solution();
$result = $s->intToRoman($_GET['num']);
var_dump($result);
?>