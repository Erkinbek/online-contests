<?php
/*
 *
 */

class p10
{
  public function solve() : int
  {
    $summ = 0;
    for ($i = 2; $i <= 2000000; $i++) {
      if ($this->isPrime($i)) {
        $summ = $summ + $i;
      }
    }
    return $summ;
  }
  public function isPrime($num) {

    if ($num == 2) {
      return true;
    }

    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
      if($num % $i == 0)
        return false;
    }
    return true;
  }
}

$p10 = new p10();
echo $p10->solve();