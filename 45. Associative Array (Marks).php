<html>
<head>
    <title>Student Marks</title>
</head>
<body>
    <h2>Enter Marks for 5 Subjects</h2>
    
    <form method="post">
        Pyhton: <input type="number" name="Pyhton" required><br><br>
        Java: <input type="number" name="Java" required><br><br>
        C#: <input type="number" name="C#" required><br><br>
        SQL: <input type="number" name="SQL" required><br><br>
        PHP: <input type="number" name="PHP" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        //WRITE A PHP CODE TO TAKE INPUT FROM THE USER TO ENTER MARKS OF 5 SUBJECTS USING ASSOCIATIVE ARRAY AND DISPLAY THE TOTAL AND MARKS IN PERCENTAGE
        // Create associative array to hold subject marks
        $marks = array(
            "Pyhton" => $_POST['Pyhton'],
            "Java" => $_POST['Java'],
            "C#" => $_POST['C#'],
            "SQL" => $_POST['SQL'],
            "PHP" => $_POST['PHP']
        );

        // Calculate total marks
        $total = array_sum($marks);

        // Calculate percentage (Assuming full marks for each subject is 100)
        $percentage = ($total / 500) * 100;

        // Display results
        echo "<h3>Results</h3>";
        echo "Total Marks: $total <br>";
        echo "Percentage: " . number_format($percentage, 2) . "% <br>";
    }

    echo "<br> This program is Written and Executed by DHAANI SANGWAN(2220100253)";
    ?>

</body>
</html>
