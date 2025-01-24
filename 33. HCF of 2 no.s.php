<?php

    function findHCF($a, $b) 
    {
        while ($b != 0) 
        {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    $a = 56;  
    $b = 98;  

    $hcf = findHCF($a, $b);


    echo "The HCF of $a and $b is $hcf.";

    echo "<br>";
    echo "This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
