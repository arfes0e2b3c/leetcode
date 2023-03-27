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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $arr1 = [];
        while(true) {
            if($list1->val === null) break;
            $arr1[] = $list1->val;
            $list1 = $list1->next;
        }
        $arr2 = [];
        while(true) {
            if($list2->val === null) break;
            $arr2[] = $list2->val;
            $list2 = $list2->next;
        }
        $arr = [...$arr1, ...$arr2];
        sort($arr);
        $next = null;
        for($i=count($arr)-1;$i>=0;$i--) {
            $list = new ListNode();
            $list->val = $arr[$i];
            $list->next = $next;
            $next = $list;
        }
        return $list;
    }
}