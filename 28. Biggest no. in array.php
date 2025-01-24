<!DOCTYPE html>
<html>
<head>
    <title>Find the Largest Number</title>
</head>
<body>
    <h2>Find the Largest Number in an Array</h2>
    <form method="post">
        <label for="num1">Enter the first number: </label>
        <input type="number" name="num1" id="num1">
        <br><br>
        
        <label for="num2">Enter the second number: </label>
        <input type="number" name="num2" id="num2">
        <br><br>
        
        <label for="num3">Enter the third number: </label>
        <input type="number" name="num3" id="num3">
        <br><br>

        <input type="submit" value="Find Largest Number">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        // Get the numbers from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Initialize the largest number to the first number
        $largest = $num1;

        // Check if the second number is greater than the largest number
        if ($num2 > $largest) {
            $largest = $num2;
        }

        // Check if the third number is greater than the largest number
        if ($num3 > $largest) {
            $largest = $num3;
        }

        // Display the largest number
        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>
</body>
</html>
