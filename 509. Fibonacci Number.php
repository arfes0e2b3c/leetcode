<?php

class Solution {

  /**
   * @param Integer $n
   * @return Integer
   */
  function fib($n) {
      // return (int) ((1 / sqrt(5))*((((1 + sqrt(5)) / 2)**$n) - (((1 - sqrt(5)) / 2)**$n)));
      $first = 1;
      $second = 1;
      $third = 2;
      for ($i=1; $i <= $n ; $i++) { 
        $third = $first + $second;
        $first = $second;
        $second = $third;
      }
      return $first;
  }
}