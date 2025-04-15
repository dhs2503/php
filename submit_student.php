<?php
// Check if the form has been submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $class = htmlspecialchars(trim($_POST['class']));
    $semester = htmlspecialchars(trim($_POST['semester']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));

    // Basic validation
    if (empty($name) || empty($class) || empty($semester) || empty($gender) || empty($mobile)) {
        echo "All fields are required!";
        exit;
    }

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if database exists
    $db_check_query = "SHOW DATABASES LIKE '$dbname'";
    $result = $conn->query($db_check_query);

    if ($result->num_rows == 0) {
        // If database doesn't exist, create it
        $create_db_query = "CREATE DATABASE $dbname";
        if ($conn->query($create_db_query) === TRUE) {
            echo "Database '$dbname' created successfully.<br>";
        } else {
            echo "Error creating database: " . $conn->error . "<br>";
            exit;
        }
    }

    // Select the database
    $conn->select_db($dbname);

    // Check if the table exists
    $table_check_query = "SHOW TABLES LIKE 'students'";
    $result = $conn->query($table_check_query);

    if ($result->num_rows == 0) {
        // If table doesn't exist, create it
        $create_table_query = "
        CREATE TABLE students (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            class VARCHAR(50) NOT NULL,
            semester VARCHAR(50) NOT NULL,
            gender VARCHAR(10) NOT NULL,
            mobile VARCHAR(15) NOT NULL
        )";
        if ($conn->query($create_table_query) === TRUE) {
            echo "Table 'students' created successfully.<br>";
        } else {
            echo "Error creating table: " . $conn->error . "<br>";
            exit;
        }
    }

    // Prepare and execute the INSERT statement
    $stmt = $conn->prepare("INSERT INTO students (name, class, semester, gender, mobile) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $class, $semester, $gender, $mobile);

    if ($stmt->execute()) {
        echo "New record created successfully!<br>";
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Form was not submitted properly.";
}
?>
