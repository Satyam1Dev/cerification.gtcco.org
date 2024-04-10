<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,600;1,800;1,900&display=swap');
@font-face {
	font-family: Sen-Bold;
	src: url(../vendor/font/Sen-Bold.ttf);
}
@font-face {
	font-family: Sen-ExtraBold;
	src: url(../vendor/font/Sen-ExtraBold.ttf);
}
@font-face {
	font-family: Sen-Regular;
	src: url(../vendor/font/Sen-Regular.ttf);
}
@font-face {
	font-family: Sofia Pro Bold;
	src: url(../vendor/font/Sofia Pro Bold.ttf);
}
@font-face {
	font-family: sofiapro-light;
	src: url(../vendor/font/sofiapro-light.Otf);
}
:root {  
	--main: #9119f5;
	--hover: #758ba7;
	--mainbg: #204b9b;
	--hoverbg: #92b9e8;
	--button-color: #fff;
}
/*--------------------------------------------------------------
	# General
--------------------------------------------------------------*/
body {
	background: #fff;
	color: #000;
	font-family: 'Sen-Regular', sans-serif;
	z-index: 99;
}

a {
	color: #e8be69;
	text-decoration: none;
	transition: 0.5s;
}

a:hover,
a:active,
a:focus {
	color: #f8234a;
	outline: none;
	text-decoration: none;
}

p {
	padding: 0;
	margin: 0 0 30px 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-weight: 400;
	margin: 0 0 20px 0;
	padding: 0;
	
}
.displaynone.d-none {display:none}
.main-page {
	margin-top: 70px;
}
.available {color:green;}
#pd_per_text_v,#in_pd_per_text_v,#vi_pd_per_text_v{color:green;}
.not-available {color:red;}
/* Prelaoder */
#preloader {
	position: fixed;
	left: 0;
	top: 0;
	z-index: 999;
	width: 100%;
	height: 100%;
	overflow: visible;
	background: #fff url("../assets/img/preloader.svg") no-repeat center center;
}

/*--------------------------------------------------------------
	# Back to top button
--------------------------------------------------------------*/
.back-to-top {
	position: fixed;
	visibility: hidden;
	opacity: 0;
	right: 15px;
	bottom: 15px;
	z-index: 996;
	background: #F47D21;
	width: 40px;
	height: 40px;
	border-radius: 50px;
	transition: all 0.4s;
}
.back-to-top i {
	font-size: 28px;
	color: #fff;
	line-height: 0;
}
.back-to-top:hover {
	background: #F47D21;
	color: #F47D21;
}
.back-to-top.active {
	visibility: visible;
	opacity: 1;
}

/* Sections Header
--------------------------------*/
.section-header {
	margin-bottom: 20px;
	position: relative;
	padding-bottom: 20px;
}
.section-header::before {
	content: "";
	position: absolute;
	display: block;
	width: 60px;
	height: 5px;
	background:  #F47D21;
	bottom: 0;
	left: calc(50% - 25px);
}
.section-header h2 {
	font-size: 36px;
	text-transform: uppercase;
	text-align: center;
	font-weight: 700;
	margin-bottom: 10px;
	color:  #F47D21;
}
.section-header p {
	text-align: center;
	padding: 0;
	margin: 0;
	font-size: 18px;
	font-weight: 500;
	color: #9195a2;
}

.section-with-bg {
  background: linear-gradient( 90deg, rgb(6 14 42) 0%, rgb(10 44 88) 47%, rgb(17 33 66) 100% );
}

/*--------------------------------------------------------------
	# Header
--------------------------------------------------------------*/
#header {
	height: 100px;
	position: absolute;
	left: 0;
	top: 0;
	right: 0;
	transition: all 0.5s;
	z-index: 999;
	background: linear-gradient(to right, #0a094100, #0000);
}
#header .container-fluid{
	width: 96%;
}

#header #logo {
	color:#ffff
}
#header #logo img {
	padding: 0;
	margin: 0;
	max-height: 40px;
	max-width: 80%;
}

@media (max-width: 992px) {
	#header #logo img {
		max-height: 30px;
	}
}


/*--------------------------------------------------------------
	# Navigation Menu
--------------------------------------------------------------*/
/**
	* Desktop Navigation 
*/
.navbar {
	padding: 0;
}
.navbar ul {
	color: #fff;
	margin: 0;
	padding: 0;
	display: flex;
	list-style: none;
	align-items: center;
}
.navbar li {
	position: relative;
}
.navbar > ul > li {
	white-space: nowrap;
	padding: 3px 0 5px 20px;
}
.navbar a,
.navbar a:focus {
	display: flex;
	align-items: center;
	justify-content: space-between;
	color: #fff;
	font-weight: 600;
	font-size: 16px;
	white-space: nowrap;
	transition: 0.3s;
	position: relative;
	padding: 4px 4px;
	text-transform: capitalize;
}
.navbar a i,
.navbar a:focus i {
	font-size: 12px;
	line-height: 0;
	margin-left: 5px;
}

.navbar a:hover:before,
.navbar li:hover > a:before,
.navbar .active:before {
	visibility: visible;
	width: 100%;
}
.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover > a {
	color: #F47D21;
}
.navbar .dropdown ul {
	display: block;
	position: absolute;
	left: 12px;
	top: calc(100% + 30px);
	margin: 0;
	padding: 10px 0;
	z-index: 99;
	opacity: 0;
	visibility: hidden;
	background: #fff;
	box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
	transition: 0.3s;
}
.navbar .dropdown ul li {
	min-width: 200px;
}
.navbar .dropdown ul a {
	padding: 10px 20px;
	font-size: 14px;
	text-transform: none;
	color: #060c22;
}
.navbar .dropdown ul a i {
	font-size: 12px;
}
.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover > a {
	color: #e8be69;
}
.navbar .dropdown:hover > ul {
	opacity: 1;
	top: 100%;
	visibility: visible;
}
.navbar .dropdown .dropdown ul {
	top: 0;
	left: calc(100% - 30px);
	visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
	opacity: 1;
	top: 0;
	left: 100%;
	visibility: visible;
}
@media (max-width: 1366px) {
	.navbar .dropdown .dropdown ul {
		left: -90%;
	}
	.navbar .dropdown .dropdown:hover > ul {
		left: -100%;
	}
}

