<?php include('sidebar.php') ?>


<section class="home-section" id="">
<?php include('header.php')?>

    <div class="container col-md-10 mt-5">
        <div class="card">
            <div class="card-header bg-primary">
            <h3 class="text-white">Certificate Creation Form</h3>
            </div>
            <div class="card-body">
                <form action="certificate_insert.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="student_id" placeholder="Student ID" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="certificate_no" placeholder="Certificate Number" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" name="created_on" placeholder="Certificate Number" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="status" required>
                            <option value="completed">Completed</option>
                            <option value="pending">Pending</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Certificate</button>
                </form>
            </div>
        </div>
    </div>
</section>