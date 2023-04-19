<?php

class Solution {

  /**
   * @param Integer[] $digits
   * @return Integer[]
   */
  function plusOne($digits) {
      $last = array_key_last($digits);
      
      if($digits[$last] != 9) {
          $digits[$last]++;
          return $digits;
      }

      $counter = $last;
      while($digits[$counter] === 9) {
          $digits[$counter] = 0;
          $counter--;
      }

      if($counter === -1) {
          array_unshift($digits, 1);
      } else {
          $digits[$counter]++;
      }

      return $digits;
  }
}