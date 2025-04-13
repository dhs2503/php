<?php
$filename = "about_me.txt";
$content = "Hello, my name is DHAANI SANGWAN. I am passionate about coding and technology. 
I love solving problems and learning new programming languages.";

// Open file in write mode
$file = fopen($filename, "w");

if ($file) {
    fwrite($file, $content);
    fclose($file);
    echo "File 'about_me.txt' created successfully!";
} else {
    echo "Error creating the file!";
}

echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
