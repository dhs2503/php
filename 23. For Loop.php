<?php

    /* example 1 */
    echo "First Way:";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "<br>";
    }
    
    echo "<hr>";
    
    /* example 2 */
    echo "Another Way:";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "<br>";
    }

    echo "This program is Written and Executed by DHAANI SANGWAN(2220100253)"; 
?>