/**
	* Mobile Navigation 
*/
.mobile-nav-toggle {
	color: #fff;
	font-size: 28px;
	cursor: pointer;
	display: none;
	line-height: 0;
	transition: 0.5s;
}

@media (max-width: 991px) {
	.mobile-nav-toggle {
		display: block;
	}
	
	.navbar ul {
		display: none;
	}
}
.navbar-mobile {
	position: fixed;
	overflow: hidden;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.9);
	transition: 0.3s;
	z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
	position: absolute;
	top: 15px;
	right: 15px;
}
.navbar-mobile ul {
	display: block;
	position: absolute;
	top: 55px;
	right: 15px;
	bottom: 15px;
	left: 15px;
	padding: 10px 0;
	background-color: #fff;
	overflow-y: auto;
	transition: 0.3s;
}
.navbar-mobile > ul > li {
	padding: 0;
}
.navbar-mobile a:hover:before,
.navbar-mobile li:hover > a:before,
.navbar-mobile .active:before {
	visibility: hidden;
}
.navbar-mobile a,
.navbar-mobile a:focus {
	padding: 10px 20px;
	font-size: 15px;
	color: #060c22;
}
.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover > a {
	color: #e8be69;
}
.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
	margin: 15px;
}
.navbar-mobile .dropdown ul {
	position: static;
	display: none;
	margin: 10px 20px;
	padding: 10px 0;
	z-index: 99;
	opacity: 1;
	visibility: visible;
	background: #fff;
	box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
	min-width: 200px;
}
.navbar-mobile .dropdown ul a {
	padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
	font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover > a {
	color: #e8be69;
}
.navbar-mobile .dropdown > .dropdown-active {
	display: block;
}
/*--------------------------------------------------------------
	# Buy Tickets Button
--------------------------------------------------------------*/
.buy-tickets {
	color: #F47D21;
	background: #fff;
	padding: 7px 22px;
	margin: 0 0 0 15px;
	border-radius: 50px;
	transition: all ease-in-out 0.3s;
	font-weight: 800;
	line-height: 1;
	font-size: 16px;
	line-height: 22px;
	white-space: nowrap;
	text-transform: uppercase;
	border: none;
}
.buy-tickets:hover,
.buy-tickets:focus {
	color: #fff;
	background-color: #942581;
}
#header .buy-tickets {
	position: absolute;
    right: 15px;
    top: 60px;
}
@media (max-width: 992px) {
	.buy-tickets {
		margin: 0 15px 0 0;
	}
	#header .buy-tickets {
		position: absolute;
		right: 35px;
		top: 26px;
	}
}
.vip-submit-btn {
	color: #F47D21;
	background: #fff;
	padding: 7px 22px;
	margin: 0 0 0 15px;
	border-radius: 50px;
	transition: all ease-in-out 0.3s;
	font-weight: 800;
	line-height: 1;
	font-size: 16px;
	line-height: 22px;
	white-space: nowrap;
	text-transform: uppercase;
	border: none;
	border:1px solid #F47D21;
}
.vip-submit-btn:hover,
.vip-submit-btn:focus {
	color: #fff;
	border:none;
	background-color: #942581;
}

@media (max-width: 992px) {
	.vip-submit-btn {
		margin: 0 15px 0 0;
	}
}


.model-close-button {
	color: #F47D21;
	background: #fff;
	padding: 7px 22px;
	margin: 0 0 0 15px;
	border-radius: 50px;
	transition: all ease-in-out 0.3s;
	font-weight: 800;
	line-height: 1;
	font-size: 16px;
	line-height: 22px;
	white-space: nowrap;
	text-transform: uppercase;
	border: none;
	border: 1px solid #F47D21;
}
.model-close-button:hover,
.model-close-button:focus {
	color: #fff;
	background-color: #942581;
	border: 1px solid #942581;
}

/* .modal-dialog {
	max-width: 700px;
	margin: 1.75rem auto;
} */
/*--------------------------------------------------------------
	# Home Section
--------------------------------------------------------------*/
#home {
	margin-bottom: 0;
	position: relative;
}

#home .bg-img-sec {
	position: relative;
	right: 0;
	left:0;
	top:0px;
	bottom: 0;
}
#home .home-container::before {
    content: "";
	background: rgba(6, 12, 34, 0.0);
	position: absolute;
	bottom: 0;
	top: 0;
	left: 0;
	right: 0;
}

#home .home-container {
	position: absolute;
	bottom: 0;
	left: 0;
	top: 140px;
	right: 0;
	color:#fff;
	justify-content: center;
	align-items: center;
	-webkit-box-orient: vertical;
	text-align: left;
	padding: 0 15px;
	margin:auto;
}


#home .liveinperson {
	float:left;
}
#home .poweredby {
	position: absolute;
	left: 6%;
	top: 7%;
	width: 15%;
}
.skitpby {
	width:19%;
	margin:auto;
}
.skitpby img {
	width: 90%;
	padding-bottom: 5px;
}
.pby {
	color:#fff;
	font-weight: 500;
	margin:0;
	padding-bottom: 10px;
	font-style: italic;
}
#home .date {
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin-top: 15px;
    margin-bottom: 5px;
    text-align:center;
	color: #fff;
}
#home .tagline {
    color: #fff;
    font-size: 40px;
    font-weight: 900;
    margin-bottom: 0px;
    padding-top: 2%;
	padding-bottom: 2%;
	text-align: center;
	text-transform: capitalize;
}




