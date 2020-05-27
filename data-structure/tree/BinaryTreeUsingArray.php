<?php

class BinaryTree{
    public $nodes = [];

    public function __construct(Array $node){
        $this->nodes = $node;
    }

    public function traverse(int $num = 0, int $level = 0){
        if(isset($this->nodes[$num])){
            echo str_repeat('-', $level);
            echo $this->nodes[$num]. "\n";
    
            $this->traverse(2 * $num + 1, $level + 1);
            $this->traverse(2 * ($num + 1), $level + 1);
        }
    }
}

$nodes = [];
$nodes[] = "Final";
$nodes[] = "Semi Final1";
$nodes[] = "Semi Final2";
$nodes[] = "Quarter Final1";
$nodes[] = "Quarter Final2";
$nodes[] = "Quarter Final3";
$nodes[] = "Quarter Final4";

$tree = new BinaryTree($nodes);
$tree->traverse(0);