<?php include('sidebar.php'); ?>
<section class="home-section " id="">
<?php include('header.php')?>

    <div class="container  p-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Add Course</h3>    
                    </div>
                    <div class="card-body">
                    <form action="course_insert.php" method="post">
                        <div class="form-group">
                            <label for="course_name">Course Name:</label>
                            <input type="text" class="form-control" id="course_name" name="course_name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration:</label>
                            <input type="text" class="form-control" id="duration" name="duration" required>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Course</button>
                            <span id="spin" style="display: none;">
                                <img src="https://certification.sdccanada.org/assets/img/ajax-loader.gif">
                            </span>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
