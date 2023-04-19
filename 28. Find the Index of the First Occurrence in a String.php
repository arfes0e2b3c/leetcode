<?php

class Solution {

  /**
   * @param String $haystack
   * @param String $needle
   * @return Integer
   */
  function strStr($haystack, $needle) {
      $length = strlen($needle);
      for ($i=0;$i<=strlen($haystack) - $length;$i++) {
          $current = substr($haystack, $i, $length);
          if ($current == $needle) return $i;
      }
      return -1;
  }
}