#home ul li {
	display: inline;
}
#home ul {
	z-index: 1;
	position:relative;
}
#home .about-btn {
	font-weight: 500;
	font-size: 14px;
	letter-spacing: 0px;
	display: inline-block;
	padding: 12px 32px;
	transition: 0.5s;
	line-height: 1;
	margin: -1px;
	color: #fff;
	-webkit-animation-delay: 0.8s;
	animation-delay: 0.8s;
	border: 2px solid #F47D21;
	background: #F47D21;
	text-transform: uppercase;
}
.about-btn {
	font-weight: 500;
	font-size: 14px;
	letter-spacing: 0px;
	display: inline-block;
	padding: 12px 32px;
	transition: 0.5s;
	line-height: 1;
	margin: -1px;
	color: #fff;
	-webkit-animation-delay: 0.8s;
	animation-delay: 0.8s;
	border: 2px solid #F47D21;
	background: #F47D21;
	text-transform: uppercase;
}
#home .btn1 {
	border-radius: 0;
}

#home .btn2 {
	border-radius: 0 50px 50px 0;
}

#home .about-btn:hover {
	background: #e8be6900;
	color: #fff;
}
.about-btn:hover {
	background: #e8be6900;
	color: #fff;
}

@media(min-width:1002px) {
	#home {
		height:114vh;
	}
}
@media(min-width:1100px) {
	#home {
		height:111vh ;
	}
}
@media(min-width:1200px) {
	#home {
		height:102vh;
	}
}
@media(min-width:1300px) {
	#home {
		height:95vh;
	}
}
@media(min-width:1340px) {
	#home {
		height: 100vh;
	}
}
@media(min-width:1400px) {
	#home {
		height: 115vh;
		margin-bottom: 80px;
	}
	
}
@media(max-width:1000px) {
	#home {
		height: 98vh;
	}
	#home .tagline {
		color: #fff;
		font-size: 26px;
	}
	#home .edition {
		top: 10%;
	}
	#home .liveinperson {
		top: 10%;
		right: 14%;
	}
}
@media(max-width:920px) {
	#home {
		height: 103vh;
	}
	#home .tagline {
		color: #fff;
		font-size: 26px;
	}
	#home .edition {
		top: 10%;
	}
	#home .liveinperson {
		top: 10%;
		right: 14%;
	}
}

@media(max-width:768px) {
	#home {
		width: 100%;
		height: 138vh;
		padding-bottom:20px;
	}
	#home .edition {
		position: relative;
		top: 0;
		left: 0;
		width:23%;
		float: none;
	}
	#home .logoimg {width:34%;}
	.skitpby {
		width: 40%;
		margin: auto;
	}
	#home .liveinperson {
		position: relative;
		text-align: left;
		top: 0;
		right: 0;
		width:37%;
		padding-top: 10px;
		float: none;
	}
	#home .date {
	font-size: 20px;    margin-top: 10px; }
	#home .tagline {
		font-size: 20px;
		padding: 7px 40px;
		
	}
	#home .poweredby {
		position: relative;
		right: 0%;
		top: 0px;
		width: 60%;
		left:15%;
		padding-top: 0px;
	}
	#home .poweredby img {
		width: 40%;
	}
	#home .timer-banner div {
		padding: 6px 0px;
	}
	#home .timer-banner #days,#home .timer-banner #hours, #home .timer-banner #minutes, #home .timer-banner #seconds {
	font-size: 30px;}
	#home .timer-banner #seconds {
		font-size: 25px;
	}
	#home .timer-banner span {
		font-size: 16px;
	}
	#home .about-btn {
		padding: 12px 10px;
		font-size: 10px;
	}
}
@media(max-width:750px) {
	#home {
		width: 100%;
		height: 133vh;
		padding-bottom:20px;
	}
	.skitpby {
		width: 34%;
		margin: auto;
	}
}
@media(max-width:700px) {
	#home {
		width: 100%;
		height: 131vh;
		padding-bottom:20px;
	}
	.skitpby {
		width: 38%;
		margin: auto;
	}
}
@media(max-width:650px) {
	#home {
		width: 100%;
		height: 132vh;
		padding-bottom:20px;
	}
	.skitpby {
		width: 48%;
		margin: auto;
	}
}
@media(max-width:600px) {
	#home {
		width: 100%;
		height: 125vh;
		padding-bottom:20px;
	}
}
@media(max-width:500px) {
	#home {
		width: 100%;
		height: 119vh;
		padding-bottom:20px;
	}
}
@media(max-width:400px) {
	#home {
		width: 100%;
		height: 129vh;
		padding-bottom:20px;
	}
	#home .edition {
		position: relative;
		top: 0;
		left: 0;
		width:50%;
	}
	#home .logoimg {width:60%;}
	#home .liveinperson {
		position: relative;
		text-align: left;
		top: 0;
		right: 0;
		width: 70%;
		padding-top: 10px;
	}
	#home .date {
	font-size: 16px; }
	#home .tagline {
		font-size: 20px;
		padding: 7px 0px;
	}
	#home .poweredby {
		position: relative;
		right: 0%;
		top: 0px;
		width: 60%;
		left:15%;
		padding-top: 0px;
	}
	#home .poweredby img {
		width: 50%;
	}
	#home .timer-banner div {
		padding: 6px 0px;
	}
	#home .timer-banner #days,#home .timer-banner #hours, #home .timer-banner #minutes, #home .timer-banner #seconds {
	font-size: 30px;}
	#home .timer-banner #seconds {
		font-size: 25px;
	}
	#home .timer-banner span {
		font-size: 16px;
	}
	#home .about-btn {
		padding: 12px 10px;
		font-size: 10px;
	}
}

