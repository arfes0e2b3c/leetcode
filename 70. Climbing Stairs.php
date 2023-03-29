<?php

class Solution {

  /**
   * @param Integer $n
   * @return Integer
   */
  function climbStairs($n) {
      $a1 = 1;
      $a2 = 1;
      $a3 = 2;
      for ($i=0;$i<$n;$i++) {
          $a3 = $a1 + $a2;
          $a1 = $a2;
          $a2 = $a3;
      }
      return $a1;
  }
}