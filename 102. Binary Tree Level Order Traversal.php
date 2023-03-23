<?php

class Solution {

  /**
   * @param TreeNode $root
   * @return Integer[][]
   */
  function levelOrder($root) {
      if(!$root) return [];
      $values = [];
      $stack = [$root];

      while(!empty($stack)) {
          $level = [];
          $count = count($stack);
          for($i=0;$i<$count;$i++) {
              $current = array_shift($stack);
              $level[] = $current->val;
              if($current->left)$stack[] = $current->left;
              if($current->right)$stack[] = $current->right;
          }
          $values[] = $level;
      }
      return $values;
  }
}