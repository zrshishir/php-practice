<?php
//topological sorting using kahn algorithm

$graph = [
    [0, 0, 0, 0, 1],
    [1, 0, 0, 1, 0],
    [0, 1, 0, 1, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
];

function topologicalSort(array $matrix): SplQueue{
    //initailization of queue
    $order = new SplQueue;
    $queue = new SplQueue;
    $size = count($matrix);
    $incoming = array_fill(0, $size, 0);

    //algorithm implementation start
    //1. Calculate the all indegree (incoming edges) for each of the vertex and put all vertices in a queue where 
    //the indegree is 0. Also, initialize the count for the visited node to 0;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($matrix[$j][$i]) { //please notify here it is the main clue. first column then row
                $incoming[$i] ++;
            }
        }
        if ($incoming[$i] == 0) {
            $queue->enqueue($i);
        }
    }

    //2. Remove a vertex from the queue and perform the following operations on it:
        // 1. Increment the visited node count by 1.
        // 2. Reduce the indegree for all adjacent vertices by 1.
        // 3. If the indegree of the adjacent vertex becomes 0, add it to the queue.
        // 3. Repeat step 2 until the queue is empty.
    
        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            for ($i = 0; $i < $size; $i++) {
                if ($matrix[$node][$i] == 1) {
                    $matrix[$node][$i] = 0;
                    $incoming[$i] --;
                    if ($incoming[$i] == 0) {
                        $queue->enqueue($i);
                    }
                }
            }
            $order->enqueue($node);
        }
    
    //4. If the count of the visited node is not the same as the count of the nodes, then topological sorting is
    // not possible for the given DAG.

    if ($order->count() != $size) // cycle detected and sorting is not possible
        return new SplQueue;
    return $order;
}


$sorted = topologicalSort($graph);
while (!$sorted->isEmpty()) {
    echo $sorted->dequeue() . "\t";
}
echo "\n";

