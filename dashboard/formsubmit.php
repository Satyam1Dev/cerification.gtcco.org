<?php
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $email = $_POST["email"];
    $country = $_POST["countries"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $courses = $_POST["courses"];
    $duration = $_POST["duration"];
    $course_start = $_POST["course_start"];
    $course_end = $_POST["course_end"];

    // Handle file uploads
    $userImg = $_FILES["userImg"]["name"];
    $basic_edu_cert = $_FILES["basic_edu_cert"]["name"];
    $identity_doc = $_FILES["identity_doc"]["name"];

    // Handle file uploads
    $uploadDir = "uploads/";

    // Move uploaded files to the upload directory and handle errors
    if (!empty($_FILES["userImg"]["tmp_name"])) {
        $userImgPath = $uploadDir . basename($_FILES["userImg"]["name"]);
        if (!move_uploaded_file($_FILES["userImg"]["tmp_name"], $userImgPath)) {
            echo "Failed to move userImg file.";
        }
    }

    if (!empty($_FILES["basic_edu_cert"]["tmp_name"])) {
        $basic_edu_certPath = $uploadDir . basename($_FILES["basic_edu_cert"]["name"]);
        if (!move_uploaded_file($_FILES["basic_edu_cert"]["tmp_name"], $basic_edu_certPath)) {
            echo "Failed to move basic_edu_cert file.";
        }
    }

    if (!empty($_FILES["identity_doc"]["tmp_name"])) {
        $identity_docPath = $uploadDir . basename($_FILES["identity_doc"]["name"]);
        if (!move_uploaded_file($_FILES["identity_doc"]["tmp_name"], $identity_docPath)) {
            echo "Failed to move identity_doc file.";
        }
    }

    // Insert data into database
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO students (name, dob, father_name, mother_name, email, country, phone_no, address, courses, duration, course_start, course_end, userImgPath, basic_edu_certPath, identity_docPath) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the placeholders
    $stmt->bind_param("ssssssissssssss", $name, $dob, $father_name, $mother_name, $email, $country, $phone_no, $address, $courses, $duration, $course_start, $course_end, $userImgPath, $basic_edu_certPath, $identity_docPath);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
} else {
    // Redirect to the form page if accessed directly
    header("Location: studentform.html");
    exit;
}
