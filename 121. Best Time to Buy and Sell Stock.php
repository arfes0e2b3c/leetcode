<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $max = 10001;
        $min = 10001;
        $ans  = 0;
        foreach($prices as $value) {
            if($max < $value) $max = $value;
            if($min > $value) {
                if($ans <  $max - $min) $ans = $max - $min;
                $min = $value;
                $max = $value;
            }
        }
        return $ans >  $max - $min ? $ans : $max - $min;
    }
}