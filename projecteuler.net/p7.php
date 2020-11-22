<?php

/**
 * What is the 10 001st prime number?
 * https://projecteuler.net/problem=7
 */

class p7
{

  public function solve() : int
  {
    $run = true;
    $counter = 0;
    $number = 2;
    while ($run) {
      if ($this->isPrime($number)) {
        $counter++;
        if ($counter == 10001) {
          return $number;
        }
      }
      $number++;
    }
    return 1;
  }


  public function isPrime($num) {

    if ($num == 2) {
      return true;
    }

    if($num % 2 == 0) {
      return false;
    }

    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
      if($num % $i == 0)
        return false;
    }
    return true;
  }
}

$p7 = new p7();
echo $p7->solve();

// 104743