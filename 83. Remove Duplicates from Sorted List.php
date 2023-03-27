<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

  /**
   * @param ListNode $head
   * @return ListNode
   */
  function deleteDuplicates($head) {
      $ans = $head;
      while($head->val !== null) {
          if($head->val === $head->next->val){
              $head->next = $head->next->next;
              continue;
          }
          $head = $head->next;
      }
      return $ans;
  }
}