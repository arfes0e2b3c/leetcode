<?php

class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $str = str_split("$x");
    $str_rev = array_reverse($str);
    if($str === $str_rev){
        return true;
    }else{
        return false;
    }
}
}