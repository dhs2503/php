<?php
    $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
    $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

    $z = array_merge( $x + $y );

    var_dump($z);
    echo "<br>";

    var_dump( $x == $y );
    echo "<br>";

    var_dump( $x === $y );
    echo "<br>";

    var_dump( $x != $y );
    echo "<br>";

    var_dump( $x <> $y );
    echo "<br>";

    var_dump( $x !== $y );
    echo "<br>";

    echo "This program is Written and Executed by DHAANI SANGWAN(2220100253)";
?>