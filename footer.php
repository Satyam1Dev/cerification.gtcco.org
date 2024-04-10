<?php // Telephone
	$officeNumber = '+91 7010702114';
	$WhatsupNumber = '+91 7010702114';
	//echo '<a href="https://api.whatsapp.com/send?phone=918928414925" class="whatsapp_float" target="_blank" rel="noopener noreferrer" class="linkedin" target="_blank"><img src="https://thefuture-event.com/assets/img/whatsapp.png" alt="wpimg" class="wpimg"</a>';
	
	//echo '<style>.whatsapp_float {    position: fixed;    bottom: 65px;    right: 15px;    z-index: 99999;    width: 40px;}</style>';
	//Address '1/1 Ahiripukur, 2nd Lane Kolkata 700019, West Bengal'
	$officeAddfess =  '19,Shop Streen,Venkatapuram,	Ambattur,Chennai,	Tamilnadu,India – 600 053';
	$UAEofficeAddfess = '';
	
	//Web URL
	$Company_Web_Url = '';
	
	//Concluted Event Dates =========================================
	
	// default Reciving mails us page
	$Admin_Mail = '';
	$operationEnguiry = '';
	$sponsorsEnq = $CEO_Mail = '';
	$generalEng =  $Contact_Backup_Mail = 'info@gtcco.org';
	$speakerEng = 'info@gtcco.org';
	
	
	
	
	
	//Common Footer Variables
	$copyWriteText = '&copy; Copyright <strong><span> The gtco India. </span></strong> All Rights Reserved';
	
	//Social medialinks
	$Facebook = '#';
	$Twitter = '#';
	$Linkedin = '#';
	$Insta = $Instagram = '#';
	$Youtube = '#';
	
	// Default date
	date_default_timezone_set('Asia/Kolkata');
	$Ticket_Date = $Date =  date("Y-m-d h:i:sa");?>


<!-- ======= Footer ======= -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-links">
					<!-- <h4>ORGANISED BY</h4> -->
					<a href="<?php echo $Company_Web_Url ?>"> <img src="https://gtco-cerification.gtcco.org/assets/img/banner/logo.png" /></a>
					<p>GTCCO helps each other by sharing opportunities and   Knowledge related to Training, Coaching and Counseling.  We have been conducting  various training programmes for Schools,Colleges and Corporates. We have also done many public training programmes. We invite all Trainers and Counsellors from around the Globe to be part of GTCO for mutual Intellectual growth.</p>
				</div>
				
				<div class="col-md-4 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="privacy_policy">Privacy Policy</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="terms_conditions">Terms and Conditions</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="faq">FAQ</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-contact">
					<h4>Contact Us</h4>
					<p>
						<!-- <b>Head Office :</b><br> -->
						<?php echo $officeAddfess;?><br>
						<!-- <b>Branch Office :</b><br> -->
						<!-- <?php echo $UAEofficeAddfess;?><br> -->
						<a href="tel:<?php echo $officeNumber; ?>"><strong>Phone:</strong> <?php echo $officeNumber; ?></a> <br>
						<a href="mailto:<?php echo $generalEng ?>"><strong>Email:</strong> <?php echo $generalEng ?> </a><br>
					</p>
					<div class="social-links">						
						<a href="<?php echo $Twitter; ?>" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
						<a href="<?php echo $Facebook; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
						<a href="<?php echo $Linkedin; ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
						<a href="<?php echo $Instagram; ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
						<a href="<?php echo $Youtube; ?>" class="youtube" target="_blank"><i class="bi bi-youtube"></i></a>						
					</div>
				</div>
				<div class="col-lg-12">
					<p class="cr"><?php echo $copyWriteText;?></p>
				</div>
			</div>
		</div>
	</div>		
	</footer><!-- End  Footer -->
	
	
	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	
	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script type="text/javascript">
            (function() {
                var options = {
                    whatsapp: "+918884144691", // WhatsApp number
                    call_to_action: "Live Chat", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol,
                    host = "getbutton.io",
                    url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>

		
	
	
	
</body>

</html>
