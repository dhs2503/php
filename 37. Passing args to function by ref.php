<?php
    function selfMultiply(&$number) {
        $number *= $number;
        return $number;
    }

    $mynum = 5;

    echo $mynum; // Outputs: 5
    echo "<br>";

    selfMultiply($mynum);

    echo $mynum; // Outputs: 25
    echo "<br>This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>
