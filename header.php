<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GTOC India</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Discovering the Potential of conversational AI In the Indian Market. GTOC India is the first-ever two days virtual conference and exhibition designed to host 3000+ industry executives, developers, engineers and adopters of speech or voice technology" name="title">
    

    <!-- OG Graph code start here -->
    <meta property="og:title" content="GTOC India - Novotel Hyderabad Convention Centre" />
    <meta property="og:site_name" content="GTOC India - Novotel Hyderabad Convention Centre">
    
    <!-- Favicons -->
    <link href="https://gtco-cerification.gtcco.org/assets/img/banner/logo.png" rel="icon">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Template Main CSS File -->
    <?php include('assets/css/stylesheet.php'); ?>
    <style>
        <?php

        ?>.nofitication-event-end {
            position: relative;
            top: 0;
            background: #fff;
            color: #000;
            text-align: center;
            z-index: 999;
            padding: 10px 0;
        }

        .nofitication-event-end h4 {
            margin: 0;
            font-size: 20px;
        }

        .nofitication-event-end p {
            margin: 0;
        }

        .nofitication-event-end a {
            color: blue;
        }

        #dismis {
            position: absolute;
            top: 14px;
            right: 30px;
            font-size: 20px;
        }

        .top-bar.pt-2.pb-2.border-bottom {
            width: 100%;
        }

        #searchForm {
            position: relative;
        }

        #searchInput {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 5px;
            outline: none;
            transition: width 0.4s ease;
            width: 0;
            overflow: hidden;
            visibility: hidden;
        }

        #searchInput.visible-input {
            width: 150px;
            /* Adjust width as needed */
            visibility: visible;
        }

        .btn .btn-outline-primary {
            border-radius: 0;
        }
        .modal-header{
            border-bottom: none;
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column align-items-center">
        <!-- Top Bar -->
        <div class="top-bar pt-2 pb-2 border-bottom">
            <div class="container-fluid">
                <div id="navbar" class="navbar order-last order-lg-0 row">
                    <div class="col-md-8">
                        <ul class="d-fex gap-4">
                            <li><i>Have any question?</i></li>
                            <li><i> <i class="bi bi-telephone-fill"></i> 91-80562 30014 </i></li>
                            <li><i><i class="bi bi-envelope-fill"></i> info@gtcco.org</i></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <form id="searchForm" class="d-flex justify-content-end">
                            <input id="searchInput" class="hidden-input" type="search" placeholder="Search" aria-label="Search">
                            <button id="searchButton" class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Content -->
        <div class="container-fluid container-xxl d-flex align-items-center mt-2">
            <div id="logo" class="me-auto">
                <!-- <a href="<?php echo $Company_Web_Url; ?>" class="logo mr-auto"><img src="assets/img/banner/tfs_white_logo_1.png" alt="" class="img-fluid"></a> -->
                <img src="https://gtco-cerification.gtcco.org/assets/img/banner/logo.png" alt="">
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="service.php">Services</a></li>
                    <li><a class="nav-link scrollto" href="about_page.php">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Assignment
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $Web_Url; ?>online assignment system">Online Assignment System</a></li>
                            <!-- Add more dropdown items as needed -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Partners
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">Partner Login</a></li>
                            <li><a class="dropdown-item" href="get_accredited.php">Get Accredited</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Verification
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="certificate_verification.php">Certificate Verification</a></li>
                            <li><a class="dropdown-item" href="certificate_verification.php">Learning Partner Verification</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">contact us</a></li>

                </ul>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav>
        </div>
    </header>



    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 pb-5">
                    <!-- Your HTML content goes here -->
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12">
                                <form action="login.php" method="post">
                                    <div class="form-group mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <button type="submit" class="aboutus-btn" style="width: 100%;">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        document.getElementById('searchButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission
            var input = document.getElementById('searchInput');
            input.classList.toggle('visible-input');
            if (input.classList.contains('visible-input')) {
                input.focus(); // Focus on input field when it becomes visible
            }
        });
    </script>