<?php

class Solution {

  /**
   * @param String[][] $grid
   * @return Integer
   */
  function numIslands($grid) {
      $count = 0;
      $gr = count($grid);
      $gc = count($grid[0]);
      for ($i=0;$i<$gr;$i++) {
          for ($j=0;$j<$gc;$j++) {
              $val = $grid[$i][$j];
              if($val == 2 || $val == 0) continue;
              $stack = [[$i, $j]];

              $grid[$i][$j] = 2;
              
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
                          $grid[$dir[0]][$dir[1]] !== null && 
                          $grid[$dir[0]][$dir[1]] == 1
                      ) {
                          $stack[] = [$dir[0], $dir[1]];
                          $grid[$dir[0]][$dir[1]] = 2;
                      }
                  }
              }
              $count++;
          }
      }
      return $count;
  }
}