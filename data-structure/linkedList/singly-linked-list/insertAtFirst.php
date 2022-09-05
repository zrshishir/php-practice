<?php 

class listNode{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}

class insertAtFirst{
    private $firstNode = NULL;

    public function insert(string $data = NULL){
        $newNode = new listNode($data);

        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL){//traversing the linked list
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }

        return true;
    }

    public function pushFirst(string $data = NULL){
        $newNode = new listNode($data);

        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            $newNode->next = $currentNode;
            $this->firstNode = $newNode;
        }
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


$insFirst = new insertAtFirst();
$insFirst->insert('a1');
$insFirst->insert('a2');
$insFirst->insert('a3');
$insFirst->insert('a4');
$insFirst->insert('a5');
$insFirst->insert('a6');
$insFirst->insert('a7');
$insFirst->insert('a8');

$insFirst->pushFirst('shishir');
$insFirst->pushFirst('zia');
$insFirst->display();