/*-------------------------------------------------------------
	# Summit Objective Section 
--------------------------------------------------------------*/
.summit_objective {
	background: lightblue url("assets/img/main/summit_bg.jpg") no-repeat;
	display: flex;
	-webkit-box-pack: center;
	background-size: cover;
	background-position: center;
	padding:90px 20px 40px 20px;
	color: #fff;
	margin-top: -10px;
	
}
.heading{
	font-size:36px;
	font-weight:800;
	line-height:1.4;
	text-align: start;
	color: #000;
}
.text{
	font-size:18px;
	font-weight:400;
	line-height:1.4;
	text-align: start;
	color: #000;
}
.summit_objective .text {
	font-size:19px;
	line-height:1.6;
	padding: 1rem;
	text-align: justify;
	background-color: #f5821fab;
}
/*--------------------------------------------------------------
	# counter
--------------------------------------------------------------*/
#counter {	
	padding: 0;
    z-index: 99;
    background: transparent;
    background-size: cover;
    position: relative;
    color: #fff;
}
#counter .heading{ 	
	font-family:Sen-Bold;	
	background: url(../assets/img/bg/event-solution.png) center center no-repeat;
    background-size: 50%;
	padding:50px 0 30px 0;
	font-size:24px;
	color:#000;
	margin-bottom:20px;
	text-align:center;
}
#counter .row-flex {
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
#counter [class*="col-"] {
  margin-bottom: 30px;
}
#counter .overviews{
	position: relative;
	height: 100%;
  padding: 20px 20px 10px;
  color: #fff;
padding: 40px 20px;
background: rgba(10, 9, 65, 1);
 transition-duration: 3s;
}
#counter .overviews:hover{
background: rgb(0 0 255);

 transition-duration: 3s;
}
#counter .small-icon {
	width: 40%;
}
#counter .count-num {

	text-align: center;
	font-weight: 400;
	font-size: 14px;
	color:#fff;
	text-transform: capitalize;
	padding:30px 0;
}
#counter .smalltext {
}
/*-------------------------------------------------------------
	# attend Section 
--------------------------------------------------------------*/
#attend {
	/* background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	); */
	background-image: url(assets/img/banner/attend.png);
	background-size: cover;
	overflow: hidden;
	position: relative;
	color: #fff;
	padding: 60px 0 40px 0;
}
#attend h1 {
	color: #F47D21;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 36px;
}

/* #attend ul li {
	line-height: 25px;
	padding-bottom: 10px;
	font-size: 18px;
	text-align: left;
} */
#attend ul {
    list-style-type: none;
    padding: 0;
}

#attend ul li {
    position: relative;
    padding-bottom: 10px;
    padding-left: 30px; /* Increased padding to accommodate the image */
    line-height: 25px;
    font-size: 18px;
    text-align: left;
}

#attend ul li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 25px; /* Adjust the width of the background image container */
    height: 20px; /* Adjust the height of the background image container */
    background-image: url(assets/img/banner/attend_icon.png); /* Specify the URL of your background image */
    background-size: cover; /* Ensure the background image fills the container */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
}

/*-------------------------------------------------------------
	#Speaker Section
--------------------------------------------------------------*/
#speakers {
	background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	);
	padding: 60px 0 30px 0;
	position: relative;
}
#speakers .testimonial-item {
	padding:0 10px
}
#speakers .owl-nav {
    margin-top: 5px;
    text-align: center;
    display: block; 
    font-size: 90px;
	font-weight: 200;
}
#speakers .owl-prev {
    position: absolute;
	top: 37%;
	left: -30px;
	
}
#speakers .owl-next {
    position: absolute;
	top: 37%;
	right: -30px;
}
#speakers .owl-dots {
	margin-top: 5px;
	text-align: center;
}
#speakers .owl-dot {
	display: inline-block;
	margin: 0 5px;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background-color: #ddd !important;	
}
#speakers .owl-dot.active {
	background-color: #43d7dd  !important;
}
#speakers .speaker {
	position: relative;
	margin-bottom: 40px;
	padding:5px 5px 70px 5px !important;
	height:85%;
	background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	);	border-radius: 0.6rem;
}
#speakers .company-logo {min-height: 65px !important;}
#speakers .speaker .speaker-img {
	border-radius: 10px;
	box-shadow: 0 45px 65px rgba(0,0,0,0.50), 0 35px 22px rgba(0,0,0,0.16);
	

}
.spk-img {
    padding: 10px;
    background-size: cover;
    background-image: url(assets/img/banner/spk-img-bg.png);
    background-repeat: no-repeat;
    margin: 20px;
}

#speakers .speaker .details {
	background-color: #ffffff;
	padding-bottom: 10px;
	/* margin-top: -11px; */
	min-height: 140px;
}
#speakers .speaker .details h3 {
	padding:10px 20px 0;
	color: #1b2a51;
	font-size: 25px;
	font-weight: 900;
	line-height: 32px;
	margin: 10px 0;
	text-transform: uppercase;
	
}
#speakers .speaker .details p {
	padding: 0 20px;
	color: #1a2950;
	font-size: 16px;
	font-style: italic;
	font-weight: 400;
	line-height: 20px;
}
#speakers .company-logo img{
	width:40%;
}
#speakers .spk-biotext {
	color: #fff;
	padding-top:9px;
	font-size: 13px;
	font-style: italic;
	text-align:center;
}
#speakers .spk-biotext .spkprofile {
	cursor: pointer;
	
    left: 0;
    right: 0;
    bottom:5px;
}

#speakers .spk-biotext .likedinpfrofile {
	float: right;
}

#speakers .spk-biotext .likedinpfrofile .bi {
	font-size: 20px;
}
#speakers .spk-biotext .likedinpfrofile a {
	color: #fff;
	margin-right: 3px;
}

#speakers .spk-biotext.likedinpfrofile a:hover {
	color: #fff;
}
#speakers .company-logo {
    background-color: #fff;
    margin: 0px 0 0 0;
}
#speakers .company-logo .logo {
	width:40%;
	padding-bottom:10px;
	
}
/* .speaker-bio .modal-dialog {
    max-width: 750px;
} */
.speaker-bio .bioimg {
	padding-left: 15px;
	padding-bottom: 15px;
	float: right;
}
/* .speaker-bio .modal-title {
	color: #000;
} */
.speaker-bio p {
	color: #000;
}

