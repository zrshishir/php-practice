<?php 

function lcs($x, $y, $lx, $ly){
    if($lx == 0 || $ly){
        return 0;
    }else if($x[$lx - 1] == $y[$ly - 1]){
        return 1 + lcs($x, $y, $lx - 1, $ly - 1);
    }else{
        max(lcs($x, $y, $lx, $ly - 1), lcs($x, $y, $lx - 1, $ly));
    }
}

$x = "AGGTAB";
$y = "GXTXAYB";
echo "The longest common subsequence is: ";
echo lcs($x, $y, strlen($x), strlen($y));