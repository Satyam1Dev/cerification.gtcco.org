<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db.php";

    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
    $role = isset($_POST["role"]) && in_array($_POST["role"], ['user', 'admin']) ? $_POST["role"] : 'user'; // Default role is 'user'

    // Check if the username already exists
    $check_query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert new user into the database
        $insert_query = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sss", $username, $password, $role);

        if ($stmt->execute()) {
            // Redirect to index.php after successful signup
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
