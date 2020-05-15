<?php
$studentInfo = [];
$studentInfo['Name'] = "Adiyan";
$studentInfo['Age'] = 11;
$studentInfo['Class'] = 6;
$studentInfo['RollNumber'] = 71;
$studentInfo['Contact'] = "info@adiyan.com";
foreach($studentInfo as $key => $value) {
echo $key.": ".$value."<br>";
}