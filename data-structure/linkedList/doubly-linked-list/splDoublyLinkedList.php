<?php 
 
$splList = new SplDoublyLinkedList();
$splList->push('a1');
$splList->push('a2');
$splList->push('a3');
$splList->push('a4');
$splList->push('a5');

for($splList->rewind(); $splList->valid(); $splList->next()){
    echo $splList->current() . "\n";
}