<?php
// Include database connection
include('db.php');

// Check if search query is provided
if (isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];

    // Construct the SQL query to search for student details
    $sql = "SELECT s.*, c.* FROM students s
            INNER JOIN certificates c ON s.student_id = c.student_id
            WHERE c.certificate_no = ? OR s.name LIKE ?";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $search_param = "%{$search_query}%"; // For LIKE clause
        $stmt->bind_param("ss", $search_query, $search_param);

        // Execute the statement
        if ($stmt->execute()) {
            // Get the result
            $result = $stmt->get_result();

            if ($result) {
                // Check if any rows are returned
                if ($result->num_rows > 0) {
                    // Output student details
                    while ($row = $result->fetch_assoc()) {
                        $certificate_data = $row; // Assuming certificate data is in the same row
                        $status_text = $row['status']; // Assuming status is fetched from the database
                        $student = $row; // Assuming student data is in the same row
                        ?>
                        <?php
                        $status = $certificate_data['status'];
                        $label_class = ($status == 'completed') ? 'badge bg-success' : 'badge bg-danger';
                        $status_text = ($status == 'completed') ? 'Completed' : 'Not Completed';
                        ?> <!-- Your HTML card structure here -->
                        <?php include('display_student_details.php') ?>
                        <?php
                    }
                } else {
                    echo "No results found.";
                }
            } else {
                // Error handling for SQL execution
                echo "Error: No result object returned.";
            }
        } else {
            // Error handling for SQL execution
            echo "Error: " . $stmt->error;
        }

        // Close statement
        // $stmt->close();
    } else {
        echo "Error in preparing the SQL statement.";
    }

    // Close database connection
    // $conn->close();
} else {
    echo "Search query not provided.";
}
?>
