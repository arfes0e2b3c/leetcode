<?php

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root) {
        //解けなかったのでSolutionsから参照...
        $result = [];
        $stack = [$root];

        while ($node = array_shift($stack)) {
            $result[] = $node->val;
            array_unshift($stack, ...$node->children);
        }

        return $result;
    }
}