<?php
include('db.php');

// Code for wallet management
function addToWallet($student_id, $amount_charged, $comments) {
    global $conn;

    // Check if student exists
    $sql_check = "SELECT id FROM students WHERE id = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("i", $student_id);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    // If student doesn't exist, insert student record
    if ($result_check->num_rows === 0) {
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

    $stmt_check->close();

    // Prepare the SQL statement for wallet insertion
    $sql_wallet = "INSERT INTO wallets (student_id, amount_charged, transaction_date, comments) VALUES (?, ?, NOW(), ?)";
    
    // Prepare the SQL statement
    $stmt_wallet = $conn->prepare($sql_wallet);

    // Bind parameters and execute the statement
    $stmt_wallet->bind_param("ids", $student_id, $amount_charged, $comments);
    $stmt_wallet->execute();

    // Check if the insertion was successful
    if ($stmt_wallet->affected_rows > 0) {
        echo "Amount added to wallet successfully!<br>";
    } else {
        echo "Error adding amount to wallet: " . $conn->error . "<br>";
    }

    // Close statement
    $stmt_wallet->close();
}

// Example usage:
$student_id = $_POST['student_id']; // Get student ID from form input
$amount_charged = $_POST['amount_charged']; // Get certificate number from form input
$comments = $_POST['comments']; // Get status from form input
addToWallet($student_id, $amount_charged, $comments);
?>
