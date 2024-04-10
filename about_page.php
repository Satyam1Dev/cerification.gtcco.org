<?php
include('header.php');
?>

<style>
 /* Base styles */
#about-page {
    padding-top: 150px;
    padding-bottom: 150px;
}

.heading-about {
    padding-bottom: 125px;
    background-image: url(https://sdccanada.org/wp-content/uploads/2021/03/Bosa-finance-img28-1.jpg);
    padding-top: 200px;
    height: 40vh;
    background-size: cover;
    color: #fff;
    display: flex;
    align-items: center;
    margin: auto;
    align-content: center;
    flex-direction: column;
    justify-content: space-between;
}

.nav-link {
    cursor: pointer;
}

.nav-link.active {
    color: orange !important;
}

#img-hed {
    font-weight: 600;
    left: 12%;
    padding: 20px;
    margin: auto;
    position: absolute;
    top: 130%;
    color: #707071;
    font-size: 20px;
    background-color: #fff;
    box-shadow: 0px 25px 80px rgba(0, 0, 0, 0.5);
    width: 30%;
}

.team-member {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    height: 400px;
}

.team-member:hover {
    transform: translateY(-5px);
}

.team-member img {
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #fff;
    transition: border-color 0.3s ease;
}

.team-member:hover img {
    border-color: #F47D21;
}

.team-member h3 {
    margin-top: 15px;
    font-size: 24px;
}

.team-member h6 {
    margin-top: 10px;
    font-size: 18px;
    color: #6c757d;
}
.trusted{
  height: 100vh;
    background-image: url(https://sdccanada.org/wp-content/uploads/2021/03/Bosa-finance-img20.jpg);
      background-repeat: no-repeat;
    background-size: cover; padding:100px 0;
}
.join-us{
  background-color: #282a36;
  padding:50px;
}
/* Responsive styles */
@media (max-width: 991.98px) {
    .heading-about {
        padding-top: 150px;
    }
    #img-hed {
        top: 100%;
    }
}

@media (max-width: 767.98px) {
    #img-hed {
        width: 100%;
        position: static;
    }
    #footer {   
    padding: 230px 0 20px 0!important;   
}
.join-us{
  padding:50px 20px;
}
}

@media (max-width: 575.98px) {
    #img-hed {       
       width: 100%;
       position: static;
    }
    #footer {   
    padding: 230px 0 20px 0!important;   
}
.join-us{
  padding:50px 20px;
}
}

</style>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const accordionItems = document.querySelectorAll(".accordion-item");
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function(link) {
      link.addEventListener("click", function() {
        const targetCollapse = document.querySelector(this.getAttribute("data-bs-target"));

        // Close all accordion items
        accordionItems.forEach(function(item) {
          item.querySelector(".accordion-collapse").classList.remove("show");
        });

        // Remove active class from all links
        navLinks.forEach(function(navLink) {
          navLink.classList.remove("active");
        });

        // Add active class to clicked link
        this.classList.add("active");

        // Open the corresponding accordion item
        if (targetCollapse) {
          targetCollapse.classList.add("show");
        }
      });
    });
  });
</script>

<section class="heading-about container-fluid">
  <h1 style="font-weight: 700;">About Us</h1>
</section>

