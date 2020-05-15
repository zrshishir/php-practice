<?php
    declare(strict_types=1); //if without this line the result is different
    $a = [1,2=>[2,3,4,3]];
    try{
        echo count($a, COUNT_RECURSIVE);
    }catch(TypeError $e){
        echo $e->getMessage();
    }
?>