<!-- Display Total Course Count -->
<h2 class="text-light fs-1">
    <?php
    include('db.php');
    // SQL query to count the number of rows in the courses table
    $sql = "SELECT COUNT(*) AS total_courses FROM courses";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row["total_courses"];
        }
    } else {
        echo "0";
    }

    $conn->close();
    ?>
</h2>