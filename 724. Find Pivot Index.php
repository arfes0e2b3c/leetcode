<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function pivotIndex($nums) {
      for($i=0;$i<count($nums);$i++) {
          $left = array_slice($nums, 0, $i);
          $right = array_slice($nums, -(count($nums) - $i - 1));
          if($i === count($nums) - 1 && count($right) === count($nums)) $right = [];
          if(array_sum($left) === array_sum($right)) return $i;
      }
      return -1;
  }
}