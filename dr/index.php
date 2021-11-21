<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Datareveal</title>
    <link rel="stylesheet" href="./css/index.css">

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
        <?php
         include "navbar.php";
        ?>
    </section>

    <!-- Navigation Section For Mobile -->
    <section for="Nav-bar-menu" class="d-block d-sm-none">
        <?php
            include "mobile-navbar.php";
        ?>
    </section>

    <!-- Carousel Section -->
    <section for="Carousel-content">
        <?php
        include 'carousal.php';
        ?>
    </section>

    <!-- Video Section -->
    <!-- <section for="Video-with-content">
        <div class="row">
            <video autoplay muted loop id="myVideo">
                <source src="./images/video-bg.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>

            <div class="content" style="margin-top: -18%;">
                <div class="ps-5">
                    <h3>Data reaveal </h3>
                    <h3>Make Automation Work.</h3>
                    <h5>Your people have better things to do.</h5>
                    <button id="myBtn" class="btn mt-2">Pause</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Services Section -->
    <section for="Services">
        <div class="row pt-5" id="service">
            <div id="service-heading">
                <h2 class="text-center text-uppercase" id="service-heading-h2">Services</h2>
                <hr width="7%" size="10px" style="margin-left: 46.4%;color:#000">
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-lg-5 p-md-5 p-3" data-aos="fade-up"
                data-aos-duration="1500">
                <div id="service-one" class="text-center">
                    <img src="./images/eye-scanner_1.svg" alt="" srcset="" height="50px" width="50px" class="mt-5">
                    <h4 class="mt-3 text-uppercase">Vision</h4>
                    <div class="mt-4 p-3">
                        <p id="service-p">Video Analysis, Image Processing, Robotic Surgery and Intelligent OCR to Extract Structured Data from unstructured images, videos and documents.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-lg-5 p-md-5 p-3" data-aos="fade-up"
                data-aos-duration="1500">
                <div id="service-two" class="text-center">
                    <img src="./images/file_1.svg" alt="" height="50px" width="50px" class="mt-5">
                    <h4 class="mt-3 text-uppercase">Language</h4>
                    <div class="mt-4 p-3">
                        <p id="service-p">NLP-NLU-NLG,  Chat Analytics, Topic Modelling, Customer Segmentation, Compare the similarity of new input documents to the documents used to train your NLP models.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-lg-5 p-md-5 p-3" data-aos="fade-up"
                data-aos-duration="1500">
                <div id="service-three" class="text-center">
                    <img src="./images/lightbulb.svg" alt="" srcset="" height="50px" width="50px" class="mt-5">
                    <h4 class="mt-3 text-uppercase">learning</h4>
                    <div class="mt-4 p-3">
                        <p id="service-p">Machine Learning, Deep Learning, Reinforcement Learning [RL] and Graph-Based models to detect patterns, extract actionable insights, and Optimize Decision-Making.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 0;padding: 0;">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2"></div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-lg-5 p-md-5 p-3" data-aos="fade-up"
                    data-aos-duration="1500">
                    <div id="service-three" class="text-center">
                        <img src="./images/api-develop.svg" alt="" srcset="" height="50px" width="50px" class="mt-5">
                        <h4 class="mt-3 text-uppercase">api development</h4>
                        <div class="mt-4 p-3">
                            <p id="service-p">FHIR-HL7 Conversion, Email Invoice Classification, Genomic DNA API, IoT Transportation Real-Time Vehicle Tracking/Anomaly Detection, Crime Prevention API.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-lg-5 p-md-5 p-3" data-aos="fade-up"
                    data-aos-duration="1500">
                    <div id="service-three" class="text-center">
                        <img src="./images/product-develop.svg" alt="" srcset="" height="50px" width="50px"
                            class="mt-5">
                        <h4 class="mt-3 text-uppercase">Product development</h4>
                        <div class="mt-4 p-3">
                            <p id="service-p">Incident Linkage Detection Tool, Patient Readmission Prediction Tool/App,  Data Quality Anomaly Detection Tool.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parellex Section -->
    <section for="Parellex">
        <div class="row p-4" id="parallax" style="margin: 0;padding: 0;">
            <h3 id="parallax-h3" class="text-center p-5">Enable software with human like vision to analyze images,
                videos, and documents across
                real world use cases.</h3>
        </div>
    </section>

    <!-- Features Section -->
    <section for="Feature-contents">
        <?php 
        include "feature.php";
        ?>
    </section>

    <!-- Get In Touch Section -->
    <section for="Get-in-touch">
        <?php
        include "get-in-touch.php";
        ?>
    </section>

    <!-- Footer Section -->
    <section for="Footer">
        <?php
            include "footer.php";
        ?>
    </section>

    <!-- Bootstrap Js -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>