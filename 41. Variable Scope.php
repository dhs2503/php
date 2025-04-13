<?php
    function test()
    {
        $greet = "Hello World!";
        echo $greet; 
    }
    test(); 
    echo $greet; // This will cause an undefined variable error since $greet is local to the function test()
    echo "<br> This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
