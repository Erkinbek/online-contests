<?php
/*
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 * https://projecteuler.net/problem=4
 */

class p4
{
  public function solve() : int
  {
    $maxPol = 0;
    $a = 999;
    $b = 999;
    for ($i = 100; $i <= $a; $i++) {
      for ($j = 100; $j <= $b; $j++) {
        $numb = $i * $j;
        if (strrev($numb) == $numb) {
          if ($maxPol < $numb) {
            $maxPol = $numb;
          }
        }
      }
    }
    return $maxPol;
  }

}

$p4 = new p4();
echo $p4->solve();

// 906609