<?php

function maxDepth(){
    static $i = 0;
    print ++$i. '\n';
    maxDepth();
}

maxDepth();