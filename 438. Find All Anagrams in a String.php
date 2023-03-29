<?php

class Solution {

  /**
   * @param String $s
   * @param String $p
   * @return Integer[]
   */
  function findAnagrams($s, $p) {
      // $ans = [];
      // $arrP = str_split($p);
      // $checker = [];
      // // foreach ($arrP as $char) {
      // //     $checker[$char]++;
      // // }
      // usort($arrP, "strcmp");

      // $lenS = strlen($s);
      // $lenP = strlen($p);
      // for ($i=0;$i<$lenS - $lenP + 1;$i++) {
      //     // $checkee = [];
      //     $current = substr($s, $i, $lenP);
      //     $current = str_split($current);
      //     // foreach ($current as $char) {
      //     //     $checkee[$char]++;
      //     // }
      //     usort($current, "strcmp");
      //     // if($checker == $checkee) $ans[] = $i;
      //     if($current == $arrP) $ans[] = $i;
      // }
      // return $ans;
      $ans = [];
      $arrS = str_split($s);
      $arrP = str_split($p);
      $lenS = strlen($s);
      $lenP = strlen($p);

      foreach ($arrP as $char) {
          $checker[$char]++;
      }

      $slicedS = array_slice($arrS, 0, $lenP);
      foreach ($slicedS as $char) {
          $stack[$char]++;
      }
      
      $start = 0;
      $end = $lenP;
      for ($i=1;$i <= $lenS - $lenP + 1;$i++) {
          if($checker == $stack) $ans[] = $start;

          if ($stack[$arrS[$start]] == 1) {
              unset($stack[$arrS[$start]]);
          } else {
              $stack[$arrS[$start]]--;
          }

          $start = $i;
          $end = $i + $lenP - 1;

          $stack[$arrS[$end]]++;
      }
      return $ans;
  }
}