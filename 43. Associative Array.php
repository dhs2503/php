<?php
     
    $sal = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);
     
    echo "Salary of Roshan is ". $sal['roshan'] . "<br>";
    echo "Salary of Twinkle is ".  $sal['twinkle']. "<br>";
    echo "Salary of Zara is ".  $sal['zara']. "<br>";
     
    $sal['roshan'] = "high";
    $sal['qadir'] = "medium";
    $sal['twinkle'] = "low";
     
    echo "Salary of Roshan is ". $sal['roshan'] . "<br>";
    echo "Salary of Twinkle is ".  $sal['twinkle']. "<br>";
    echo "Salary of Zara is ".  $sal['zara']. "<br>";
    
    echo "<br> This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>