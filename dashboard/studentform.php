<?php include('sidebar.php');?>
    <section class="home-section " id="">
    <?php include('header.php')?>     
        <div class="container p-5">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-danger">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white">Add Students</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="formsubmit.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <span class="text-danger font-weight-bold" id="error"></span>
                                <span class="text-success font-weight-bold" id="msg"></span>
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" id="name" name="name" class="form-control dis-inp"
                                                placeholder="Enter name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">DOB</label>
                                            <input type="date" id="dob" name="dob" class="form-control dis-inp"
                                                placeholder="Enter name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Father's Name</label>
                                            <input type="text" id="father_name" name="father_name"
                                                class="form-control dis-inp" placeholder="Enter Father's Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mother's Name</label>
                                            <input type="text" id="mother_name" name="mother_name"
                                                class="form-control dis-inp" placeholder="Enter Mother's Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" id="email" name="email" class="form-control dis-inp"
                                                placeholder="Enter Email" required>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Choose your Country:</label>
                                            <select class="form-select" id="countries" name="countries"></select>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone No</label>
                                            <input type="text" id="phone_no" name="phone_no"
                                                class="form-control dis-inp" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea rows="4" type="text" id="address" name="address"
                                        class="form-control dis-inp" placeholder="Enter Address" required></textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label>Course Completed<span class="text-muted"></span></label>
                                    <select class="select2bs4 form-control dis-inp" id="courses" name="courses"
                                        data-placeholder="Select Course" style="width: 100%;" required>
                                        <option value="" selected>Select Course</option>
                                        <option value="72">Certificate In Leadership Trainer</option>
                                        <option value="176">Certificate in Suicide Prevention</option>
                                        <option value="177">Certificate in Mental Health Support</option>
                                        <option value="302">Certificate in Neuro Linguistic Programming Practitioner
                                        </option>
                                        <option value="303">CERTIFICATE IN ADVANCED COUNSELLING TECHNIQUES</option>
                                        <option value="416">CERTIFICATE IN DYNAMIC PRACTICAL COUNSELLING THERAPIST
                                        </option>
                                        <option value="417">CERTIFICATE IN PSYCHOTHERAPY PRACTITIONER</option>
                                        <option value="418">Certificate In Transactional Analysis</option>
                                        <option value="419">CERTIFICATE IN MOTIVATIONAL INTERVIEWING PRACTITIONER
                                        </option>
                                        <option value="420">CERTIFICATE IN COGNITIVE BEHAVIOUR THERAPY PRACTITIONER
                                        </option>
                                        <option value="421">CERTIFICATE IN RATIONAL EMOTIVE BEHAVIOURAL THERAPIST
                                        </option>
                                        <option value="422">CERTIFICATE IN GESTALT THERAPY PRACTITIONER</option>
                                        <option value="423">Certificate In Yoga For Counseling</option>
                                        <option value="424">Certificate In Sujok For Counseling</option>
                                        <option value="425">CERTIFICATE IN ART THERAPY PRACTITIONER</option>
                                        <option value="426">Certificate In Graphology</option>
                                        <option value="427">Certificate In Reiki</option>
                                        <option value="428">Certificate In Pre & Post Marital Counselling</option>
                                        <option value="430">Certificate In Life Coaching</option>
                                        <option value="431">Certificate In Train The Trainer Soft Skills</option>
                                        <option value="489">CERTIFICATE IN NLP COUNSELLING PRACTITIONER</option>
                                        <option value="490">CERTIFICATE IN SOFT SKILLS</option>
                                        <option value="491">CERTIFICATE IN CHILD COUNSELLING</option>
                                        <option value="492">CERTIFICATE IN STUDENT COUNSELLING</option>
                                        <option value="624">Certificate In Hypnotherapy</option>
                                        <option value="660">Certificate in Women counsellor</option>
                                        <option value="661">Certificate in Play therapy</option>
                                        <option value="662">Certificate in Mindfulness Meditation coach</option>
                                        <option value="801">Certificate In Energy Emotional Freedom Technique Trainer
                                        </option>
                                        <option value="818">Certificate In Play Therapy Trainer</option>
                                        <option value="915">Certificate In School Counsellor</option>
                                        <option value="916">Certificate In Emotional Intelligence Trainer</option>
                                    </select>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">Duration (In Hours)</label>
                                    <!-- <input type="text" id="duration" name="duration" class="form-control dis-inp" placeholder="Enter Duration" required> -->
                                    <select class="select2bs4 form-control dis-inp" id="duration" name="duration"
                                        data-placeholder="Select Duration" style="width: 100%;" required>
                                        <option value="" selected>Select Duration</option>
                                        <option value="135 Hours">135 Hours</option>
                                        <option value="270 Hours">270 Hours</option>
                                        <option value="540 Hours">540 Hours</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Course Start</label>
                                            <input type="date" id="course_start" name="course_start"
                                                class="form-control dis-inp" required>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Course End</label>
                                            <input type="date" id="course_end" name="course_end"
                                                class="form-control dis-inp" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Student Photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input dis-inp form-control"
                                                        id="userImg" name="userImg">
                                                    <!-- <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label> -->
                                                </div>
                                                <span class="ml-4">
                                                    <img src="" style="max-height:200px;max-width:300px; display:none;"
                                                        id="userImgPrev">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Basic Educational Certificate</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input dis-inp form-control"
                                                        id="basic_edu_cert" name="basic_edu_cert">
                                                    <!-- <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label> -->
                                                </div>
                                                <span class="ml-4">
                                                    <img src="" style="max-height:200px;max-width:300px; display:none;"
                                                        id="u_img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Identity Document</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input dis-inp form-control"
                                                        id="identity_doc" name="identity_doc">
                                                    <!-- <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label> -->
                                                </div>
                                                <span class="ml-4">
                                                    <img src="" style="max-height:200px;max-width:300px; display:none;"
                                                        id="u_img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img src="" style="max-height:200px; display:none;">
                                </div>
                                <input type="hidden" id="cat_id" value="">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="sub_btn">Submit</button>
                                <span id="spin" style="display: none;">
                                    <img src="https://certification.sdccanada.org/assets/img/ajax-loader.gif">
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
    </section>
    <!-- Scripts -->
    <script src="assets/js/countrylist.js"></script>
</body>

</html>