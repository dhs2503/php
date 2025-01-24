<?php
    function countDigits($num) 
    {
        $count = 0;

        if ($num == 0) {
            return 1;
        }

        $num = abs($num);
    
        while ($num > 0) 
        {
            $num = intval($num / 10); 
            $count++; 
        }

        return $count;
    }

    $number = 123456;
    $digitCount = countDigits($number);

    echo "The number $number has $digitCount digits.";
    echo "<br> This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
