<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthucare | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/legal.css"> 
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
    <section for="landing-content">
        <div class="row p-5 legal_bgimg" id="landing">
        <div class="text-left d-flex">
            <img  src="./images/legal_extract.svg" class="legal_extract mt-5" height="48px">
            <h5 class="mx-3 mt-5">Extract Filer<br><small>Legal Automation</small></h5>
               <h5><small></small></h5>
        </div>
            <h1 class="mt-3">Automate Your Document Intake</h1>
            <p  class="mb-5 legal_p  mt-3"> Extract Filer ingests all types of files, including large unsorted documents, emails, faxes, and batch-scanned mail. It sorts and splits them into separately categorized, searchable documents. It matches each document to the correct matter, titles it to your firm's naming convention, and inserts it directly into your document management software. It even alerts your attorneys and staff based on your firm's protocols. Put simply, it automates your document intake.</p>
        <div class="col-auto text-center legal_btn1">
            <button class="btn btn-lg btn-outline-warning">Get in touch</button>
        </div>
        </div>

    </section>

    <!-- Modelpage Services Section -->
    <section for="Model-services">
      <div class="container mt-4">
        <div class="row" id="model-service">
            <div class="text-center" id="model-service-heading">
                <h1  id="service-heading-h2">Let <span class="clr-b">AI</span> handle your Fax and Mail</h1>
                <h6 class="mt-3 mb-4">Your people have better things to do</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-4" id="legal-service">
                <p class="text-center">    
                    <img src="./images/legal_lap1.svg" height="30%" width="15%">
                  </p>
                  <h5 class="text-center"><span class="clr-b"> Faster</span></h5>
                  <p class="clr-g">Just scan or upload, and then validate. Our software does the rest. Complete your <b>entire document intake process more than 5x faster</b> without hiring more people, outsourcing, or changing your practice management system.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-4" id="legal-service">
                <p class="text-center">         
                  <img src="./images/legal_lap2.svg" height="30%" width="15%">
                </p>
                  <h5 class="text-center"><span class="clr-b">Accurate</span></h5>
                  <p class="clr-g">Extract Filer automates multiple processes--like sorting, matching, and naming documents--<b> eliminating hours of tedious manual labor</b>. It enables fewer people to get more work done, saving you money on day one.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-3" id="legal-service">
                <p class="text-center">         
                    <img src="./images/legal_lap3.svg" height="30%" width="15%">       
                </p>
                  <h5 class="text-center"><span class="clr-b">Cheaper</span></h5>
                  <p class="clr-g">Extract uses computer vision, natural language processing, and machine learning to <b>sort, tag, and name legal documents</b>, from medicals to pleadings, according to your rules, and file them into your practice management software.</p>
            </div>
        </div>
      </div>
    </section>

    <!-- model contents section 1 -->
    <section for="Contents">
        <div class="row px-5 align-items-center" id="contents-one" style="margin: 0; padding: 0;">
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-5 order-sm-1 order-1" id="content-image">
            <img  src="./images/legal_lap.png" alt="" class="img-fluid "  max-width="100%" min-width="100%" />
          </div>
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-5 order-sm-2 order-2" id="content-subcontent">
            <h2>
              Identify and extract content from virtually any type of document.
            </h2>
            <p class="legal_jusitfy">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
              ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          </div>
        </div>
        <div class="row px-5 align-items-center" id="contents-two">
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-5 order-sm-2 order-md-1 order-lg-1 order-2" id="content-subcontent">
            <h2>
              Leverage extracted data to derive actionable business insights.
            </h2>
          
            <p class="legal_jusitfy">

              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
              ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>  
            
          </div>
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 px-5  order-sm-1 order-md-2 order-md-2 order-1" id="content-image">
            <img  src="./images/legal_lap.png" alt="" class="img-fluid" max-width="100%"/>
          </div>
        </div>
        <div class="row p-5  align-items-center" id="contents-one">
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-5  order-sm-1" id="content-image">
            <img  src="./images/legal_lap.png" alt="" class="img-fluid" max-width="100%"/>
        </div>
          <div class="col-12 col-lg-6 col-md-6 col-sm-12 p-5 order-sm-2" id="content-subcontent">
            <h2>Get the Right Information to the Right Place, Right Away.</h2>
            <p class="legal_jusitfy">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
              ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>          
          </div>
        </div>
      </section>

    <!-- extra feature -->
    <section for="Model-services">
      <?php 
        include "feature.php";
      ?>
    </section>

    <!-- get in touch section -->
    <section for="Model-services">
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