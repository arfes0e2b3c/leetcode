<?php

class Solution {

  /**
   * @param Integer $x
   * @return Integer
   */
  function mySqrt($x) {
      $current = $x;
      while ($current * $current > $x) {
          $current /= 2;
      }

      $current = floor($current);

      while (($current + 1) * ($current + 1) <= $x) {
          $current++;
      }

      return $current;
  }
}