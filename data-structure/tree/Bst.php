<?php
class Node{
    public $data = NULL;
    public $left = NULL;
    public $right = NULL;
    public $parent = NULL;

    public function __construct(int $data = NULL, Node $parent = NULL){
        $this->data = $data;
        $this->parent = $parent;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function min(){
        $node = $this;

        while($node->left){
            $node = $node->left;
        }
        return $node;
    }

    public function max(){
        $node = $this;

        while($node->right){
            $node = $node->right;
        }
        return $node;
    }

    public function successor(){
        $node = $this;

        if($node->right){
            return $node->right->min();
        }else{
            return NULL;
        }
    }

    public function predecessor(){
        $node = $this;

        if($node->left){
            return $node->left->max();
        }else{
            return NULL;
        }
    }

    public function delete(){
        $node = $this;

        if( !$node->left && !$node->right){
            if($node->parent->left === $node){
                $node->parent->left = NULL;
            }else{
                $node->parent->right = NULL;
            }
        }elseif($node->left && $node->right){
            $successor = $node->successor();
            $node->data = $successor->data;
            $successor->delete();
        }elseif($node->left){
            if($node->parent->left === $node){
                $node->parent->left = $node->left;
                $node->left->parent = $node->parent->left;
            }else{
                $node->parent->right = $node->left;
                $node->left->parent = $node->parent->right;
            }
            $node->left = NULL;
        }elseif($node->right){
            if($node->parent->right === $node){
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }else{
                $node->parent->left = $node->right;
                $node->right->parent = $node->parent->left;
            }
            $node->right = NULL;
        }
    }
}

class Bst{
    public $root = NULL;

    public function __construct(int $data = NULL){
        $this->root = new Node($data);
    }

    public function isEmpty(): bool{
        return $this->root === NULL;
    }

    public function insert(int $data){
        if($this->isEmpty()){
            $node = new Node($data);
            $this->root = $node;
            return $node;
        }

        $node = $this->root;

        while($node){
            if($data > $node->data){
                if($node->right){
                    $node = $node->right;
                }else{
                    $node->right = new Node($data, $node);
                    $node = $node->right;
                break;
                }
            }else if($data < $node->data){
                if($node->left){
                    $node = $node->left;
                }else{
                    $node->left = new Node($data, $node);
                    $node = $node->left;
                break;
                }
            }else{
            break;
            }
        }
        return $node;
    }

    public function traverse(Node $node){
        if($node->left){
            $this->traverse($node->left);
        }
        echo $node->data. "\n";
        if($node->right){
            $this->traverse($node->right);
        }
    }

    public function search(int $data){
        if($this->isEmpty()){
            return false;
        }

        $node = $this->root;
        while($node){
            if($data > $node->data){
                $node = $node->right;
            }else if($data < $node->data){
                $node = $node->left;
            }else{
            break;
            }
        }
        if($data == $node->data){
            return $node;
        }else{
            return false;
        }
    }

    public function remove(int $data){
        $node = $this->search($data);
        if($node){
            $node->delete();
        }
    }
}

$tree = new Bst(10);
$tree->insert(12); 
$tree->insert(6); 
$tree->insert(3); 
$tree->insert(8); 
$tree->insert(15); 
$tree->insert(13); 
$tree->insert(36);
$tree->remove(3);
$tree->traverse($tree->root);
// echo $tree->search(11) ? "Found" : "Not Found";