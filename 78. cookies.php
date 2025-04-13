<?php

    // Setting a cookie
    setcookie("username", "Harshit Sidher", time()+30*24*60*60);
    
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "\n";
    } else{
        echo "Welcome Guest!\n";
    
    }
    
    print_r($_COOKIE);

    echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";

?>