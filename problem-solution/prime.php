<?php 
// PHP code to check wether a number is prime or Not 
// function to check the number is Prime or Not 
function primeCheck($number){ 
	if ($number == 1) 
	return 0; 
	
	for ($i = 2; $i <= sqrt($number); $i++){ 
		if ($number % $i == 0) 
			return 0; 
	} 
	return 1; 
} 

// Driver Code 
$number = 9; 
$flag = primeCheck($number); 
if ($flag == 1) 
	echo "Prime"; 
else
	echo "Not Prime"
?> 
