<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
  function runningSum($nums) {
      $ans = [];
      foreach ($nums as $key => $value) {
          $sliced = array_slice($nums, 0, $key + 1);
          $ans[] = array_sum($sliced);
      }
      return $ans;
  }
}