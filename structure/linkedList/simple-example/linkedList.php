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

    public function insertAtFirst(string $data = NULL){
        $newNode = new listNode($data);

        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
             $currentFirstNode = $this->firstNode;  
             $this->firstNode = &$newNode;  
             $newNode->next = $currentFirstNode;  
        } 
        $this->totalNode++;  
        return TRUE;
        
    }

    public function insertBefore(string $data = NULL, string $query = NULL){
        $newNode = new listNode($data);

        if($this->firstNode){
            $previous = "";
            $currentNode = $this->firstNode;
            while($currentNode !== NULL){
                
                if($currentNode->data === $query){
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    // $previous = $this->firstNode;  
                    // $this->firstNode = $newNode;  
                    // $newNode->next = $previous; 
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function search(string $data = NULL){
        if($this->totalNode){
            $currentNode = $this->firstNode;
            while($currentNode !== NULL){
                if($currentNode->data === $data){
                    return $currentNode->data;
                }
                $currentNode = $currentNode->next;
            }
            
        }
        return false;
    }

    public function deleteFirst() {
        if ($this->firstNode !== NULL) {
            if ($this->firstNode->next !== NULL) {
                $this->firstNode = $this->firstNode->next;
            } else {
                $this->firstNode = NULL;
            }
            $this->totalNode--;
            return TRUE;
        }
        return FALSE;
    }

    public function deleteLast() {  
        if ($this->firstNode !== NULL) { 
            $currentNode = $this->firstNode;  
            if ($currentNode->next === NULL) { 
                $this->firstNode = NULL;  
            } else {  
                $previousNode = NULL; 
                while ($currentNode->next !== NULL) {  
                    $previousNode = $currentNode; 
                    $currentNode = $currentNode->next;  
                }  
                $previousNode->next = NULL;
                $this->totalNode--;  
                return TRUE; 
             }  
        }  return FALSE;
    }

    public function display(){
        echo "Total book titles are: " . $this->totalNode. "<br>";
        $currentNode = $this->firstNode;
        while($currentNode !== NULL){
            echo $currentNode->data. "<br>";
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
// $bookList->insertAtFirst('shishir');
// $res = $bookList->search('Book3');
// echo $res;
$bookList->insertBefore('hiShishir', 'Book3');
$bookList->display();