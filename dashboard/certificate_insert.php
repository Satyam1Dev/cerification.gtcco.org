<?php
include('db.php');

// Check if student exists and insert if necessary
function checkAndInsertStudent($student_id) {
    global $conn;

    // Check if student exists
    $sql = "SELECT id FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // If student doesn't exist, insert student record
    if ($result->num_rows === 0) {
        // Insert student record
        $insertSql = "INSERT INTO students (id) VALUES (?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("i", $student_id);
        $insertStmt->execute();
        $insertStmt->close();

        echo "Student inserted successfully with ID: $student_id<br>";
    } else {
        echo "Student with ID $student_id already exists<br>";
    }

    $stmt->close();
}

// Code for certificate creation
function createCertificate($student_id, $certificate_no, $status,$created_on) {
    global $conn;

    // Check and insert student if necessary
    checkAndInsertStudent($student_id);

    // Prepare the SQL statement
    $sql = "INSERT INTO certificates (student_id, certificate_no, status,created_on) VALUES (?, ?, ?,?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("isss", $student_id, $certificate_no, $status,$created_on);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "Certificate created successfully!<br>";
    } else {
        echo "Error creating certificate: " . $conn->error . "<br>";
    }

    // Close statement
    $stmt->close();
}

// Example usage with manual input
$student_id = $_POST['student_id']; // Get student ID from form input
$certificate_no = $_POST['certificate_no']; // Get certificate number from form input
$status = $_POST['status']; // Get status from form input
$created_on = $_POST['created_on'];
createCertificate($student_id, $certificate_no, $status,$created_on);
?>
