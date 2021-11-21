<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Carousel</title>
</head>

<body>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="images/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/slide3.png" class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/4.webp" class="d-block w-100" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</body>

</html>