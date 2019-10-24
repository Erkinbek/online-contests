<?php
	class Solution {

		/**
		 * @param Integer $numRows
		 * @return Integer[][]
		 */
		function generate($numRows) {
			$number = [];
			for ($y = 1; $y <= $numRows; $y ++) {
				for ($x = 1; $x <= $y; $x ++) {
					if($x == 1) {
						$number[$y][$x] = 1;
					} elseif($x == $y) {
						$number[$y][$x] = 1;
					} else {
						$number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
					}
				}
			}
			return $number;
		}
	}

	$solution = new Solution();
	$result = $solution->generate(5);
	var_dump($result);