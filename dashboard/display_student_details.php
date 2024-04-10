<?php include('sidebar.php') ?>
<section class="home-section " id="">
<?php include('header.php')?>

    <div class="certificate mt-5">
        <div class="header">
            <div class="title">Certificate of Completion</div>
            <div class="subtitle">This is to certify that</div>
        </div>
        <div class="content">
            <div class="row  mb-2 ">
                <div class="col-md-6 "><strong>Name:</strong> <?php echo $student['name']; ?></div>
                <div class="col-md-6 "><strong>DOB:</strong> <?php echo $student['dob']; ?></div>
            </div>
            <div class="row  mb-2">
                <div class="col-md-6"><strong>Father's Name:</strong> <?php echo $student['father_name']; ?></div>
                <div class="col-md-6"><strong>Mother's Name:</strong> <?php echo $student['mother_name']; ?></div>
            </div>

            <div class="row  mb-2">
                <div class="col-md-6"><strong>Email:</strong> <?php echo $student['email']; ?></div>
                <div class="col-md-6"><strong>Country:</strong> <?php echo $student['country']; ?></div>
            </div>
            <div class="row  mb-2">
                <div class="col-md-6"><strong>Phone No:</strong> <?php echo $student['phone_no']; ?></div>
                <div class="col-md-6"><strong>Address:</strong> <?php echo $student['address']; ?></div>
            </div>
            <div class="row  mb-2">
                <div class="col-md-6"><strong>Courses:</strong> <?php echo $student['courses']; ?></div>
                <div class="col-md-6"><strong>Duration:</strong> <?php echo $student['duration']; ?></div>
            </div>
            <div class="row  mb-2">
                <div class="col-md-6"><strong>Course Start:</strong> <?php echo $student['course_start']; ?></div>
                <div class="col-md-6"><strong>Course End:</strong> <?php echo $student['course_end']; ?></div>
            </div>


            <div class="row  mb-2">
                <div class="col-md-6 mt-5">
                    <div class=" ">
                        <strong class="">Student Photo</strong><br><br>
                        <img src="<?php echo $student['userImgPath']; ?>" class="rounded float-start" alt="Student Photo" width="200px">
                    </div>
                </div>
                <div class="col-md-6 mt-5 justify-content-end">
                    <div class="">
                        <strong>Basic Educational Certificate</strong><br><br>
                        <img src="<?php echo $student['basic_edu_certPath']; ?>" class="rounded float-start" alt="Basic Educational Certificate" width="200px">
                    </div>
                </div>
                <div class="col-md-6 mt-5 ">
                    <div class="">
                        <strong>Identity Document</strong><br><br>
                        <img src="<?php echo $student['identity_docPath']; ?>" class="rounded float-start" alt="Identity Document" width="200px">
                    </div>
                </div>
                <div class="col-md-6 mt-5 justify-content-end">
                    <div class="">
                        <strong>Status</strong><br><br>
                        <p> <span class="badge badge-success"><?php echo $student['status']; ?></span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">Issued on <?php echo date('F j, Y'); ?></div>
    </div>
    <div class="text-center  mt-5">
        <button class="btn btn-primary mb-5">Download</button>
    </div>

</section>
<style>
    .col-md-6 {
        display: flex;
        /* align-items: center; */
        justify-content: space-between;
    }
    .badge {
        display: inline-block;
        padding: 0.55em 1.65em;
        font-size: 1em;
        font-weight: 700;
        line-height: 1;
        color: #ffffff;
        background: green;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
    }

    .certificate {
        width: 800px;
        background-color: #fff;
        margin: auto;
        padding: 50px;
        position: relative;
        position: relative;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .main-container {

        /* background-image: url(assets/img/main/certificate-bg.png);
        background-size: cover;
        background-repeat: no-repeat; */
    }

    .certificate::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .content {
        margin-bottom: 20px;
    }

    .signature {
        float: right;
        margin-top: 50px;
    }

    .signature img {
        width: 150px;
    }

    .footer {
        text-align: center;
        margin-top: 20px;
    }
</style>