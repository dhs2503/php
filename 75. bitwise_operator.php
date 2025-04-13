<?php
// Define two numbers
$a = 5;  // Binary:  0101
$b = 3;  // Binary:  0011

echo "a = $a (Binary: " . decbin($a) . ")<br>";
echo "b = $b (Binary: " . decbin($b) . ")<br><br>";

// Bitwise AND (&)
$result = $a & $b;  // 0101 & 0011 = 0001 (1 in decimal)
echo "Bitwise AND (&): $result (Binary: " . decbin($result) . ")<br>";

// Bitwise OR (|)
$result = $a | $b;  // 0101 | 0011 = 0111 (7 in decimal)
echo "Bitwise OR (|): $result (Binary: " . decbin($result) . ")<br>";

// Bitwise XOR (^)
$result = $a ^ $b;  // 0101 ^ 0011 = 0110 (6 in decimal)
echo "Bitwise XOR (^): $result (Binary: " . decbin($result) . ")<br>";

// Bitwise NOT (~)
$result = ~$a;  // ~0101 = 1010 (negative representation in PHP)
echo "Bitwise NOT (~) of a: $result (Binary: " . decbin($result) . ")<br>";

// Left Shift (<<)
$result = $a << 1;  // 0101 << 1 = 1010 (10 in decimal)
echo "Left Shift (<<): $result (Binary: " . decbin($result) . ")<br>";

// Right Shift (>>)
$result = $a >> 1;  // 0101 >> 1 = 0010 (2 in decimal)
echo "Right Shift (>>): $result (Binary: " . decbin($result) . ")<br>";

echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
?>
