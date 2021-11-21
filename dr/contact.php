<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Datareveal</title>

  <!-- Boostrap css -->
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .ct {
      color: white;
    }

    #empty{
      background-image: url(./images/vision-bg.jpg);
      min-height: 100px;
    }
    #contact-form{
      box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);
      border: 2px solid #0d6efd;
    }
  </style>
</head>

<body>

  <!-- Navigation Section -->
  <section for="Nav-bar-menu">
    <?php
          include 'navbar.php';
          ?> 
  </section>

  <!-- Navigation Section -->
  <section for="Nav-bar-menu">
        <!-- <?php
          include 'mobile-navbar.php';
          ?> -->
    </section>

    <section>
      <div class="row ps-lg-3" style="margin: 0;padding: 0;" id="empty">
        <h1 class="text-white text-center text-uppercase d-block d-sm-none p-4">contact us</h1>
      </div>
    </section>

  <!-- Conatct Details and Form -->
  <section id="contact-details-form">
    <div class="container pt-lg-5 pb-lg-5">
      <div class="row shadow-md bg-body rounded" id="contact-form">
        <div class="col-lg-6 bg-primary" style="background: url('./images/contactus.jpg') no-repeat;">
          <div class="col-lg-6 col-md-6 offset-md-2 offset-lg-2 mt-lg-5 pt-lg-1 p-lg-0 p-3">

            <p class="fs-6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16" style="color: #fff;">
                <path
                  d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              </svg> <span class="ct"><b>Address</b></span></p>
            <p class="ct fs-6">5050 Quorum Drive, Suite 700, Dallas, TX 75254, USA</p>
            <p class="ct fs-6">Suite 207, 4430 Bathurst Street, North York, Toronto, ON M3H3S3, Canada</p>
            <p class="ct fs-6">No 102, Bazulla Road, T Nagar, Chennai-600017, India</p>

            <p class="fs-6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-telephone-fill" viewBox="0 0 16 16" style="color: #fff;">
                <path fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg> <span class="ct"><b>Lets Talk</b></span></p>
            <p class="ct fs-6 ">+1 704 206 9793 - USA</p>
            <p class="ct fs-6 ">+1 647 781 5080 - Canada</p>
            <p class="ct fs-6 ">+91 994 013 1888 - India</p>

            <p class="fs-6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="text-center bi bi-geo-alt-fill" viewBox="0 0 16 16" style="color: #fff;">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
              </svg> <span class="ct"><b>Mail-ID</b></span></p>
            <p class="ct fs-6 ">info@datareveal.ai</p>
          </div>

        </div>
        <div class="col-lg-6">
          <div class="p-4" id="contact-details">
            <h2 class="text-center text-dark">Send us a message</h2>
            <form action="" method="post">
              <div class="row  my-3">
                <label for="exampleDataList" class="form-label">Tell us your name *</label>
                <div class="col">
                  <input type="text" name="fn" class="form-control" required placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" name="ln" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <div class="col my-3">
                <label for="exampleDataList" class="form-label">Enter your email *</label>

                <input type="email" class="form-control" name="email" placeholder="Eg: example@gmail.com"
                  aria-label="Enter Your email">
              </div>
              <div class="col my-3">
                <label for="exampleDataList" class="form-label">Enter your phone number </label>

                <input type="text" class="form-control" name="pn" placeholder="Eg: +1800 000000" aria-label="Phone Number">
              </div>
              <div class="col my-3">
                <label for="exampleDataList" class="form-label">Message *</label>
                <textarea class="form-control" name="msg" placeholder="Write us a message" id="exampleFormControlTextarea1"
                  rows="3"></textarea>

              </div>
              <div class="col-auto text-center ">
                <button type="submit" name="btn_sbt" class="btn btn-primary clr mb-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <section for="Nav-bar-menu">
    <?php
          include 'footer.php';
          if(isset($_POST['btn_sbt']))
          {
          
            $a="Firstname: ".$_POST['fn']."<br />Lastname: ".$_POST['ln']."<br /> Email ID: ".$_POST['email']."<br /> Phone Number: ".$_POST['pn']."<br /> Message: ".$_POST['msg'];
            if(mail("info@datareveal.ai","Message from user","$a"))
            {

            }
            
          }
          ?>
  </section>

</body>

</html>