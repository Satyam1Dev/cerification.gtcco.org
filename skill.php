<section class="about mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-head">WHY GTCCO?</p>
                <p class="about-heading">NOT JUST ACCREDITATIONS AND CERTIFICATION, WE HELP YOU TO SCALE HEIGHTS IN TRAINING INDUSTRY WITH THREE Es as our Motto</p>
                <p class="text">GTCCO is formed with the sole intention to encourage,empower & enrich the lives of Psychologists,Counsellors,Trainers and Coaches from all walks of live </p>

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
            <div class="col-md-6">
                <div class="play-button">
                    <div class="wave">
                        <a href="#" class="glightbox_video" data-bs-toggle="modal" data-bs-target="#gtco2">
                            <svg width="131" height="131" viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="inner-circle" d="M65 21C40.1488 21 20 41.1488 20 66C20 90.8512 40.1488 111 65 111C89.8512 111 110 90.8512 110 66C110 41.1488 89.8512 21 65 21Z" fill="white"></path>
                                <circle class="outer_circle" cx="65.5" cy="65.5" r="64" stroke="white"></circle>
                                <path class="play" fill-rule="evenodd" clip-rule="evenodd" d="M60 76V57L77 66.7774L60 76Z" fill="#F47D21"></path>
                            </svg>
                        </a>
                    </div>
                    <img src="assets/img/banner/skill.jpg" alt="About Us Image" class="img-fluid">
                </div>
            </div>
            <!-- Modal for the video -->
            <div class="modal fade" id="gtco2" tabindex="-1" aria-labelledby="gtco2Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="gtco2Label">3rd Edition SpeechTech Summit India, 2023 Highlights</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Modal Body with the YouTube video iframe -->
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/CYL44gI-Sww?si=Hde-_JkC5NiONrWv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


	




<style>
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

    .aboutus-btn>a {
        color: #fff;
    }

    .text-head {
        color: #000;
        /* border-bottom: #F47D21 solid 2px; */
        font-size: 20px;
        font-weight: 700;

    }

    .about-heading {
        font-size: 36px;
        font-weight: 700;
        line-height: 1.4;
        text-align: start;
        color: #F47D21;
    }

    p.text-head {
        margin: 10px 0 10px 0px;
    }

    .play-button {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .wave {
        position: absolute;
        top: 40%;
        bottom: 20%;
        right: 50%;
        left: 40%;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        /* border: 5px solid #fff; */
        animation: waveAnimation 2s infinite;
    }

    @keyframes waveAnimation {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
        }

        50% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }

        100% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
    }


    .glightbox_video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .outer_circle {
        stroke-width: 3;
        stroke-dasharray: 410;
        stroke-dashoffset: 0;
        stroke-linecap: square;
        transition: all .4s ease-out;
    }

    .glightbox_video:hover .outer_circle {
        stroke-dashoffset: 410;
        transition: stroke .7s .4s ease-out, stroke-dashoffset .4s ease-out
    }

    .glightbox_video:hover .inner-circle {
        fill: #F47D21;
        transition: fill .4s .3s ease-out;

    }

    .glightbox_video:hover .play {
        fill: white;
        transition: fill .4s .3s ease-out;
    }
</style>