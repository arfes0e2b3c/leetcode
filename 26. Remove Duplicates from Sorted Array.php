<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $ans = [];
        foreach($nums as $num) {
            if($num !== $ans[count($ans) - 1]) $ans[] = $num;
        }
        foreach($nums as $key => $num) {
            if(isset($ans[$key])) $nums[$key] = $ans[$key]; 
        }
        return count($ans);
    }
}