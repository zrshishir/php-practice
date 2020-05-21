<?php

class listNode{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}

class practiceLink{
    private $firstNode = NULL;
    private $totalNode = NULL;

    public function insert(string $data = NULL){
        $newNode = new listNode($data);
        
        if($this->firstNode === NULL){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== Null){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->totalNode++;
        return true;
    }

    public function display(){
        echo "the lists are: \n";
        if($this->firstNode == NULL){
            echo "there is no data.";
        }else{
            $currentNode = $this->firstNode;
            while($currentNode !== NULL){
                echo $currentNode->data. "\n";
                $currentNode = $currentNode->next;
            }
        }
    }
}

$listData = new practiceLink();

for($i = 0; $i < 8; $i++){
    $listData->insert('Book'. $i);
}
// $res1 = $listData->insert('shishir');
// $res = $listData->insert('shishir1');
// echo $res;
$listData->display();