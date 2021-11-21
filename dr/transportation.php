<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation | Datareveal</title>

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
        <div class="row p-5 transport_bgimg" id="landing">
        <div class="text-left d-flex mt-lg-5">
            <img  src="./images/legal_extract.svg" class="legal_extract mt-5" height="48px">
            <h5 class="mx-3 mt-5">Extract Filer<br><small>Transportation</small></h5>
               <h5><small></small></h5>
        </div>
            <h1 class="mt-2">Accelerate your Smart Transportation</h1>
            <p  class="mb-3 legal_p mt-3">Designing a brighter transport future.</p>
        <div class="col-auto text-center legal_btn1">
            <button class="btn btn-lg btn-warning">Get in touch</button>
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
                      <img src="./images/industries/transport/content-one.jpg" alt="transportation datareveal" class="img-fluid">
                  </div>
                  <div class="col-lg-6 my-auto">
                      <h3 class="text-capitalize mb-3">Traffic Predictions</h3>
                      <p id="content-p">
                        System allows for the monitoring of data and devices geospatially, as a digital twin, or graphically.
                      </p>
                      <p id="content-p">
                        Alerts can be established based on incidents, thresholds, or future predictions, and the system can also provide access to video snippets of historical events and live video streams.
                      </p>
                      <p id="content-p">
                        Accurate statistics provide ability for better planning.
                      </p>
                  </div>
              </div>

              <!-- 2 -->
              <div class="row mb-3">
                <div class="col-lg-6 p-2 d-block d-sm-none">
                    <img src="./images/industries/transport/content-two.jpg" alt="transportation datareveal" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <h3 class="text-capitalize mb-3">Safety and Efficiency Enhancement</h3>
                    <p id="content-p">
                      System detects incidents and potential disruptions improving situational awareness and operational efficiencies.
                    </p>
                    <p id="content-p">
                      Real-time information allows to handle emergency situations effectively and communicate any disruptions to commuters.
                    </p>
                    <p id="content-p">
                      Predictive analytics enable predictive maintenance and increased efficiencies.
                    </p>
                </div>
                <div class="col-lg-6 p-2 d-none d-sm-block">
                    <img src="./images/industries/transport/content-two.jpg" alt="transportation datareveal" class="img-fluid">
                </div>
            </div>

            <!-- 3 -->
            <div class="row mb-3">
                <div class="col-lg-6 p-2">
                    <img src="./images/industries/transport/content-three.jpg" alt="smart cities datareveal" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <h3 class="text-capitalize mb-3">Commuter Experience Enhancement</h3>
                    <p id="content-p">
                      Commuters can monitor traffic level and disruptions in realtime.
                    </p>
                    <p id="content-p">
                      Real-time information allows them to plan their journeys accordingly and avoid delays.
                    </p>
                    <p id="content-p">
                      It helps provide a better customer experience and more personalized communications.
                    </p>
                </div>
            </div>
          </div>
    </section>

     <!-- transport tracking -->
     <div class="row">
      <h2 class="text-center mb-3">Real-time GPS fleet / Truck tracking</h2>
      <h5 class="text-center">Live Tracking of Trucks / Vehicles</h5>
      <img src="./images/industries/transport/transport-map.jpg" class="img-fluid p-2" alt="transportation datareveal">
    </div>
    
    <div class="row p-lg-5">
      <h3 class="mb-2">Forecasting vehicle maintenance</h3>
      <p class="mb-2" id="transport-map-p">The systems can forecasts vehicle maintenance with the help of smart dashboards and sensors. You can use telematics solutions to take care of the vehicles. It will give alerts and conditions of the track & vehicles to you so that you can save yourself from probable hazards.</p>
      <h5 class="mb-2">Congestion Traffic Management</h5>
      <p id="transport-map-p">Artificial intelligence systems predict and reduce traffic congestion and improve road safety.</p>
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