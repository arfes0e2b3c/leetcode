<?php

class Solution {

  /**
   * @param String $s
   * @return Boolean
   */
  function isValid($s) {
      $pairs = [
          '{' => '}',
          '[' => ']',
          '(' => ')',
      ];
      $stack = [];
      for ($i=0;$i<strlen($s);$i++) {
          $current = $s[$i];
          if ($pairs[$current]) {
              $stack[] = $pairs[$current];
          } else if ($current != array_pop($stack)) {
              return false;
          }
      }
      return empty($stack);
  }
}