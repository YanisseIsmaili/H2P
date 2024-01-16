<?php
    function invertTree ($BinaryNode): BinaryNode|null
    {
        if ($BinaryNode === null) {
            return null;
        }

        //permet d'appliquer la fonction invertTree sur chaque noeud de l'arbre
        list($BinaryNode->left, $BinaryNode->right) = [invertTree($BinaryNode->right), invertTree($BinaryNode->left)];

        return $BinaryNode;
    }
