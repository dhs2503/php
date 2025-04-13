<?php

    function countWords($string)
    {
        return str_word_count($string);
    }

    $inputString = "Hello, how are you doing?";
    echo "The number of words in the string is: " . countWords($inputString);

    echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
