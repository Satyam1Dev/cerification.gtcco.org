<div class="container mt-4">
        <div class="card">
            <div class="card-body">
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