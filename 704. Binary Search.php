<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer
   */
  function search($nums, $target) {
      $return = array_search($target, $nums);
      if($return !== false) return $return;
      return -1;
  }
}