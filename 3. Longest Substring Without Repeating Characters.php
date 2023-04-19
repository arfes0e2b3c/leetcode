<?php

//解けなかったので答え参照

class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function lengthOfLongestSubstring($s) {
      $max = 0;
      $cur_arr = [];
      $pointer = 0;
      for ($i=0;$i< strlen($s);$i++) {
          if(isset($cur_arr[$s[$i]]) && $pointer <= $cur_arr[$s[$i]]) {
            $pointer = $cur_arr[$s[$i]] + 1;
          }
          $cur_arr[$s[$i]] = $i;
          $max = max($max, $i - $pointer + 1);
      }
      return $max;
  }
}