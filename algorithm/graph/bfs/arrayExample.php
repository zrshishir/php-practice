<?php
$graph = [];
$visited = [];
$vertexCount = 6;

for($i = 1; $i <= $vertexCount; $i++){
    $graph[$i] = array_fill(1, $vertexCount, 0);
    $visited[$i] = 0;
}

$graph[1][2] = $graph[2][1] = 1;
$graph[1][5] = $graph[5][1] = 1;
$graph[5][2] = $graph[2][5] = 1;
$graph[5][4] = $graph[4][5] = 1;
$graph[4][3] = $graph[3][4] = 1;
$graph[3][2] = $graph[2][3] = 1;
$graph[6][4] = $graph[4][6] = 1;

$queue = new SplQueue;
$queue->enqueue(1);
$node = $queue->dequeue();

foreach ($graph[$node] as $key => $value) {
	echo "visited: $visited[$key] key: $key value: $value \n";
}