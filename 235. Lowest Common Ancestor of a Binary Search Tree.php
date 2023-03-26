<?php

class Solution {
  /**
   * @param TreeNode $root
   * @param TreeNode $p
   * @param TreeNode $q
   * @return TreeNode
   */
  function lowestCommonAncestor($root, $p, $q) {
      $min = min($p->val, $q->val);
      $max = max($p->val, $q->val);
      while(true) {
          if ($root->val < $min) {
              $root = $root->right;
          } else if ($root->val > $max) {
              $root = $root->left;
          }else return $root;
      }
  }
}