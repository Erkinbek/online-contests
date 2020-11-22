<?php

/**
 * Class P5
 * https://projecteuler.net/problem=5
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 */

class P5
{
  const NUMBER = 20;

  public function solve() : int
  {
    $notFound = true;
    $number = self::NUMBER;
    while ($notFound) {
      $notFound = $this->isDivide($number);
      if ($notFound) {
        $number = $number + self::NUMBER;
      } else {
        return $number;
      }
    }
  }

  public function isDivide(int $numb) : bool
  {
    for ($i = 2; $i <= self::NUMBER; $i++) {
      if ($numb % $i != 0) {
        return true;
      }
    }
    return false;
  }
}

$p5 = new P5();
$result = $p5->solve();
echo $result;