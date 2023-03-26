<?php

class Solution {

  /**
   * @param TreeNode $root
   * @return Boolean
   */
  function isValidBST($root, $min = null, $max = null) {
    //解けなかったので模範回答参照
    return $root === null || (
        ($min === null || $root->val > $min) &&
        ($max === null || $root->val < $max) &&
        ($this->isValidBST($root->left, $min, $root->val)) &&
        ($this->isValidBST($root->right, $root->val, $max))
      );
  }
  // function isValidBST($root) {
  //     $stack = [$root];
  //     while (!empty($stack)) {
  //         $current = array_shift($stack);
  //         if($current->left === null && $current->right === null) continue;
  //         if($current->left === null){
  //         } else if (
  //             $current->val > $current->left->val &&
  //             ($current->left->right === null || $current->val > $current->left->right->val)
  //         ) {
  //             $stack[] = $current->left;
  //         } else {
  //             return false;
  //         }
  //         if($current->right === null){
  //         } else if (
  //             $current->val < $current->right->val &&
  //             ($current->right->left === null || $current->val < $current->right->left->val)
  //         ) {
  //             $stack[] = $current->right;
  //         } else {
  //             return false;
  //         }
  //     }
  //     return true;
  // }
}