<?php
include('db.php');
// Establish connection to MySQL database


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $country = $_POST['country'];
  $message = $_POST['message'];

  // Insert data into database
  $sql = "INSERT INTO contact_form (name, email, number, country, message)
          VALUES ('$name', '$email', '$number', '$country', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
