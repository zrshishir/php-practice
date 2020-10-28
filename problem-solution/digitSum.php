<?php 

function digitSum(int $number): int{
    $remainder = $number % 10;
    $quotient = $number / 10;
    if($quotient < 1){
     return true;
    }else{
        return $remainder + digitSum($quotient);
    }
    
}

$num = 1234409;

echo digitSum($num);