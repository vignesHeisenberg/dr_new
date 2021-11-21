<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font family and Icons-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
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
    <section for="Learn-landing-contents">
        <div class="row" id="learn-landing" style="padding: 0;margin: 0;">
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 my-auto" id="learn-landing-image">
                <img src="images/learning_land.png" class="img-fluid mt-lg-0 ms-lg-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=100%">
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4" id="learn-landing-contents">
                <h5 id="learn-landing-contents-h5">Datareveal Extract - Learning</h5>
                <h3 id="learn-landing-contents-h3">Go beyond data extraction to automate insights and decisions, not
                    just tasks.</h3>
            </div>
        </div>
    </section>

    <!-- Subpage Contents -->
    <section for="Learning-services">
        <div class="container">
            <div class="row p-3 mx-auto mt-2" id="learn-content" style="margin: 0;padding: 0;">
                <a href="#" id="learn-content-a">Datareveal</a>
                <h2 id="learn-content-h2">Learning</h2>
                <p class="p-3" id="learn-content-p">Empower Vision and Language solutions with Extract Learning models
                    to automate processes that ordinarily require human judgment, extract actionable insights from
                    processed data, and make better data-driven decisions.</p>
                <div class="col-lg-6 col-md-6 col-sm-12 p-2" id="learn-content-one">
                    <i class="fas fa-magic" style="font-size: 25px;"></i><span class="ps-2"
                        id="learn-content-span"> Cognitive
                        Reasoning Systems
                        and
                        Process Automation</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mx-sm-auto p-2" id="learn-content-two">
                    <i class="fas fa-hourglass-start" style="font-size: 25px;"></i><span class="ps-2"
                        id="learn-content-span"> Supervised
                        and Unsupervised Classification and Clustering</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mx-sm-auto mt-3 p-2" id="learn-content-three">
                    <i class="fas fa-history" style="font-size: 25px;"></i><span class="ps-2"
                        id="learn-content-span"> Predictive
                        Modeling and Time-Series Forecasting</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mx-sm-auto mt-3 p-2" id="learn-content-four">
                    <i class="fas fa-chart-line" style="font-size: 25px;"></i><span class="ps-2"
                        id="learn-content-span">
                        Prescriptive Analytics and Decision Optimization</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Parellex Section -->
    <section for="Parellex">
        <div class="row p-4" id="parallax" style="margin: 0;padding: 0;">
            <h3 id="parallax-h3" class="text-center p-5">Leverage data to extract actionable insights and make better
                data-driven decisions.
            </h3>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Contents">
        <div class="container">
            <div class="row mt-5 mb-5" id="contents-one" style="margin: 0;padding: 0;">
                <div class="col-lg-5 col-md-5 col-sm-12 p-1" id="content-image">
                    <img src="images/learn-content-1.webp" alt="vision-Datareveal" height="100%" width="100%">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto p-1 p-lg-0" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Intelligently Process Documents</h2>
                    <p id="content-subcontent-p">Unlike traditional OCR applications that rely on templates and zonal
                        extraction, Datareveal Extract leverages AI to read documents like a human, understanding the
                        context, meaning and intent of language.

                        Datareveal AI uses knowledge mapping to configure Extract to perform complicated processes,
                        integrating both deterministic and probabilistic models to make judgement calls, and using
                        confidence thresholds to determine when human involvement is necessary. Extract continuously
                        learns from human feedback, getting faster and more accurate each day.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5" id="contents-two">
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto d-none d-sm-block" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Extract Insights from Dark Data</h2>
                    <p id="content-subcontent-p">Whether its automating manual processes, uncovering actionable
                        insights, or predicting future events, digital transformation relies on structured data. But 90%
                        of enterprise data is locked away in documents, images, and videos and the rate at which this
                        unstructured data is being created is increasing exponentially.

                        Not only can Datareveal AI create structure out of this unstructured data, its unsupervised
                        clustering, supervised classification, and other Learning models can detect even subtle patterns
                        and coax out meaningful insights. Go beyond simply processing data and use it to predict future
                        events and prescribe the best course of action.</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 p-1 ms-lg-5" id="content-image">
                    <img src="images/learn-content-2.webp" class="ms-lg-5" alt="vision-Datareveal" height="100%"
                        width="100%">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto d-block d-sm-none p-4" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Extract Insights from Dark Data</h2>
                    <p id="content-subcontent-p">Whether its automating manual processes, uncovering actionable
                        insights, or predicting future events, digital transformation relies on structured data. But 90%
                        of enterprise data is locked away in documents, images, and videos and the rate at which this
                        unstructured data is being created is increasing exponentially.

                        Not only can Datareveal AI create structure out of this unstructured data, its unsupervised
                        clustering, supervised classification, and other Learning models can detect even subtle patterns
                        and coax out meaningful insights. Go beyond simply processing data and use it to predict future
                        events and prescribe the best course of action.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5" id="contents-one">
                <div class="col-lg-5 col-md-5 col-sm-12 p-1" id="content-image">
                    <img src="images/learn-content-3.webp" alt="vision-Datareveal" height="100%" width="100%">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto p-4 p-lg-0" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Forecast the future</h2>
                    <p id="content-subcontent-p">Extract leverages transfer learning to configure its suite of deep
                        learning and time-series forecasting models specifically for each use case. The Datareveal AI
                        team has built and deployed in production hundreds of predictive models across industries,
                        ranging from helping energy utilities forecast when machine component parts will fail to helping
                        a large multi-national appliance maker model future customer demand.

                        The Datareveal AI team has particular expertise in healthcare predictive models, having deployed
                        over 100 different revenue, operational, and clinical predictive models for healthcare providers
                        around the globe.</p>
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

</body>

</html>