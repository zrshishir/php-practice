<?php 
//floyd warshal algo is used to identify the shortest path between two nodes
$totalVertices = 5;
$graph = [];

//getting input with weighted graph
for($i = 0; $i < $totalVertices; $i++){
    for($j = 0; $j < $totalVertices; $j++){
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

function floydWarshall(array $graph): array {
        $dist = [];
        $dist = $graph;
        $size = count($dist);
        for ($k = 0; $k < $size; $k++)
            for ($i = 0; $i < $size; $i++)
                for ($j = 0; $j < $size; $j++){
                    $dist[$i][$j] = min($dist[$i][$j],$dist[$i][$k] + $dist[$k][$j]);
                }
        return $dist;
}

$distance = floydWarshall($graph);
echo "the distance between node 0 to 4: " . $distance[0][4]. "\n";