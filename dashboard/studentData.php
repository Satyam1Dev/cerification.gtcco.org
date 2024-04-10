<?php
include('db.php');

// Fetch student data from the database (limit to first five records)
$sql = "SELECT * FROM students LIMIT 5";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output table headers with dark background
    echo "<div class='table-responsive'>";
    echo "<table class='table table-light table-bordered'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>User Image</th>";
    echo "<th>DOB</th>";
    echo "<th>Father's Name</th>";
    echo "<th>Mother's Name</th>";
    echo "<th>Email</th>";
    echo "<th>Country</th>";
    echo "<th>Phone No</th>";
    echo "<th>Courses</th>";
    echo "<th>Action</th>"; // Add a column for the view button
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Output data rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td><img src='" . $row["userImgPath"] . "' alt='User Image' style='max-width: 100px;'></td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["father_name"] . "</td>";
        echo "<td>" . $row["mother_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["country"] . "</td>";
        echo "<td>" . $row["phone_no"] . "</td>";
        echo "<td>" . $row["courses"] . "</td>";
        echo "<td><button class='btn btn-primary view-btn' data-id='" . $row["student_id"] . "'>View</button></td>"; // Add view button with data-id attribute
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "No records found";
}

// Close database connection
$conn->close();
?>
<script>
    // Add event listener to all view buttons
    document.querySelectorAll('.view-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get the student ID from the data-id attribute
            const studentId = this.getAttribute('data-id');
            // Redirect to the view page with the student ID as a query parameter
            window.location.href = 'view.php?student_id=' + studentId;
        });
    });
</script>