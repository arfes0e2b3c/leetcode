<?php

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    $ans = [];
    for($n=0;$n<count($nums);$n++) {
        $index = array_search($target - $nums[$n], $nums);
        if($index !== false) {
            $ans = [$n,$index];
            if($n > $index) break;
        }
    }
    return $ans;
}
}