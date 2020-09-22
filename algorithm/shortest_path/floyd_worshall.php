<?php 

$totalVertices = 5;
$graph = [];

//getting input with weighted graph
for($i = 1; $i <= $totalVertices; $i++){
    for($j = 1; $j <= $totalVertices; $j++){
        $graph[$i][$j] = $i == $j ? 0 : PHP_INT_MAX;
    }
}

//getting original graph input from the book page 498
//representing A,B,C,D and E as 0,1,2,3 and 4 respectively
$graph[0][1] = $graph[1][0] = 10; //though it is undirected graph
$graph[0][3] = $graph[3][0] = 5;
$graph[1][2] = $graph[2][1] = 5;
$graph[1][3] = $graph[3][1] = 5;
$graph[1][4] = $graph[4][1] = 10;
$graph[3][4] = $graph[4][3] = 20;
var_dump($graph);