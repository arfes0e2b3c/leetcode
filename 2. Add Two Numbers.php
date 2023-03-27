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
   * @param ListNode $l1
   * @param ListNode $l2
   * @return ListNode
   */
  function addTwoNumbers($l1, $l2) {
      while(true) {
          $sum1arr[] = $l1->val;
          if($l1->next === null) break;
          $l1 = $l1->next;
      }
      while(true) {
          $sum2arr[] = $l2->val;
          if($l2->next === null) break;
          $l2 = $l2->next; 
      }
      if(count($sum1arr) > count($sum2arr)) {
          $long = $sum1arr;
          $short = $sum2arr;
      }else{
          $long = $sum2arr;
          $short = $sum1arr;
      }
      $fill = array_fill(0, count($long) - count($short), 0);
      $short = [...$short, ...$fill];
      $ansArr = [];
      $count = count($short);
      for($i = 0; $i< $count;$i++) {
          $ansArr[] = ($long[$i] + $short[$i] + $next) % 10;
          $long[$i + 1] += (($long[$i] + $short[$i]) - ($long[$i] + $short[$i]) % 10) / 10;
          if($i === $count - 1 && $long[$i + 1]) $count++;
      }
      $before = null;
      $ansArr = array_reverse($ansArr);
      foreach($ansArr as $key => $value) {
          $list = new ListNode();
          $list->val = $value;
          $list->next = $before;
          $before = $list;
      }
      return $list;
  }
}