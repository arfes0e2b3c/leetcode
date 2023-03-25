<?php

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $max = $n;
        $min = 1;
        $count = $max - $min + 1;
        while($count > 1) {
            $half_count = $min + ceil($count / 2) - 1;
            if($this->isBadVersion($half_count)) {
                $max = $half_count;
            } else {
                $min = $half_count + 1;
            }
            $count = $max - $min + 1;
        }
        return $max;
    }
  // function firstBadVersion($n) {
  //     $max = $n;
  //     $min = 1;
  //     while($max != $min) {
  //         $half_count = floor(($max + $min) / 2);
  //         if($this->isBadVersion($half_count)) {
  //             $max = $half_count;
  //         } else {
  //             $min = $half_count + 1;
  //         }
  //     }
  //     return $max;
  // }
}