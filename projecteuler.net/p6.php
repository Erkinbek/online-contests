<?php
/*
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 * https://projecteuler.net/problem=6
 */

class P6
{
  public const MAX = 100;

  public function calculate() : int
  {
    $sum = 0;
    $squareSum = 0;
    for ($i = 1; $i <= self::MAX; $i++) {
      $sum = $sum + $i;
      $squareSum = $squareSum + ($i * $i);
    }
    return ($sum * $sum) - $squareSum;
  }
}

$p6 = new P6();
echo $p6->calculate();