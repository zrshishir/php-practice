<?php
function primeCheck($numer):int{
    if($numer == 1){
        return 0;
    }

    for($i = 2; $i <= sqrt($numer); $i++)
        if($numer % 2 == 0)
            return 0;

    return 1;
}

for($i = 1; $i <= 20; $i++){
    if(primeCheck($i)){
        echo $i . " is prime." . "\n";
    }else{
        echo $i . " is not prime." . "\n";
    }
}