@media(min-width: 996px) and (max-width: 1200px) { 
	#speakers .speaker .details {
		width: 100.7%;
	}	
	#speakers .owl-dot {
		display: none;
		
	}
	#speakers .speaker {
    height: auto;
	}
}
@media(max-width: 767px) { 
	#speakers .speaker .details {
		width: 100%;
	}
	.speaker-profile {
		width: 98.2%;
	}
	#speakers .owl-prev {

    left: -10px;
}
	#speakers .owl-dot {
		display: none;
		
	}
	#speakers .owl-next {
    right: -10px;
}
	#speakers .speaker {
    height: auto;
	}
	
}
/*-------------------------------------------------------------
	#olf_Speaker Section
--------------------------------------------------------------*/
#old_speakers {
	background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	);
	padding: 60px 0 30px 0;
	position: relative;
}
#old_speakers .speaker .speaker-details h3 {
	padding:10px 20px 0;
	color: #fff;
	font-size: 24px;
	font-weight: 900;
	line-height: 32px;
	text-transform: uppercase;
}
#old_speakers .speaker .speaker-details h6 {
	padding:0 20px;
	color: #F47D21;
	font-size: 16px;
	font-style: italic;
	font-weight: 400;
	line-height: 20px;
	margin: 0;
}
/*-------------------------------------------------------------
	# voicetechin Section 
--------------------------------------------------------------*/
.voicetechin {
	background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	);
	padding: 50px 0;
}
.voicetechin img {
	width: 100%;
	margin: 30px 0;
	z-index: 99 !important;
}
.voicetechin .innerbox {
	position: relative;
	transition: all 0.75s ease-in-out 0s;
	padding: 1px 0;
}
.voicetechin .innerbox:hover {
	border: 0px solid rgba(0, 160, 80, 0);
}
.voicetechin .details {
	position: absolute;
	bottom: 0px;
	right: 0;
	left: 0;
	top: 20px;
	color: #fff;
}
.voicetechin .details .icon {
	width: 20%;
}
.voicetechin h6 {
	font-size: 18px;
	font-weight: 400;
	padding-left: 27px;
	text-transform: uppercase;
	color: #fff;
	margin-bottom: 0;
}
.voicetechin h4 {
	padding: 0px 40px;
	font-size: 24px;
	font-weight: 800;
	text-align: center;
	color: #fff;
	margin-bottom: 0;
}
.voicetechin h5 {
	text-align: center;
	font-size: 20px;
	font-weight: 400;
	color: #fff;
}
.voicetechin h5:hover {
	cursor: pointer;
}
.voicetechin-popup .text {
	color: #000;
}
#clients {
	padding: 60px 0;
	background-color:#fff;
}
#clients .our_client_logo {
	max-width: 80%;
    opacity: 0.9;
    transition: 0.3s;
    padding: 15px 4px;
    width: 80%;
	margin-left:10%;
}
/* init section */

#init {
	background: url("../assets/img/main/bgfull.png");
	background-size: contain;
	background-repeat: repeat;
	overflow: hidden;
	position: relative;
	color: #fff;
	background-color: #fff;
	padding: 30px 0 0px 0;
}

.selectors-coverd {
	color: #000;
}

#init .sec2 h1 {
	color: #000;
	text-transform: uppercase;
	font-weight: 800;
	font-size: 32px;
}

#init .sec2 h4 {
	color: #fff;
	font-size: 18px;
}

#init .sec2 h4 span {
	font-weight: 600;
}

#init .sec2 p {
	line-height: 25px;
	padding-bottom: 1px;
	font-size: 14px;
	color: #000;
	margin: auto;
}

.initsec {
	background-color: #ffffffa6;
	padding: 0px 0px 40px 0px;
}

#init .quote {
	background-color: #56309b;
	padding: 15px 15px;
	color: #aca8ff;
	line-height: 2;
	font-style: italic;
	font-size: 20px;
}

#init .quote p {
	color: #fff;
	font-size: 22px;
}

#init .fa-quote-left {
	font-size: 60px;
}

#init .box {
	margin-top: 30px;
	padding: 6px;
	min-height: 390px;
}

#init .box2 {
	background-color: #e8be69;
}

#init .box1 {
	background-color: #56309b;
}

#init .box h1 {
	padding-top: 15px;
	padding-left: 10px;
	font-size: 24px;
	font-weight: 500;
	COLOR: #fff;
	margin:0;
}

#init .box p {
	padding: 0px 20px 20px 10px;
	COLOR: #fff;
	margin:0;
}

#init .box:hover img {
	/*-webkit-transform: scale(1.1);	transform: scale(1.1);*/
}

#init .box1:hover {
	background-color: #56309bd9;
}

#init .box2:hover {
	background-color: #e8be69db;
}

#init .box:hover h1 {
	color: #fff;
}

#init .box:hover p {
	color: #fff;
}

#init .sec2 {
	padding-top: 30px
}

#init .about-btn {
	margin-top: 30px;
	margin-bottom: 0px;
	font-weight: 700;
	font-size: 26px;
	letter-spacing: 1px;
	display: inline-block;
	padding: 25px 150px;
	transition: 0.5s;
	line-height: 1;
	text-transform: uppercase;
	color: #56309b;
	-webkit-animation-delay: 0.8s;
	animation-delay: 0.8s;
	border: 2px solid #fff;
	background: #fff;
	font-style: normal;
}

#init .startup {
	border-radius: 0px;
}

