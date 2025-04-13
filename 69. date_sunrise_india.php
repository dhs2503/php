<!DOCTYPE html>
<html>
    <body>
        <?php

        date_default_timezone_set("Asia/Kolkata"); // Set timezone to India (GMT +5:30)

        echo("<h2>New Delhi, India</h2>");
        echo("Date: " . date("D M d Y"));
        echo("<br>Sunrise time: ");
        echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.61, 77.23, 90, 5.5));
        echo("<br>Sunset time: ");
        echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.61, 77.23, 90, 5.5));
        echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
        ?>

    </body>
</html>
