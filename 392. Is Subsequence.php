<?php

class Solution {

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isSubsequence($s, $t) {
      $len = strlen($s);
      $s = str_split($s);
      if($len == 0) return true;
      foreach($s as $key => $char) {
          if($key == $len - 1 && strlen($t) == 1 && $char !== $t) return false;
          if(!$t)return false;
          if(strpos($t, $char) === false) return false;
          $t = explode($char, $t, 2)[1];

      }
      return true;
  }
}