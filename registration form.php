<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Form</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="submit_student.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>
    </form>

</body>
</html>
