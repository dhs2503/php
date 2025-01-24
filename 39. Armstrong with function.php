<?php
    function Armstrong($num) 
    {
        $original = $num; 
        $num_digits = 0;
    
        while ($num > 0) 
        {
            $num = intval($num / 10);
            $num_digits++;
        }

        $sum = 0;
        $num = $original;

        while ($num > 0) 
        {
            $digit = $num % 10; 
            $sum += pow($digit, $num_digits);
            $num = intval($num / 10); 
        }
    
        
        if ($sum == $original) 
        {
            return true; 
        }
        else 
        {
            return false; 
        }
    }

    $number = 153;

    if (Armstrong($number)) 
    {
        echo "$number is an Armstrong number.";
    } 
    else 
    {
        echo "$number is not an Armstrong number.";
    }
    echo "<br> This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
