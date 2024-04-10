<section id="home" class="home">
    <div class="bg-img-sec">
        <div class="owl-carousel owl-theme slider-container">
            <!-- Slider items -->
            <div class="item">
                <img src="assets/img/banner/slider1.jpg" alt="Slider Image 1">
            </div>
            <div class="item">
                <img src="assets/img/banner/slider2.jpg" alt="Slider Image 2">
            </div>
            <!-- Add more slider items as needed -->
        </div>
    </div>
    <div class="bg-img-sec-mob">
        <img src="assets/img/banner/mobile-banner-2.jpg" class="mobile-viewerimg">  
    </div>
    <div class="home-container wow slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
        <div class="banner_logo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12 col-lg-4">
                        <img src="assets/img/banner/STS_LOGO.png" class="img-fluid logoimg wow slideInDown" data-wow-duration="2s" data-wow-delay="0.3s" alt="logo"> 
                    </div>
                    <div class="col-md-4 col-12 col-lg-4"></div>
                    <div class="col-md-4 col-12 col-lg-4"></div>
                </div>
            </div>
        </div>
        <div class="other_text">
            <div class="container">
                <div class="row">
                    <ul class="wow slideInUp pt-2" data-wow-duration="3s" data-wow-delay="1.1s" >
                        <h1 class="wow slideInLeft date" data-wow-duration="3s" data-wow-delay="0.5s"><span>WELCOME TO GTCCO</span> </h1>
                        <h3 class="tagline wow slideInRight" data-wow-duration="3s" data-wow-delay="0.5s">GLOBAL TRAINERS, COACHES AND<br> COUNSELLORS ORGANISATION.<br>GET ACCREDITED YOUR INSTITUTION <br>GET CERTIFIED  BY US
</h3>
                        <center><li><a href="contact" class="about-btn btn1 scrollto">Contact Us</a></li></center>   
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('.slider-container').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, // Adjust as needed
            autoplayHoverPause: true,
            items: 1, // Change the number of items to display if needed
            nav: true, // Enable navigation arrows
            navText: ["<i class='bi bi-caret-left-fill'></i>", "<i class='bi bi-caret-right-fill'></i>"] // Custom navigation icons
        });
    });
</script>

<style>
    .item{
        filter: brightness(0.5);
    }
   .owl-prev {
    color: black; /* Change color as needed */
    position: absolute;
    top: 40%;
    left: 2%;
    transform: translateY(-50%);
    font-size: 24px; /* Adjust font size as needed */
    z-index: 999;
    color: #fff;
}

.owl-next {
    color: black; /* Change color as needed */
    position: absolute;
    top: 40%;
    right: 2%;
    transform: translateY(-50%);
    font-size: 24px; /* Adjust font size as needed */
    z-index: 999;
    

}
i.bi.bi-caret-right-fill,i.bi.bi-caret-left-fill {
    color: #fff;
}

</style>
