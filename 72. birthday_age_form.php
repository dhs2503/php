<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Age</title>
</head>
<body>

    <h2>Enter Your Birthdate</h2>
    <form method="post">
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate Age</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate']; // Get input from user

        if (!empty($birthdate)) {
            $currentDate = date("Y-m-d");

            // Convert to DateTime objects
            $birthDateObj = new DateTime($birthdate);
            $currentDateObj = new DateTime($currentDate);

            // Calculate age difference
            $ageDifference = $birthDateObj->diff($currentDateObj);

            echo "<h3>Your age is: " . $ageDifference->y . " years, " . $ageDifference->m . " months, and " . $ageDifference->d . " days.</h3>";
        }
    }
    echo "<br>This program is Written and Exceuted by DHAANI SANGWAN(2220100253)";
    ?>

</body>
</html>
