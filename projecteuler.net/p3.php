<?php

/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 * https://projecteuler.net/problem=3
 * Erkin Pardayev 22.11.2020
 */

class p3
{
  public function calculate(int $number) : int
  {
    $maxDel = $number;
    $result = 0;
    for ($i = 2; $i <= $maxDel; $i++) {
      if ($maxDel % $i == 0) {
        $maxDel = $maxDel / $i;
        if ($maxDel == 1) {
          $result = $i;
        }
      }
    }
    return $result;
  }
}

$p3 = new p3();
echo $p3->calculate(600851475143);