<?php

    function factorial($n) 
    {
        if ($n == 0 || $n == 1) 
        {
            return 1;
        }
        return $n * factorial($n - 1);
    }

    $number = 5;
    $result = factorial($number);

    echo "The factorial of $number is $result.";

    echo "<br> This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