#init .about-btn:hover {
	background: #e8be69;
	color: #fff;
}
/*--------------------------------------------------------------
	# supporters
--------------------------------------------------------------*/
#sponsors {
	background:#fff;
	padding:40px 0;
}
#sponsors .section-header h2 {
    color: #000000;
}
#sponsors .section-header2 h2 {
	text-align:center;
	font-size: 28px;
	background-color: #eee;
	padding: 12px;
	font-weight: 600;
	margin: 30px 30px 30px 0;
	color: #000;
}
/*--------------------------------------------------------------
	# contact-page
--------------------------------------------------------------*/
.contact-page {
	background: linear-gradient(
    90deg,
    rgb(6 14 42) 0%,
    rgb(10 44 88) 47%,
    rgb(17 33 66) 100%
	);
	padding: 100px 0 0 0;
}
.contact-page a,.contact-page a:hover {
	color:#fff;
}
.contact-page h3 {
    color: #F47D21;
    font-weight: 700;
	padding:10px;
}
.contact-page p {
    margin:5px;
}
.contact-page .heading2 {
	font-size:30px;
	font-weight:800;
	color: #fff;
}
.contact-page .address {
	padding:30px 0 10px 0;
	margin:0;
}
.contact-page p {
	padding: 2px 30px 0 0; 
	color: #fff;
}
.contact-page label {
	font-size: 15px;
}
.contact-page span.input-group-text {
	font-size: 12px;
	width: 50%;
}
.contact-page #Speaker-form .row {padding-bottom:20px;}
/*--------------------------------------------------------------
	# Venue Section
--------------------------------------------------------------*/
#venue-page
{
	background: linear-gradient( 
	90deg, rgb(6 14 42) 0%, rgb(10 44 88) 47%, rgb(17 33 66) 100% );
}
#venue-page #home {
    background: url(../assets/img/main/hotel/img1.png) top center;
	width: 100%;
    height: 103vh;
    background-size: cover;
    overflow: hidden;
    top: -16px;
    position: static;
    margin-bottom: 0px
}
#venue-page .second-img { padding:15px 0 0 10px }
#venue-page .description {font-size:18px;
	line-height:1.5;
	font-weight:600;
	padding-top:15px;
}
#venue-page .description2 {font-size:16px;
	line-height:1.5;
	font-weight:600;
	margin-bottom:10px;
}

#gallery {
	padding: 60px;
	overflow: hidden;
}
#gallery .swiper-pagination {
	margin-top: 20px;
	position: relative;
}
#gallery .swiper-pagination .swiper-pagination-bullet {
	width: 12px;
	height: 12px;
	background-color: #fff;
	opacity: 1;
	border: 1px solid #F47D21;
}
#gallery .swiper-pagination .swiper-pagination-bullet-active {
	background-color: #F47D21;
}
#gallery .swiper-slide-active {
	text-align: center;
}
@media (max-width: 992px) {
	#venue-page #home {
		height: 33vh;
	} 
}
@media (min-width: 992px) {
	
	#gallery .swiper-wrapper {
		padding: 40px 0;
	}
	#gallery .swiper-slide-active {
		border: 5px solid #F47D21;
		padding: 4px;
		background: #fff;
		z-index: 1;
		transform: scale(1.15);
		margin-top: 6px;
	}
}
/*--------------------------------------------------------------
	# Footer
--------------------------------------------------------------*/
#footer {
	background: #0d00ff;
	padding: 0 0 0 0;
	color: #eee;
	font-size: 14px;
}
#footer .footer-top {
	background: #0d00ff;
	padding: 60px 0 30px 0;
}
#footer .footer-top .footer-info {
	margin-bottom: 30px;
}
#footer .footer-top .footer-info h3 {
	font-size: 26px;
	margin: 0 0 20px 0;
	padding: 2px 0 2px 0;
	line-height: 1;
	font-weight: 700;
	color: #fff;
}
#footer .footer-top .ucon-logo {
	width: 40%;
	margin-bottom: 10px;
}
#footer .footer-top .khadamati {
	width: 53%;
	margin-left: 10px;
}
#footer .footer-top .footer-info p {
	font-size: 14px;
	line-height: 24px;
	margin-bottom: 0;
	color: #fff;
	
}
#footer .footer-top .social-links a {
	display: inline-block;
	background: #942581;
	color: #eee;
	line-height: 1;
	margin-right: 4px;
	border-radius: 50%;
	width: 36px;
	height: 36px;
	transition: 0.3s;
	display: inline-flex;
	align-items: center;
	justify-content: center;
}
#footer .footer-top .social-links a i {
	line-height: 0;
	font-size: 16px;
}
#footer .footer-top .social-links a:hover {
	background: #F47D21;
	color: #fff;
}
#footer .footer-top h4 {
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	text-transform: uppercase;
	position: relative;
	padding-bottom: 12px;
	border-bottom: 2px solid #F47D21;
	text-align: left;
}
#footer .footer-top .footer-links {
	margin-bottom: 30px;
	text-align: left;
}
#footer .footer-top .footer-links ul {
	list-style: none;
	padding: 0;
	margin: 0;
}
#footer .footer-top .footer-links p {
	line-height: 26px;
	color: #fff;
}
#footer .footer-top .footer-links ul i {
	padding-right: 5px;
	color: #F47D21;
	font-size: 18px;
}
#footer .footer-top .footer-links ul li {
	border-bottom: 1px solid #F47D21;
	padding: 10px 0;
}
#footer .footer-top .footer-links ul li:first-child {
	padding-top: 0;
}
#footer .footer-top .footer-links ul a {
	color: #eee;
}
#footer .footer-top .footer-links ul a:hover {
	color: #F47D21;
}

