<?php
    function invertTree($BinaryNode): BinaryNode|null
    {
        if ($BinaryNode === null) {
            return null;
        }
        
        list($BinaryNode->left, $BinaryNode->right) = [invertTree($BinaryNode->right), invertTree($BinaryNode->left)];

        return $BinaryNode;
    }
