<?php

// creating node class
class listNode{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}
//creating linked list functionalities
class linkedList{
    private $firstNode = NULL;
    private $totalNode = 0;

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

        $this->totalNode++;
        return true;
    }


    public function display(){
        echo "Total book titles are: " . $this->totalNode. "\n";
        $currentNode = $this->firstNode;
        while($currentNode !== NULL){
            echo $currentNode->data. "\n";
            $currentNode = $currentNode->next;
        }
    }

    
}

$bookList = new linkedList();
$bookList->insert('Book1');
$bookList->insert('Book2');
$bookList->insert('Book3');
$bookList->insert('Book4');
$bookList->insert('Book5');

$bookList->display();