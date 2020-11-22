<?php
// https://projecteuler.net/problem=1

class p1
{
  public function problem($n)
  {
    $summ = 0;
    for($i = 1; $i < $n; $i++) {
      if ($i%3 == 0 || $i%5 == 0) {
        $summ = $summ + $i;
      }
    }
    return $summ;
  }
}

$solution = new p1();
echo $solution->problem(1000);