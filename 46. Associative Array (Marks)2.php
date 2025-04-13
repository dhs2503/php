<html>
<head>
    <title>Student Marks</title>
</head>
<body>
    <h2>Enter Marks for 5 Subjects</h2>
    
    <form method="post">
        Python: <input type="number" name="Python" required><br><br>
        Java: <input type="number" name="Java" required><br><br>
        C#: <input type="number" name="C#" required><br><br>
        SQL: <input type="number" name="SQL" required><br><br>
        PHP: <input type="number" name="PHP" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $marks = array(
            "Python" => $_POST['Python'],
            "Java" => $_POST['Java'],
            "C#" => $_POST['C#'],
            "SQL" => $_POST['SQL'],
            "PHP" => $_POST['PHP']
        );

        // Calculate total marks
        $total = array_sum($marks);

        // Calculate percentage (Assuming full marks for each subject is 100)
        $percentage = ($total / 500) * 100;

        // Display results in a table
        echo "<h3>Results</h3>";
        echo "<table border='1'>
                <tr>
                    <th>S.No.</th>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>";
        $sno = 1;
        foreach ($marks as $subject => $mark) {
            echo "<tr>
                    <td>$sno</td>
                    <td>$subject</td>
                    <td>$mark</td>
                  </tr>";
            $sno++;
        }
        echo "<tr>
                <td colspan='2'><b>Total Marks</b></td>
                <td><b>$total</b></td>
              </tr>";
        echo "<tr>
                <td colspan='2'><b>Percentage</b></td>
                <td><b>" . number_format($percentage, 2) . "%</b></td>
              </tr>";
        echo "</table>";
    }

    echo "<br> This program is Written and Executed by DHAANI SANGWAN(2220100253)";
    ?>

</body>
</html>
