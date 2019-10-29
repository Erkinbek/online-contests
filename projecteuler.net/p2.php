<?php
// https://projecteuler.net/problem=2

class p2
{

  function fibo($n)
  {
    $summ = 0;
    $tmp = 1;
    $f1 = 1;
    $f2 = 1;
    while ($tmp < $n) {
      if ($f2 % 2 == 0) {
        $summ += $f2;
      }
      $tmp = $f2 + $f1;
      $f1 = $f2;
      $f2 = $tmp;
    }
    return $summ;
  }
}

$solution = new p2();
echo $solution->fibo(4000000); // 4613732