<section class="" id="about-page">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="https://media.istockphoto.com/id/942682414/photo/businessman-working-in-office-with-using-calculator-and-laptop-concept-finance-and-accounting.webp?b=1&s=170667a&w=0&k=20&c=ue8Hx-RJ5eT0TQY8d8u5CLoiHMzEiztpBrGlmNIL3m4=" alt="">
        <h2 class="" id="img-hed">Successfully providing excellent Assessment & Certification to global training organizations.</h2>
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <p class="text-head">ABOUT GTCCO</p>
            <h2 class="h1 mb-3 about-heading">Awarding authentic Certifications with Integrity
            </h2>
            <p class="lead  text-secondary mb-3"> GLOBAL TRAINERS,COACHES AND COUNSELLORS ORGANISATION IS AN ASSOCIATION OF GROUP OF TRAINERS,COACHES AND COUNSELLORS WHOSE PASSION IS TO TAKE THE TRAINING,COACHING AND COUNSELLING INDUSTRY TO THE NEXT LEVEL.
              <br><br>WITH THIS GOAL IN MIND GTCCO HAS STARTED TO EMPOWER THE TRAINERS,COACHES AND COUNSELLORS.
            </p>
            <!-- <p class="mb-5">Skill Development Council Canada was established to intervene and provide international certifications & qualifications to the global training community. </p> -->
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" data-bs-target="#panelsStayOpen-collapseOne">Our Vision</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-target="#panelsStayOpen-collapseTwo">Our Mission</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-target="#panelsStayOpen-collapseThree">
                          Our Quality policy</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                      TO EMPOWER EVERY TRAINER,COACH AND COUNSELLOR TO ACHIEVE THEIR DREAM AND TO INCREASE THEIR REPUTATION AND ALSO FINANCIAL EARNING ABILITY BY WORKING ON THEIR SKILLS AND KNOWLEDGE.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      To ease the work of Trainers,Coaches and counsellors by giving certifications to their clients so that they can concentrate more on delivery of the training. Further to provide qualified trainers to schools,colleges and corporates for their all training needs. GTCCO too conducts only FREE sessions across the world to increase our Prsence everywhere.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      We will assess every trainer,coach and counsellor and certify them without any bias. We will constanly do value adding trainings to them Free of cost so that they can stay top in their field. </div>
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

<section class="" style="height:95vh;">
  <div class="" style="padding: 100px; background-color: blue; max-width:100%; margin:auto;">
    <div class="section-header">
      <h2>We have been giving best support to global academic organizations.</h2>
      <p>WE ARE THE BEST</p>
    </div>
  </div>
  <div class="container" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    position: absolute;
    top: 200%;
    bottom: 0;
    padding: 20px 0;
    height: 350px;
    right: 0;
    left: 0;
    background-color:#fff;">
    <div class="row pt-4" style=" padding:150px 0;">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="">
          <h2>The best in skill certifications</h2>
          <p>OUR SKILLS</p>
        </div>
        <p>Assessments and issuing an equivalent qualifications are the key to identify the skill of any person. Skill Development Council Canada was launched by TVET experts across the globe to ensure that the assessment and certifications are always supported with technology. We have an 100% digital system with strict security measures.</p>
      </div>
      <div class="col-md-5">
        <div class="progress-container mb-2">
          <p class="text-head">Research-backed assessments</p>
          <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: 100%">100%</div>
          </div>
        </div>

        <div class="progress-container">
          <p class="text-head">Skill Analysis</p>
          <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-info text-dark" style="width: 100%">100%</div>
          </div>
        </div>

        <div class="progress-container">
          <p class="text-head">Certification</p>
          <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-warning text-dark" style="width: 100%">100%</div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>

    </div>
  </div>
</section>

