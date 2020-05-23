<?php 
class listNode {
    public $data = NULL;
    public $next = NULL;
    public $prev = NULL;

    public function __construct(string $data = NULL){
        $this->data = $data;
    }
}

class doublyLinkedList{
    private $firstNode = NULL;
    private $lastNode = NULL;
    private $totalNode = 0;

    public function insertAtFirst(string $data = NULL) { 
        $newNode = new ListNode($data); 
        if ($this->firstNode === NULL) { 
            $this->firstNode = &$newNode; 
            $this->lastNode = $newNode;  
        } else { 
            $currentFirstNode = $this->firstNode;  
            $this->firstNode = &$newNode;  
            $newNode->next = $currentFirstNode;  
            $currentFirstNode->prev = $newNode;  
        } 
        $this->totalNode++;  
        return TRUE; 
    }

    public function insertAtLast(string $data = NULL) {  
        $newNode = new ListNode($data); 
        if ($this->firstNode === NULL) { 
            $this->firstNode = &$newNode;  
            $this->lastNode = $newNode;  
        } else { 
            $currentNode = $this->lastNode;  
            $currentNode->next = $newNode;  
            $newNode->prev = $currentNode;  
            $this->lastNode = $newNode;  
        } 
        $this->totalNode++;  
        return TRUE; 
    }

    public function insertBefore(string $data = NULL, string $query =  NULL) { 
        $newNode = new ListNode($data);  
        if ($this->firstNode) {  
            $previous = NULL;  
            $currentNode = $this->firstNode;  
            while ($currentNode !== NULL) {  
                if ($currentNode->data === $query) {  
                    $newNode->next = $currentNode;  
                    $currentNode->prev = $newNode;  
                    $previous->next = $newNode;  
                    $newNode->prev = $previous;  
                    $this->totalNode++;  
                    break;  
                } 
                $previous = $currentNode;  
                $currentNode = $currentNode->next;  
            } 
        }  
    }

    public function insertAfter(string $data = NULL, string $query =  NULL) {  
        $newNode = new ListNode($data); 
        if ($this->firstNode) {  
            $nextNode = NULL;  
            $currentNode = $this->firstNode;  
            while ($currentNode !== NULL) {  
                if ($currentNode->data === $query) {  
                    if ($nextNode !== NULL) {  
                        $newNode->next = $nextNode;  
                    }  
                    if ($currentNode === $this->lastNode) {  
                        $this->lastNode = $newNode;  
                    }  
                    $currentNode->next = $newNode;  
                    $nextNode->prev = $newNode;  
                    $newNode->prev = $currentNode;  
                    $this->totalNode++;  
                    break;  
                }  
                $currentNode = $currentNode->next;  
                $nextNode = $currentNode->next;  
            } 
        } 
    }

    public function deleteFirst() {  
        if ($this->firstNode !== NULL) {  
            if ($this->firstNode->next !== NULL) {  
                $this->firstNode = $this->firstNode->next;  
                $this->firstNode->prev = NULL;  
            } else {  
                $this->firstNode = NULL;  
            }  
            $this->totalNode--;  
            return TRUE;  
        }  
        return FALSE;  
    }

    public function deleteLast() {  
        if ($this->lastNode !== NULL) {  
            $currentNode = $this->lastNode;  
            if ($currentNode->prev === NULL) {  
                $this->firstNode = NULL;  
                $this->lastNode = NULL;  
            } else {  
                $previousNode = $currentNode->prev;  
                $this->lastNode = $previousNode;  
                $previousNode->next = NULL;  
                $this->totalNode--;  
                return TRUE;  
            }  
        }  
        return FALSE;  
    }

    public function delete(string $query = NULL) {  
        if ($this->firstNode) {  
            $previous = NULL; 
            $currentNode = $this->firstNode;  
            while ($currentNode !== NULL) {  
                if ($currentNode->data === $query) {  
                    if ($currentNode->next === NULL) {  
                        $previous->next = NULL;  
                    } else {  
                        $previous->next = $currentNode->next;  
                        $currentNode->next->prev = $previous;  
                    } 
                    $this->totalNode--;  
                    break;  
                } 
                $previous = $currentNode;  
                $currentNode = $currentNode->next;  
            } 
        } 
    }

    public function displayForward() {  
        echo "Total book titles: " . $this->totalNode . "\n";  
        $currentNode = $this->firstNode;  
        while ($currentNode !== NULL) {  
            echo $currentNode->data . "\n";  
            $currentNode = $currentNode->next;  
        }  
    }

    public function displayBackward() {  
        echo "Total book titles: " . $this->totalNode . "\n";  
        $currentNode = $this->lastNode;  
        while ($currentNode !== NULL) {  
            echo $currentNode->data . "\n";  
            $currentNode = $currentNode->prev;  
        } 
    }
}