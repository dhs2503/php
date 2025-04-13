<?php
$birthdate = "2003-03-15"; 

$currentDate = date("Y-m-d");

$birthDateObj = new DateTime($birthdate);
$currentDateObj = new DateTime($currentDate);

$ageDifference = $birthDateObj->diff($currentDateObj);

echo "Your age is: " . $ageDifference->y . " years, " . $ageDifference->m . " months, and " . $ageDifference->d . " days.";
echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>