<section style="padding: 0px 0 100px 0; ">
        <div class="section-header text-center mb-5">
            <h2>Meet Our Team</h2>
            <p>THE EXPERTS</p>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="https://counselling-lifecoaching.com/team/krishna-vaishist/">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/IMG_20221130_164525-Krishna-Vaishist-420x420.jpg" class="img-fluid rounded-circle" alt="KRISHNA VAISHIST">
                        </a>
                        <h3 class="mt-3">Krishna Vaishist</h3>
                        <h6>Psychologist</h6>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="https://counselling-lifecoaching.com/team/ms-radneswary-sooriyakumar/">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/17ba825e449e4d90aa35591868267e51-Radneswary-Sooriyakumar-420x420.jpg" class="img-fluid rounded-circle" alt="RADNESWARY SOORIYAKUMAR">
                        </a>
                        <h3 class="mt-3">Ms. Radneswary Sooriyakumar</h3>
                        <h6>Counselling and Life coaching</h6>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="https://counselling-lifecoaching.com/team/premila-binoy-thomas/">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/IMG-20230119-WA0034-Premila-Binoy-420x420.jpg" class="img-fluid rounded-circle" alt="PREMILA BINOY THOMAS">
                        </a>
                        <h3 class="mt-3">Premila Binoy Thomas</h3>
                        <h6>Therapist, Trainer, Wellness Coach and a Certified Neuro Diversity Practitioner</h6>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="https://counselling-lifecoaching.com/team/a-maria-nirmala/">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/Maria-Nirmala-420x420.jpg" class="img-fluid rounded-circle" alt="A MARIA NIRMALA">
                        </a>
                        <h3 class="mt-3">A Maria Nirmala</h3>
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="https://counselling-lifecoaching.com/team/leo-maria-francis-m-l/">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/TIRUPATTUR-Leo-420x420.jpg" class="img-fluid rounded-circle" alt="LEO MARIA FRANCIS M.L">
                        </a>
                        <h3 class="mt-3">Leo Maria Francis M.L</h3>
                        <!-- Add appropriate content for this team member -->
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <a href="">
                            <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/LIFE-COACH-420x420.jpg" class="img-fluid rounded-circle" alt="ARUN KUMAR BHANJA">
                        </a>
                        <h3 class="mt-3">Arun Kumar Bhanja</h3>
                        <!-- Add appropriate content for this team member -->
                        <h6></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- <section style="padding: 50px 0;">
  <div class="section-header">
    <h2>Meet Our Team</h2>
    <p>THE EXPERTS</p>
  </div>

  <div class="container text-center">
    <div class="row ">
      <div class="col-md-4">
        <a href="https://counselling-lifecoaching.com/team/krishna-vaishist/">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/IMG_20221130_164525-Krishna-Vaishist-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>KRISHNA VAISHIST</h3>
        <h6>PSYCHOLOGIST</h6>       
      </div>
      <div class="col-md-4">
        <a href="https://counselling-lifecoaching.com/team/ms-radneswary-sooriyakumar/">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/17ba825e449e4d90aa35591868267e51-Radneswary-Sooriyakumar-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>Ms. Radneswary Sooriyakumar</h3>
        <h6>Counselling and Life coaching</h6>       
      </div>
      <div class="col-md-4">
        <a href="https://counselling-lifecoaching.com/team/premila-binoy-thomas/">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2024/02/IMG-20230119-WA0034-Premila-Binoy-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>Premila Binoy Thomas</h3>
        <h6>Therapist, Trainer, Wellness Coach and a Certified Neuro Diversity Practitioner</h6>       
      </div>
      <div class="col-md-4">
        <a href="https://counselling-lifecoaching.com/team/a-maria-nirmala/">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/Maria-Nirmala-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>A MARIA NIRMALA</h3>
        <h6>PSYCHOLOGIST</h6>       
      </div>
      <div class="col-md-4">
        <a href="https://counselling-lifecoaching.com/team/leo-maria-francis-m-l/">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/TIRUPATTUR-Leo-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>LEO MARIA FRANCIS. M.L</h3>
        <h6></h6>       
      </div>
      <div class="col-md-4">
        <a href="">
        <img src="https://counselling-lifecoaching.com/wp-content/uploads/2023/12/LIFE-COACH-420x420.jpg" class="img-fluid" alt="KRISHNA VAISHIST">
        </a>
        <h3>Arun Kumar Bhanja</h3>
        <h6></h6>       
      </div>
    </div>
  </div>
</section> -->
<section class="trusted">
  <div class="container">
    <div class="row">
      <div class="col-md-6 join-us" >
        <p style="color: #fff; font-weight:600;">JOIN US <span style="display: inline-block; width: 100px; height: 3px; background-color: #f47d21; margin-left: 10px;"></span></p>
        <h2 style="color: #fff; font-size:56px; font-weight:700;">Trusted By More Than 150k Clients.</h2>
        <p style="color: #fff;">Join us to upgrade your institute with international certification. Our globally acclaimed systems in assessment & certification will help your trainees reach greater heights. The partnership with Skill Development Council Canada Inc will support you to constantly grow every year.</p>
        <a href="get_accredited.php" class="about-btn btn1 scrollto">Get Accredited</a>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>

</section>
<?php
include('footer.php');
?>