#footer .footer-top .footer-contact {
	margin-bottom: 30px;
}
#footer .footer-top .footer-contact p {
	line-height: 26px;
	color: #fff;
	text-align: left;
}
#footer .footer-top .footer-contact a{
	color:#fff;
}
#footer .footer-top .footer-newsletter {
	margin-bottom: 30px;
}
#footer .footer-top .footer-newsletter input[type="email"] {
	border: 0;
	padding: 6px 8px;
	width: 65%;
}
#footer .footer-top .footer-newsletter input[type="submit"] {
	background: #e8be69;
	border: 0;
	width: 35%;
	padding: 6px 0;
	text-align: center;
	color: #fff;
	transition: 0.3s;
	cursor: pointer;
}
#footer .footer-top .footer-newsletter input[type="submit"]:hover {
	background: #e0072f;
}
#footer .cr {
	text-align: center;
}
#footer .copyright {
	
	text-align: center;
	padding: 10px 0;
}
#footer .credits {
	text-align: center;
	font-size: 13px;
	color: #ddd;
}
#footer .footerTicket_text {
	color: #fff;
}
#footer .copyright p {
	display: inline;
	font-size: 17px;
	margin: 0 auto;
}
.footerTicket_price {
	font-style: normal;
	font-weight: bold;
	font-size: 3.2rem;
	line-height: 2rem;
	text-align: center;
	color: rgb(255, 255, 255);
	margin: 0px 2rem;
}
.footerTicket_offer {
	font-size: 16px;
	line-height: 22px;
	color: rgb(255, 255, 255);
	font-weight:500;
	margin: 0 auto;
	padding-bottom: 20px;
	text-align: center;
	align-items: center;
	
}

@media(max-width:798px) { 
	.summit_objective {
		padding: 50px 20px;
	}
	.summit_objective .heading {
		font-size: 28px;
	}
	.summit_objective .text {
		font-size: 18px;
		padding-right: 0;
	}
	#attend h1 {
		font-size: 30px;
	}
	.section-header h2 {
		font-size: 30px;
	}
	#clients .row{
		padding: 50px 10px;
	}
	#clients .our_client_logo {
		width:80%;
	}
	#speakers .col-lg-4.col-md-6 {
		margin: 0 0 20px;
	}
	#init .box {
		height: auto;
	}
	#init .about-btn {
	padding: 25px 14px;}
	.voicetechin h6 {
		
		font-size: 20px; 
	margin:0;}
	.voicetechin h4 {
		font-size: 24px;
		margin: 0;
	}
	.voicetechin h5 {
		font-size: 26px;
	}
	#sponsors .section-header2 h2 {
		margin:0 0px;
	}
	.footerTicket_offer {
		padding-top: 10px;
	font-size: 10px;}
}
/*Exta pages # Startup Section */
#startup {
	/*background: url("../assets/img/bg4.png");*/
	background-color: #fff;
	background-size: cover;
	overflow: hidden;
	position: relative;
	color: #000;
	padding: 60px 0 40px 0;
}

#startup .img-sec {
	position: absolute;
	right: 0;
	bottom: 0;
	width: 49%;
}

#startup .text-sec {
	position: relative;
}

#startup:before {
	content: "";
	background: rgba(13, 20, 41, 0);
	position: absolute;
	bottom: 0;
	top: 0;
	left: 0;
	right: 0;
}

#startup h2 {
	font-size: 36px;
	font-weight: bold;
	margin-bottom: 10px;
}

#startup h3 {
	font-size: 18px;
	font-weight: bold;
	text-transform: uppercase;
	margin-bottom: 10px;
}

#startup p {
	font-size: 18px;
	margin-bottom: 20px;
	line-height: 1.5;
}

#startup p span {}

#startup2 {
	background: linear-gradient(90deg, rgb(177, 51, 187) 0%, rgb(126, 76, 205) 47%, rgb(69, 105, 225) 100%);
	padding: 3% 4%;
}

/* #startup2 {
	color: #fff;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
} */

/* #startup2 .smalltext {
	font-size: 40px;
	font-weight: 900;
	line-height: 1.2;
	text-align: left;
	letter-spacing: 6px;
} */

/* #startup2 ul li {
	font-size: 20px;
	text-align: left;
}

#startup2 p {
	font-size: 20px;
	text-align: left;
}

#startup2 .about-btn {
	margin-top: 30px;
	font-weight: 500;
	font-size: 14px;
	letter-spacing: 0px;
	display: inline-block;
	padding: 12px 32px;
	transition: 0.5s;
	line-height: 1;
	color: #fff;
	-webkit-animation-delay: 0.8s;
	animation-delay: 0.8s;
	border: 2px solid #e8be69;
	background: #e8be69;
}

#startup2 .startup {
	border-radius: 50px;
}

#startup2 .about-btn:hover {
	background: #e8be6900;
	color: #fff;
} */

#sponsortetch .about-btn {
	margin-top: 30px;
	font-weight: 500;
	font-size: 14px;
	letter-spacing: 0px;
	display: inline-block;
	padding: 12px 32px;
	transition: 0.5s;
	line-height: 1;
	color: #fff;
	-webkit-animation-delay: 0.8s;
	animation-delay: 0.8s;
	border: 2px solid #e8be69;
	background: #e8be69;
}
#home {display: block;	
	background-image: url('https://speechtechsummit.com/assets/img/main/speechtechsummit-fallback-one.jpg') !important;
	background-size: cover;
	background-repeat: no-repeat;}
.slogan{margin: 30px 0 30px 0;}
body, p, h1, h2, h3, h4, h5, h6, b, small {
    font-family: 'Montserrat', sans-serif !important;
  
}

.modcounter {
  padding: 60px 0 40px 0;
  background: url(../assets/img/banner/counter-bg.png) top center no-repeat;
    background-size: auto;
  background-size: cover;
  position: relative;
}
.modcounter .small-icon {width: 40%;}
.modcounter .count-num {
  font-weight: 600;
  font-size: 42px;
  letter-spacing: -1px;
  color: #f7dc47;
  text-align: center;
}
.modcounter .smalltext {
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 400;
  color: #f7dc47;
  text-align: center;
}
#faq {
  padding-top: 130px;
}
#faq .card-body {
  color: #000 !important;
}
#faq #accordion .card {
  margin-bottom: 15px;
  margin-top: 15px !important;
}
#faq #accordion2 .card {
  margin-bottom: 15px;
  margin-top: 15px !important;
}
#faq #accordion4 .card {
  margin-bottom: 15px;
  margin-top: 15px !important;
}
#faq h2 {
  color: #fff;
}
#terms-conditions h2.title {
  color: #fff;
}
.sc-1au8ryl-0.dmopMx {
  display: none;
}

