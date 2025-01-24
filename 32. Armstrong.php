<?php

    $num = 153;

    $original = $num;

    $numDigits = strlen($num);


    $sum = 0;

    while ($num > 0) 
    {
        $digit = $num % 10;

    
        $sum += pow($digit, $numDigits);

        $num = (int)($num / 10);
    }

    if ($sum == $original) 
    {
        echo "$original is an Armstrong number.\n";
    } 
    else 
    {
        echo "$original is not an Armstrong number.\n";
    }

    echo "<br>";
    echo "This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
