<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Plain Chess Board</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 60px; height: 60px; }
        .white { background-color: #EEE; }
        .black { background-color: #555; }
    </style>
</head>
<body>
<table border="1">
<?php

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $class = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "<td class='{$class}'></td>";
    }
    echo "</tr>";
}
echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
</table>
</body>
</html>
