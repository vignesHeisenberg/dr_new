<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Datareveal</title>

  <!-- Boostrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/about.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
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
  <section for="About-landing-contents">
    <div class="row my-auto" id="about-landing" style="margin: 0;padding:0;">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-lg-5 ps-lg-5 pt-md-0 pt-lg-0 pt-sm-0 pt-5"
        id="about-landing-contents">
        <h2 class="mt-lg-5 pt-lg-5 mx-lg-5 mb-lg-5 mb-3" id="about-land-h2">Datareveal</h2>
        <h3 class="mx-lg-5 mb-lg-5 mb-5" id="about-land-h3">ARCHITECTING INTELLIGENCE™</h3>
        <p class="mx-lg-5" id="about-land-p">Datareveal AI is a Texas based technology company on a mission to
          build
          artificial intelligence for the real world. We leverage advances in computer vision, natural
          language processing, and machine learning to help organizations process, manage, and leverage their
          unstructured data to streamline manual tasks, make better data driven decisions, and drive business
          value.</p>
      </div>
    </div>
  </section>

  <!-- Team Sections -->
  <section for="Team-members">
    <div class="row p-3" style="margin: 0;padding: 0;">
      <div id="team-heading">
        <h2 class="text-center text-uppercase mt-2" id="team-heading-h2">Leadership</h2>
        <hr color="white" width="10%" size="10px" style="margin-left: 45%;">
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="text">
            <img src="images/team/maria.jpeg" alt="maria datareveal">
            <h3>Dr. Maria Viqar</h3>
            <!-- <p>Cardiovascular Diseases Surgeon</p> -->
            <p>
              CMO and President
            </p><br>
          </div>
          <div class="links mt-1">
            <!-- <a target="_blank" href="#"><i class="fab fa-instagram"></i></a> -->
            <!-- <a target="_blank" href="#"><i class="fab fa-github"></i></a> -->
            <a href="./footer.php" >ji</a>
            <a onclick="window.location.href='https://www.linkedin.com/'"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/maria.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);"
              id="view-btn">view more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/anil.jpeg" alt="anil datareveal">
            <h3>Anil Bariki</h3>
            <!-- <p>Vice President, Data Sciences</p> -->
            <p>
              CEO and President
            </p><br>
          </div>
          <div class="links mt-1">
            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/anil.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/mohamed.jpeg" alt="mohamed datareveal">
            <h3>Dr. Mohamed Ibrahim</h3>
            <!-- <p style="text-align:center">Professor, Oxford University, UK</p> -->
            <p>
              CIO and Chief Computer Vision Scientist
            </p>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/mimohamed/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/mohamed.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/krish.jpeg" alt="krish datareveal">
            <h3>Kris Ghimire</h3>
            <!-- <p>Senior Data Scientist</p> -->
            <p>
              Chief Data Scientist
            </p><br>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/kristech/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/krish.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/bala.jpeg" alt="bala datareveal">
            <h3>Bala Daks</h3>
            <!-- <p>Senior Data Scientist</p> -->
            <p>
              COO and Founder
            </p><br>
          </div>
          <div class="links mt-1">
            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/bala.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/suresh.jpeg" alt="suresh datareveal">
            <h3>Suresh Kumar</h3>
            <!-- <p>Senior Cybersecurity Architect</p> -->
            <p>
              CISO and Vice President
            </p><br>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/skumar07/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/suresh.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/rishi.jpeg" alt="rishhi datareveal">
            <h3>Rishhi Balakrishnan</h3>
            <!-- <p>Principal AI/ML Engineer</p> -->
            <p>
              Principal AI/ML Strategy Architect
            </p><br>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/rishhibala["><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/rishhi.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-2" id="team-card">
        <div class="card">
          <div class="text">
            <img src="images/team/ankit.jpeg" alt="ankit datareveal">
            <h3>Ankit Kumar</h3>
            <!-- <p>iOS Engineer</p> -->
            <p>
              Principal iOS / Mobile App Strategy Architect
            </p>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/ankit-rk/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/ankit.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Advisory board -->
    <div class="row p-3" style="margin: 0;padding: 0;">
      <div id="team-heading">
        <h2 class="text-center text-uppercase mt-2" id="team-heading-h2">Advisory Board</h2>
        <hr color="white" width="18%" size="10px" style="margin-left: 40%;">
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-2">
        <div class="card">
          <div class="text">
            <img src="images/team/joseph.jpeg" alt="joseph datareveal">
            <h3>Dr.Joseph S Antony</h3>
            <!-- <p>Associate Professor – Uni. of Leeds, UK</p> -->
            <p>
              ...
            </p>
          </div>
          <div class="links mt-1">
            <a href="https://eps.leeds.ac.uk/chemical-engineering/staff/264/dr-s-joseph-antony"><i
                class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/joseph.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-2">
        <div class="card">
          <div class="text">
            <img src="images/team/faizen.PNG" alt="faizen datareveal">
            <h3>Dr.Faizan Javed</h3>
            <!-- <p>Senior Director Kaiser Permanente</p> -->
            <p>
              ....
            </p>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/faizanjaved/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/faizan.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-2">
        <div class="card">
          <div class="text">
            <img src="images/team/fabio.PNG" alt="fabio datareveal">
            <h3>Dr.Fabio Savorgnan</h3>
            <!-- <p>Cardiologist</p> -->
            <p>
              ...
            </p>
          </div>
          <div class="links mt-1">
            <a href="https://www.linkedin.com/in/fabio-savorgnan-46266769/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="./team/fabio.php"
              style="text-decoration: none;text-transform: uppercase;font-weight: 500;color: rgb(35, 182, 219);">view
              more</a>
          </div>
        </div>
      </div>
    </div>
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

    var div = document.getElementById("view-div");
    var btn = document.getElementById("view-btn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
      div.style.display = "block";
    }

    span.onclick = function () {
      div.style.display = "none";
    }
    window.onclick = function (event) {
      if (event.target == modal) {
        div.style.display = "none";
      }
    }
  </script>

</body>

</html>