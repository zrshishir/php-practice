<?php
class listNode{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}


class insertAtLast{
    private $firstNode = NULL;

    public function insert(string $data = NULL){
        $newNode = new listNode($data);

        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }

        return true;
    }

    public function pushLast(string $data = NULL){
        $newNode = new listNode($data);

        if($this->firstNode == NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        return true;
    }

    public function display(){
        if($this->firstNode == NULL){
            echo NULL;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode !== NULL){
                echo $currentNode->data. " ";
                $currentNode = $currentNode->next;
            }
        }
        echo "\n";
    }
}

$insLast = new insertAtLast();
$insLast->insert('a1');
$insLast->insert('a2');
$insLast->insert('a3');
$insLast->insert('a4');
$insLast->insert('a5');
$insLast->insert('a6');
$insLast->insert('a7');
$insLast->insert('a8');

$insLast->pushLast('shishir');
$insLast->pushLast('sumu');
$insLast->display();