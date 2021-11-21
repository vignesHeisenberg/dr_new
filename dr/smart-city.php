<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Cities | Datareveal</title>

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
        <div class="row p-5 smart-city_bgimg" id="landing">
        <div class="text-left d-flex mt-lg-5">
            <img  src="./images/legal_extract.svg" class="legal_extract mt-5" height="48px">
            <h5 class="mx-3 mt-5">Extract Filer<br><small>Smart Cities</small></h5>
               <h5><small></small></h5>
        </div>
            <h1 class="mt-2">The Future Begins In The Great City </h1>
            <p  class="mb-3 legal_p mt-3">Advanced digital technology enhances the lives of citizens and visitors.</p>
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
        </div>
      </div>
    </section>

    <!-- model contents section 1 -->
    <section for="Contents">
          <div class="container">

            <!-- 1 -->
              <div class="row mb-3">
                  <div class="col-lg-6 p-2">
                      <img src="./images/industries/smart-city/content-one.jpg" alt="smart cities datareveal" class="img-fluid">
                  </div>
                  <div class="col-lg-6 my-auto">
                      <h3 class="text-capitalize mb-3">Public Safety Enhancement</h3>
                      <p id="content-p">
                        Provides the ability to monitor multiple locations, detecting alert noises and trends that the system catalogs as dangerous.
                      </p>
                      <p id="content-p">
                        The system detects unsafe situations such as vandalism in the area, gunshots, breaking glass, or screams of panic and other unsafe situations.
                      </p>
                      <p id="content-p">
                        The system detects unsafe situations such as vandalism in the area, gunshots, breaking glass, or screams of panic and other unsafe situations.
                      </p>
                  </div>
              </div>

              <!-- 2 -->
              <div class="row mb-3">
                <div class="col-lg-6 p-2 d-block d-sm-none">
                    <img src="./images/industries/smart-city/content-two.jpg" alt="smart cities datareveal" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <h3 class="text-capitalize mb-3">Usage Analytics Enhancement</h3>
                    <p id="content-p">
                        Provides area usage information: what facilities people are using (for example: bins and park benches, or the streetlights on an avenue).
                    </p>
                    <p id="content-p">
                        Real-time information allows for the assignment of appropriate resources as needed.
                    </p>
                    <p id="content-p">
                        The system enables a collection of facility-usage statistics that allows you to understand how citizens use infrastructure and amenities, and empower you to provide services better.
                    </p>
                </div>
                <div class="col-lg-6 p-2 d-none d-sm-block">
                    <img src="./images/industries/smart-city/content-two.jpg" alt="smart cities datareveal" class="img-fluid">
                </div>
            </div>

            <!-- 3 -->
            <div class="row mb-3">
                <div class="col-lg-6 p-2">
                    <img src="./images/industries/smart-city/content-three.png" alt="smart cities datareveal" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <h3 class="text-capitalize mb-3">Traffic Predictions Enhancement</h3>
                    <p id="content-p">
                        Camera devices track the flow of vehicles moving through an area.
                    </p>
                    <p id="content-p">
                        At the same time, data analytics generate traffic trends and predictions.
                    </p>
                    <p id="content-p">
                        Accurate statistics provide the ability for better planning and empower the mobility of the city.
                    </p>
                </div>
            </div>

             <!-- 4 -->
             <div class="row mb-3">
                <div class="col-lg-6 p-2 d-block d-sm-none">
                    <img src="./images/industries/smart-city/content-four.png" alt="smart cities datareveal" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <h3 class="text-capitalize mb-3">Safe Driving Enhancement</h3>
                    <p id="content-p">
                        Detects unsafe driving (example: cars driving wrong way).
                    </p>
                    <p id="content-p">
                        Allows city personnel to react.
                    </p>
                    <p id="content-p">
                        Data analytics detect traffic trends and detect risk sectors, which helps to improve infrastructure to reduce future accidents.
                    </p>
                </div>
                <div class="col-lg-6 p-2 d-none d-sm-block">
                    <img src="./images/industries/smart-city/content-four.png" alt="smart cities datareveal" class="img-fluid">
                </div>
            </div>

          </div>
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