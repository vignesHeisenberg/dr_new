<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data | Datareveal</title>

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
        <div class="row p-5 data_bgimg" id="landing">
        <div class="text-left d-flex mt-lg-5">
            <img  src="./images/legal_extract.svg" class="legal_extract mt-5" height="48px">
            <h5 class="mx-3 mt-5">Extract Filer<br><small>Data Quality Anomaly Detection</small></h5>
               <h5><small></small></h5>
        </div>
            <h1 class="mt-2">Auto Detect Hard Coded ETL Pipeline Code Detection and Fixing</h1>
            <p  class="mb-3 legal_p mt-3">Auto detect hard coded ETL pipeline code fix which enables operational value /avoid production disturbance, avoids retraining the model. Real Time Streaming Data in the pipeline able to work without interruption.</p>
        <div class="col-auto text-center legal_btn1">
            <button class="btn btn-lg btn-outline-warning">Get in touch</button>
        </div>
        </div>

    </section>

     <!-- data ETL -->
    <div class="container">
     <div class="row mt-3">
      <img src="./images/industries/data/ETL.png" class="img-fluid p-2" alt="transportation datareveal">
    </div>
  </div>

   <!-- data modernETL -->
   <div class="container">
    <div class="row mt-3">
     <h2 class="text-center mb-3">ModernETL Process In Detail</h2>
     <img src="./images/industries/data/modernETL.png" class="img-fluid p-2" alt="transportation datareveal">
   </div>
 </div>

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