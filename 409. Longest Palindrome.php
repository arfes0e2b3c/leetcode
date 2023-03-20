<?php

class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function longestPalindrome($s) {
      $len = strlen($s);
      for($i=0;$i<$len;$i++) {
          $ans += ++$arr[$s[$i]] % 2  ? 0 : 2; 
      }
      if($len !== $ans) $ans++;
      return $ans;
  }
}