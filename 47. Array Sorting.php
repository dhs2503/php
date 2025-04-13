<?php
$fruits = ["Banana", "Apple", "Cherry", "Mango"];

echo "Original Array: ";
print_r($fruits);
echo "<br>";

// Sorts in ascending alphabetical order
sort($fruits);

echo "Sorted Array: ";
print_r($fruits);
echo "<br>";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>"; // Using <br> instead of \n for proper HTML output
}

echo "<br> This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
