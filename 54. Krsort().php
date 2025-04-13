<!DOCTYPE html>
<html>
<head>
    <title>Sorting PHP Associative Array in Descending Order by Key</title>
</head>
<body>
<?php
// Define array
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);

// Sort array in descending order by key
krsort($age);

// Print sorted array
print_r($age);

echo "<br> This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
</body>
</html>
