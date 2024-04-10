<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (Replace with your database credentials)
    include('db.php');

    // Form fields
    $orgName = $_POST['orgName'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $cityState = $_POST['cityState'];
    $country = $_POST['country'];
    $yearInception = $_POST['yearInception'];
    $website = $_POST['website'];
    $profile = $_POST['profile'];
    $headName = $_POST['headName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $accreditations = $_POST['accreditations'];
    $accreditationDetails = isset($_POST['accreditationDetails']) ? $_POST['accreditationDetails'] : '';

    // SQL query to insert data into the table
    $sql = "INSERT INTO accredited_form_data (orgName, addressLine1, addressLine2, cityState, country, yearInception, website, profile, headName, phone, email, accreditations, accreditationDetails) 
            VALUES ('$orgName', '$addressLine1', '$addressLine2', '$cityState', '$country', '$yearInception', '$website', '$profile', '$headName', '$phone', '$email', '$accreditations', '$accreditationDetails')";

    if ($conn->query($sql) === TRUE) {
        // Success message as an alert
        echo "<div class='container'>
        <div class='alert alert-success' role='alert' style='background-color: #198c19; color: #fff; padding: 20px; width: 50%; margin: auto; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
            <h2 class='alert-heading'>Your form has been successfully submitted!</h2>
            <h4>We appreciate your interest and will get back to you soon.</h4>
            <hr>
            <h4 class='mb-0'>Thank you for choosing us.</h4>
        </div>
    </div>";
    


        // Redirect back to the form page
        echo "<script>
        // Reload the page after 15 seconds
        setTimeout(function() {
            // window.location.href = 'get_accredited.php';
        }, 15000); // 15 seconds
    </script>";    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Form submission method not allowed";
}
