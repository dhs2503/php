<!DOCTYPE html>
<html>
<body>
<?php
// Define an array
$cars = array("Volvo", "BMW", "Toyota"); 

// Sort the array
sort($cars);

// Get the length of the array
$cars_length = count($cars);

// Loop through the array and print each element
for ($x = 0; $x < $cars_length; $x++) { 
    echo $cars[$x];
    echo "<br>";
}

echo "<br> This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
</body>
</html>
