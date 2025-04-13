<?php
$filename = "example.txt";

// Open the file in read mode
$file = fopen($filename, "r");

if ($file) {
    echo "File opened successfully!";
    fclose($file); // Close the file
} else {
    echo "Error opening the file!";
}

echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
