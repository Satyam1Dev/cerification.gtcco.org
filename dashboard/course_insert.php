<?php
// Database connection
include('db.php');

// Retrieve form data
$course_name = $_POST['course_name'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// SQL query to insert course data into courses table
$sql = "INSERT INTO courses (name, description, duration, start_date, end_date)
VALUES ('$course_name', '$description', '$duration', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
    echo "New course added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
