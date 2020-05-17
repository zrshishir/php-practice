<?php 

class listNode{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}

class duplicateUsingLinkedList{
    private $firstNode = NULL;
    

    public function insert(string $data = NULL){
        $newNode = new listNode($data);
        $dupli = false;
        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== Null){
                $currentNode = $currentNode->next;
                if($currentNode->data === $data){
                    $dupli = true;
                }
            }
            if($dupli === false){
                $currentNode->next = $newNode;
            }
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

$duplicateList = new duplicateUsingLinkedList();
$array = [1, 3, 3, 4, 5, 5, 2, 3, 6];
for($i = 0; $i < count($array); $i++){
    $duplicateList->insert($array[$i]);
}


$duplicateList->display();