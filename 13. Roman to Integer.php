<?php

class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function romanToInt($s) {
      $roman = [
          "I" => 1,
          "V" => 5,
          "X" => 10,
          "L" => 50,
          "C" => 100,
          "D" => 500,
          "M" => 1000,
      ];
      $arrRoman = str_split($s);
      $sum = 0;
      foreach($arrRoman as $key => $value) {
          $v = $roman[$value];
          if($v < $roman[$arrRoman[$key + 1]]) {
              $sum -= $v;
          }else{
              $sum += $v;
          }
      }
      return $sum;
  }
}
