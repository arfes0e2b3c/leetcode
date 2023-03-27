<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head) {
        $s = $head;
        $f = $head;
        while ($f !== null && $f->next !== null) {
          $s = $s->next;
          $f = $f->next->next;
          if($s === $f) {
            $s = $head;
            while($s !== $f) {
              $s = $s->next;
              $f = $f->next;
            }
            return $s;
          }
        }
    }
}