<?php

class Solution {

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isIsomorphic($s, $t) {
      $len = strlen($s);
      $arr = [];
      for($i=0;$i<$len;$i++) {
          if(!isset($arr[$s[$i]])) {
              $arr[$s[$i]] = $t[$i];
          }else if($arr[$s[$i]] !== $t[$i]) {
              return false;
          }
      }
      $arr = [];
      for($i=0;$i<$len;$i++) {
          if(!isset($arr[$t[$i]])) {
              $arr[$t[$i]] = $s[$i];
          }else if($arr[$t[$i]] !== $s[$i]) {
              return false;
          }
      }
      return true;
  }
}