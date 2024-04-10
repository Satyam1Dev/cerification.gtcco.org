    <?php
    // Include database connection
    include('db.php');

    // Check if student ID is provided in the URL
    if (isset($_GET['student_id'])) {
        $student_id = $_GET['student_id'];

        // Fetch student data from the database
        $sql = "SELECT * FROM students WHERE student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        $result = $stmt->get_result();
        // Check if student data exists
        if ($result->num_rows > 0) {
            $student = $result->fetch_assoc();

            // Fetch wallet data for the student
            $sql_wallet = "SELECT * FROM wallets WHERE student_id = ?";
            $stmt_wallet = $conn->prepare($sql_wallet);
            $stmt_wallet->bind_param("i", $student_id);
            $stmt_wallet->execute();
            $result_wallet = $stmt_wallet->get_result();

            // Check if wallet data exists for the student
            if ($result_wallet->num_rows > 0) {
                $wallet_data = $result_wallet->fetch_assoc();
    ?>
                <!-- Wallet Card -->

            <?php
            } else {
                echo "<p class='text-danger'>Wallet data not found for this student</p>";
            }

            // Fetch certificate data for the student
            $sql_certificate = "SELECT * FROM certificates WHERE student_id = ?";
            $stmt_certificate = $conn->prepare($sql_certificate);
            $stmt_certificate->bind_param("i", $student_id);
            $stmt_certificate->execute();
            $result_certificate = $stmt_certificate->get_result();

            // Check if certificate data exists for the student
            if ($result_certificate->num_rows > 0) {
                $certificate_data = $result_certificate->fetch_assoc();
            ?>

            <?php
            } else {
                echo "<p class='text-danger'>Certificate data not found for this student</p>";
            }
            ?>
            <?php
            $status = $certificate_data['status'];
            $label_class = ($status == 'completed') ? 'badge bg-success' : 'badge bg-danger';
            $status_text = ($status == 'completed') ? 'Completed' : 'Not Completed';
            ?>
            <!-- Student Details Card -->
    <?php
        } else {
            echo "<p class='text-danger'>Student not found</p>";
        }

        // Close statement and database connection
        $stmt->close();
        $stmt_wallet->close();
        $stmt_certificate->close();
        $conn->close();
    } else {
        echo "<p class='text-danger'>Student ID not provided</p>";
    }
    ?>



    <?php include('sidebar.php'); ?>
    <section class="home-section" >
        <nav class="navbar navbar-expand-lg " data-bs-theme="dark" id="heading">
            <div class="container">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <div class="d-flex gap-2">
                        <p class="text-white">Log Out</p>
                        <i class="bx bx-log-out" id="log_out" style="font-size: 2rem; color: #fff;"></i>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
                <h2>Student Details</h2>
            </nav>
        </div>
        <div class="container p-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <p class="text-primary">Wallet</p>
                        <p>Amount Charged: ₹<?php echo $wallet_data['amount_charged']; ?></p>
                        <p>Transaction Date: <?php echo $wallet_data['transaction_date']; ?></p>
                        <p>Comments: <?php echo $wallet_data['comments']; ?></p>
                        <!-- Add more fields as needed -->
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <!-- Certificate Row -->
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Certificate No</label>
                                    <input type="text" class="form-control dis-inp" placeholder="DOB" value="<?php echo $certificate_data['certificate_no']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Created On</label>
                                    <input type="text" class="form-control dis-inp" placeholder="DOB" value="<?php echo $certificate_data['created_on']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <p><span class="badge <?php echo $label_class; ?>"><?php echo $status_text; ?></span></p>
                                </div>
                            </div>
                        </div>
                        <!-- Student Details Row -->
                        <div class="row">
                            <div class="col-6 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control dis-inp" placeholder="name" value="<?php echo $student['name']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-6 mb-2 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">DOB</label>
                                    <input type="text" class="form-control dis-inp" placeholder="DOB" value="<?php echo $student['dob']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Father's Name</label>
                                    <input type="text" class="form-control dis-inp" placeholder="father_name" value="<?php echo $student['father_name']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mother's Name</label>
                                    <input type="text" class="form-control dis-inp" placeholder="mother_name" value="<?php echo $student['mother_name']; ?>" disabled>
                                </div>
                            </div>
                            <!-- Add more fields as needed -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control dis-inp" placeholder="Email" value="<?php echo $student['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <input type="text" class="form-control dis-inp" placeholder="country" value="<?php echo $student['country']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone No</label>
                                    <input type="text" class="form-control dis-inp" placeholder="country" value="<?php echo $student['phone_no']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control dis-inp" placeholder="country" value="<?php echo $student['address']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">courses</label>
                                    <input type="text" class="form-control dis-inp" placeholder="courses" value="<?php echo $student['courses']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">duration</label>
                                    <input type="text" class="form-control dis-inp" placeholder="duration" value="<?php echo $student['duration']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course_start</label>
                                    <input type="text" class="form-control dis-inp" placeholder="course_start" value="<?php echo $student['course_start']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course_end </label>
                                    <input type="text" class="form-control dis-inp" placeholder="course_end " value="<?php echo $student['course_end']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <h5 for="exampleInputEmail1">Student Photo</h5><br>
                                    <img src="<?php echo $student['userImgPath']; ?>" class="rounded float-start" alt="..." width="200px">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <h5 for="exampleInputEmail1">Basic Educational Certificate</h5><br>
                                    <img src="<?php echo $student['basic_edu_certPath']; ?>" class="rounded float-start" alt="..." width="200px">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <h5 for="exampleInputEmail1">Identity Document</h5><br>
                                    <img src="<?php echo $student['identity_docPath']; ?>" class="rounded float-start" alt="..." width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <script src="assets/js/script.js"></script>
    </body>

    </html>