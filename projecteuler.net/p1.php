<?php
// https://projecteuler.net/problem=1

class Solution
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

$solution = new Solution();
echo $solution->problem(1000);