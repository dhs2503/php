<?php
    echo "Lisbon, Portugal\n";
    echo("Date: " . date("D M d Y"));
    echo "<br>";
    echo("\nSunrise time: ");
    echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
    echo "<br>";
    echo("\nSunset time: ");
    echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));

    echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>