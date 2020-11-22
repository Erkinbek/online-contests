<?php
/**
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 * https://projecteuler.net/problem=17
 *
 * Erkin Pardayev 22.11.2020
 * https://github.com/Erkinbek/online-contests
 */

class p17
{
  public function solve() : int
  {
    $sum = 0;
    for ($i = 1; $i <= 1000; $i++) {
      $sum = $sum + $this->countLetters($i);
      var_dump($sum);
    }
    return $sum;
  }

  public function countLetters(int $number) {
    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $letters = $f->format($number);
    $letters = str_replace(" ", "", $letters);
    $letters = str_replace("-", "", $letters);
    var_dump($letters);
    return strlen($letters);
  }
}

$p17 = new p17();
echo $p17->solve();