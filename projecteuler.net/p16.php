<?php

/**
 * What is the sum of the digits of the number 2^1000?
 * https://projecteuler.net/problem=16
 */

class p16
{
  public function solve() : int
  {
    $sum = 0;
    $number = str_replace(",", "", number_format(pow(2, 1000)));
    for ($i = 0; $i < strlen($number); $i++) {
      $sum = $sum + $number[$i];
    }
    return $sum;
  }
}

$p16 = new p16();
echo $p16->solve();