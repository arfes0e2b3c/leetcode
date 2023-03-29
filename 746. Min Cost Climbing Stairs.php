<?php

class Solution {

  /**
   * @param Integer[] $cost
   * @return Integer
   */
  function minCostClimbingStairs($cost) {
      $cost[] = 0;
      $index = -1;
      $sum = 0;
      while ($index < count($cost) - 1) {
          if ($cost[$index + 1] == 0) {
              $sum += $cost[$index + 1];
              $index++;
          } else if ($cost[$index + 2] == 0 || ($cost[$index + 1] + $cost[$index + 3]) > $cost[$index + 2]) {
              $sum += $cost[$index + 2];
              $index += 2;
          } else {
              $sum += $cost[$index + 1];
              $index++;
          }
      }
      return $sum;
  }
}