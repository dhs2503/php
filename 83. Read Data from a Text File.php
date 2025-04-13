<?php
$filename = "example.txt";

// Open the file in read mode
$file = fopen($filename, "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>"; // Output each line
    }
    fclose($file); // Close the file
} else {
    echo "Error opening the file!";
}

echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
