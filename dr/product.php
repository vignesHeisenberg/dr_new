<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HL7-FHIR API ADAPTER | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">
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

    <!-- Landing Contents -->
    <section for="Landing-contents">
        <div class="row" id="landing" style="padding: 0;margin: 0;">

            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4 pt-0" id="landing-contents">
                <h5 id="landing-contents-h5">Datareveal Extract - HL7-FHIR API ADAPTER</h5>
                <h1 id="landing-contents-h3">A platform that will help healthcare providers to reduce complexity of the system integrations and connect different EHR systems.</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 ms-md-5 my-auto" id="landing-image">
                <img src="images/hl7-fhir-landing.png" class="img-fluid ms-lg-4 ms-md-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=100%">
            </div>
        </div>
    </section>
    <!-- Product Features -->
    <section for="Product-features">
        <div class="row mt-lg-5 mt-md-4 mt-5" id="product-feature">
            <h2 class="text-center"><strong>Let AI Handle Your Document Intake</strong></h2>
            <p style="color: #202832; text-align: center; font-size: 17px;"><strong> people have better things to
                    do.</strong></p>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_ItsCheaper_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Cheaper</span></p>
                <p id="pro-sub">Agile external environment<br>
                                External Integration Environment
                </p>
            </div>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_ItsFaster_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Faster</span></p>
                <p id="pro-sub">External Test Environment<br>
                    Pre-packaging of sets of services<br> 
                    so can present your service as one delivered package
                    </p>
            </div>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_futureproof_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Future-Proof</span></p>
                <p id="pro-sub">Aggregating layer for data from multiple sources<br>
                    Temporary Communications tool
                    </p>
            </div>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Product-contents">
        <div class="container-fluid">
        <!-- 1 -->
        <div class="row p-lg-5">
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_CategorizedPDFs_icon.svg">
                <p id="pro-con"><strong>HL-7 HEALTHCARE INFORMATION</strong></p>
                <p id="pro-con-sub">Health Level 7’s (HL7’s) new standard, FHIR (Fast Health Interoperability Resources), is setting healthcare information technology and medical imaging specifically ablaze with excitement. This aims to describe the protocol’s advantages in some detail and explore an easy path for those unfamiliar with FHIR to begin learning the standard using free, open-source tools, namely the HL7 application programming interface (HAPI) FHIR server and the SIIM Hackathon Dataset.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/hl7-content-one.PNG" id="pro-img">
            </div>
        </div>

        <!-- 2 -->
        <div class="row">
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-none d-sm-block p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/hl7-content-two.PNG" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_correctcasefile_icon.svg">
                <p id="pro-con"><strong>HAPI FHIR SERVER</strong></p>
                <p id="pro-con-sub">HL7 application programming interface (HAPI, pronouncedBhappy ) has long existed as a go-to library for incorporationof HL7 v2 into applications written in Java. The HAPIcommunity has focused on creation of a FHIR libraryallowing for both consuming and exposing FHIR APIs. Theproject is feature rich including: the server, excellent docu-mentation, a supportive community, and frequent releases(fixing bugs, adding features, and expanding support fornewer FHIR resources and standards).</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-block d-sm-none p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/hl7-content-two.PNG" id="pro-img">
            </div>
        </div>

        <!-- 3 -->
        <div class="row">
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_Capturekeys_icon.svg">
                <p id="pro-con"><strong>FHIR SPECIFICATION</strong></p>
                <p id="pro-con-sub">The building block in FHIR is a Resource,which provides a com-mon way to define and represent all exchangeable content and re-lated metadata in a particular modeling domain. In this study, weleveraged both document resources Composition/Bundle and clinicalresources Condition, Procedure, MedicationStatement/Medication,and FamilyMemberHistory to model unstructured EHR data andNLP outputs.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/hl7-content-three.PNG" id="pro-img">
            </div>
        </div>
    </div>
    </section>

    <!-- Features Section -->
    <section for="Subpage-feature-contents">
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

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>