
<?php include('header2.php')?>

<section id="home-section" class="mt-5 p-5">

    <div class="container mt-5">
        <h1>Search Certificate</h1>
        <!-- Search Form -->
        <form method="GET" action="search_certificate.php" class="mb-4">
            <div class="mb-3">
                <label for="search_query" class="form-label">Search by Certificate No, Student ID, or Student Name:</label>
                <input type="text" class="form-control" id="search_query" name="search_query">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <?php
        // Check if form is submitted
        if(isset($_GET['search_query'])) {
            // Include database connection
            include('db.php');            
            // Fetch student details based on search query
            $search_query = $_GET['search_query'];
            // Implement your logic to fetch student details here based on $search_query            
            // Display student details excluding wallet
            ?>        
            <?php
            // Close database connection
        }
        ?>
    </div>
</section>

<style>
    .certificate-section{
        background-color: #000!important;
    }
</style>
<?php include('footer.php')?>

