<?php
$filename = "example.txt";
$content = "This is a sample text written to the file.";

// Open the file in write mode
$file = fopen($filename, "w");

if ($file) {
    fwrite($file, $content); // Write content to file
    fclose($file); // Close file
    echo "Content written successfully!";
} else {
    echo "Error writing to the file!";
}

echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