@media(max-width:798px) {
	#startup .img-sec {
		width: 70%;
	}
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
#home .home-container{top: 75px !important;}
#home {height: 76vh;}
#init .about-btn{padding: 25px;}
#mediac .count-num{font-size: 45px;}
#mediac .smalltext{font-size: 20px;}
.summit_objective .text{padding-right: 0;}
#Speaker-form .col {width: 100% !important;flex: content !important;margin-top: 10px;}
.contact-page #Speaker-form .row {padding-bottom: 0px;}
#bu .btn.buy-tickets {margin-top: 10px;width: 100%;}
.input-group.mb-3.splrow {margin-top: 10px;margin-bottom: 0px !important;}
.splrow label {width: 100%;border-radius: 5px !important;margin-bottom: 10px;}
.splrow .form-select {border-radius: 5px !important;}
.summit_objective{padding: 75px 20px 0px 20px !important;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
#home .home-container{top: 75px !important;}
#home {height: 43vh;}
#init .about-btn{padding: 25px;}

.summit_objective .text{padding-right: 0;}
#Speaker-form .col {width: 100% !important;flex: content !important;margin-top: 10px;}
.contact-page #Speaker-form .row {padding-bottom: 0px;}
#bu .btn.buy-tickets {margin-top: 10px;width: 100%;}
.input-group.mb-3.splrow {margin-top: 10px;margin-bottom: 0px !important;}
.splrow label {width: 100%;border-radius: 5px !important;margin-bottom: 10px;}
.splrow .form-select {border-radius: 5px !important;}
.summit_objective{padding: 75px 20px 0px 20px !important;}
}
.bg-img-sec-mob{display:none;}
.exploregallerybut {
  margin-top: 30px;
  margin-bottom: 0px;
  font-weight: 700;
  font-size: 20px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 15px 85px;
  transition: 0.5s;
  line-height: 1;
  text-transform: uppercase;
  color: #56309b;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #fff;
  background: #f26e2b;
  font-style: normal;
  word-break: keep-all !important;
}
.exploregallerybut:hover {
  background: #e8be69;
  color: #fff;
}
@media only screen and (max-width: 600px) {
	.bg-img-sec-mob{display:block;}
	.bg-img-sec{display:none;}
	.mobile-viewerimg {width: 100%;}
	#home{height: 76vh;}
	#home .tagline{padding-left: 12px !important;}
	#Speaker-form .col {width: 100% !important;flex: content !important;margin-top: 10px;}
	.contact-page #Speaker-form .row {padding-bottom: 0px;}
	#bu .btn.buy-tickets {margin-top: 10px;width: 100%;}
	.input-group.mb-3.splrow {margin-top: 10px;margin-bottom: 0px !important;}
	.splrow label {width: 100%;border-radius: 5px !important;margin-bottom: 10px;}
	.splrow .form-select {border-radius: 5px !important;}
	
}
@media only screen and (max-width: 600px) {
.new-col-5 {width: 50% !important;}
.btn.bt-button.book-ticket.scrollto {
  width: 150px;
  text-align: center !important;
  display: block;
  margin-left: 20px;
}
}
@media only screen and (min-width: 601px) and (max-width: 1080px) {
.new-col-5 {width: 30% !important;}
.btn.bt-button.book-ticket.scrollto {
  width: 150px;
  text-align: center !important;
  display: block;
  margin-left: 20px;
}
}
.btn.bt-button.book-ticket.scrollto {
  background-color: #f26e2b;
  padding-left: 8px;
  padding-right: 8px;
  font-size: 15px;
  margin-left: 10px;
}
.btn.bt-button.book-ticket.scrollto:hover {
  color: #fff;
}
.pastorspeakers .testimonial-item {
  width: 100% !important;
}
.pastorspeakers #calamityu .testimonial-item.boxybay .speaker.specialspeaker{margin-bottom: 2px !important;padding: 5px 5px 5px 5px !important;}
#partners .new-col-5 {width: 20%;}

#header.header-scrolled, #header.header-inner{height: 80px;}
.spotlight-group.row .col-md-3.aos-init.aos-animate {overflow: hidden;}
.register-button {
  color: #000;
  background: none;
  border: 1px solid #ccaa39;
  padding: 7px 12px;
  border-radius: 0px;
  transition: all ease-in-out 0.3s;
  font-weight: 600;
  font-size: 10px;
  line-height: 1.3;
  white-space: nowrap;
  text-transform: uppercase;
  display: inline-block;
  position: relative;
  min-width: auto;
  margin: 10px;
}
.silver-sponsor {
  width: 80% !important;
}
/* .modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.2);
  border-radius: .3rem;
  outline: 0;
}
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(.3rem - 1px);
  border-top-right-radius: calc(.3rem - 1px);
}
.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
  color: #000;
}
.modal-body p {
  color: #000;
} */
.text-field.slogan {
  text-align: left;
}
#clients > div:nth-child(1) > div:nth-child(1) > h2:nth-child(1) {
  color: #000;
}


.aboutus-btn {
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 0px;
        display: inline-block;
        padding: 12px 32px;
        transition: 0.5s;
        line-height: 1;
        margin: -1px;
        color: #fff;
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
        border: 2px solid #F47D21;
        background: #F47D21;
        text-transform: uppercase;

    }
    .aboutus-btn>a{
        color: #fff;
    }
    .text-head{
        color: #000;
        /* border-bottom: #F47D21 solid 2px; */
        font-size: 20px;
        font-weight: 700;
      
    }
    .about-heading{
	font-size:36px;
	font-weight:700;
	line-height:1.4;
	text-align: start;
	color: #F47D21;
}
</style>