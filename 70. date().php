<!DOCTYPE html>
<html>
<head>
    <title>Date Function Example</title>
</head>
<body>

<?php

echo date("l") . "<br>";
echo date("l jS \\of F Y h:i:s A") . "<br>";
echo "Oct 3, 1975 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1975)) . "<br>";
echo date(DATE_RFC822) . "<br>";
echo date(DATE_ATOM, mktime(0, 0, 0, 10, 3, 1975));
echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>

</body>
</html>
