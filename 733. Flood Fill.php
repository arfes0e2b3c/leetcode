<?php

class Solution {

/**
 * @param Integer[][] $image
 * @param Integer $sr
 * @param Integer $sc
 * @param Integer $color
 * @return Integer[][]
 */
function floodFill($image, $sr, $sc, $color) {
    $val = $image[$sr][$sc];
    $stack = [[$sr, $sc]];

    $image[$sr][$sc] = $color;
    
    while (!empty($stack)) {
        $c = array_shift($stack);
        $dirs = [
            [$c[0] - 1,$c[1]], 
            [$c[0], $c[1] + 1], 
            [$c[0] + 1, $c[1]], 
            [$c[0], $c[1] - 1]
        ];
        foreach ($dirs as $dir) {
            if(
                $image[$dir[0]][$dir[1]] !== null && 
                $image[$dir[0]][$dir[1]] == $val && 
                $image[$dir[0]][$dir[1]] != $color
            ) {
                $stack[] = [$dir[0], $dir[1]];
                $image[$dir[0]][$dir[1]] = $color;
            }
        }
    }
    return $image;
}
}