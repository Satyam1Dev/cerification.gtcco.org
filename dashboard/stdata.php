<?php
include('db.php');
include('sidebar.php');
include('header.php');

// Execute the SQL query
$sql = "SELECT 
            s.id AS student_id,
            s.name AS student_name,         
            t.course_name,
            s.center,
            c.certificate_no,
            c.created_on,
            c.status AS certificate_status,
            w.amount_charged
        FROM 
            students s
        LEFT JOIN 
            certificates c ON s.id = c.student_id
        LEFT JOIN 
            wallets w ON s.id = w.student_id
        LEFT JOIN 
            courses t ON s.id = t.student_id";
 
$result = $conn->query($sql);

// Check for SQL errors
if (!$result) {
    die("Error in SQL query: " . $conn->error);
}

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    echo "
    <section class='home-section pt-5'>
    <div class='container p-5 bg-light'>
    <h3> Students List </h3>
            <table class='table table-bordered'>
                <thead class='bg-dark text-white'>
                    <tr>
                        <th>Sl No</th> 
                        <th>Certificate No</th>
                        <th>Name</th>
                        <th>Course Name</th>
                        <th>Center</th>
                        <th>Created On</th>   
                        <th>Amount Charged</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>";

    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        // Determine badge color based on certificate status
        $badge_class = ($row["certificate_status"] == "completed") ? "badge bg-success" : "badge bg-danger";

        // Output row data with badge
        echo "<tr>
                <td>{$counter}</td>
                <td>{$row["certificate_no"]}</td>
                <td>{$row["student_name"]}</td>
                <td>{$row["course_name"]}</td>
                <td>{$row["center"]}</td>
                <td>{$row["created_on"]}</td>
                <td>₹{$row["amount_charged"]}</td>
                <td><span class='{$badge_class}'>" . ucfirst($row["certificate_status"]) . "</span></td>
                <td> <button class='btn btn-primary view-btn' data-id='" . $row["student_id"] . "'><i class='bx bxs-show'></i>
                </button> </td>  
                   </tr>";
        $counter++;
    }

    echo "</tbody></table></div></section>";
} else {
    echo "0 results";
}

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


