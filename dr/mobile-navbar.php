<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<style>
    .hero-image .about-me {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 99;
    }

    .hero-image .about-me label {
        font-size: 26px;
        color: #fff;
        display: block;
    }

    .hero-image:after {
        background-color: black;
        content: '';
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        height: 100%;
        opacity: 0.3;
    }

    .hero-image {
        background-size: cover;
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: lightgray;
        background-image: url('https://images.unsplash.com/photo-1495465798138-718f86d1a4bc?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');
        display: table;
        background-position: center;
    }


    .hero-image .about-me a {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        padding: 10px 20px;
        border: 1px solid white;
        margin: 20px;
    }


    .navbar-demo {
        display: table;
        width: 100%;
        position: fixed;
        z-index: 99;
    }

    .navbar-demo .nav-bar ul li {
        display: block;
    }

    .navbar-demo .nav-bar ul {
        padding: 0;
        display: table;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .navbar-demo .nav-bar ul li a {
        font-size: 18px;
        display: inline-block;
        text-align: center;
        text-decoration: none;
        color: #000;
        padding: 18px;
        text-transform: uppercase;
    }

    .nav-bar {
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .navbar-demo button.menu-btn {
        display: none;
    }

    @media only screen and (max-width: 767px) {
        .navbar-demo button.menu-btn {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #0984e3;
            border: 0;
            font-size: 26px;
            display: block;
            padding: 10px;
            color: #fff;
            outline: none;
        }

        .navbar-demo {
            height: 100%;
            z-index: 999;
        }

        .navbar-demo .nav-bar {
            left: -950px;
            background-color: #000000d9;
            transition: 1s;
            height: 100%;
        }

        .navbar-demo.open-nav .nav-bar {
            left: 0;
            width: 100%;
            transition: left 0.5s;
            height: 100%;
        }

        .navbar-demo .nav-bar ul li a {
            display: block;
            color: #fff;
        }

        .navbar-demo.open-nav button.menu-btn i:before {
            content: '\f00d ';
        }
    }

    /* dropdown */
    .mob-dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 18px;
        border: none;
        cursor: pointer;
        font-weight: 400;
    }

    .mob-dropdown {
        position: relative;
        display: inline-block;
    }

    .mob-dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        color: #000;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .mob-dropdown-content a {
        color: black;
        padding: 10px 14px;
        text-decoration: none;
        display: block;
    }

    .mob-dropdown-content a:hover {
        background-color: #0984e3;
        color: #000;
    }

    .mob-dropdown:hover .mob-dropdown-content {
        display: block;
        background-color: #000;
    }

    .mob-dropdown:hover .mob- dropbtn {
        background-color: transparent;
    }
</style>

<body>
    <header id="header" class="navbar-demo">
        <div class="nav-bar">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                    <div class="mob-dropdown">
                        <button class="mob-dropbtn">EXTRACT PLATFORM</button>
                        <div class="mob-dropdown-content">
                            <a href="vision.php">Vision</a>
                            <a href="language.php">Language</a>
                            <a href="learning.php">Learning</a>
                            <a href="api-development.php">API Development</a>
                            <a href="product-development.php">Product Development</a>
                        </div>
                    </div><br>
                    <div class="mob-dropdown">
                        <button class="mob-dropbtn">INDUSTRIES</button>
                        <div class="mob-dropdown-content">
                            <a href="./smart-city.php">Smart Cities</a>
                            <a href="./transportation.php">Transportation</a><br>
                            <a href="./data.php">Data</a><br>
                            <a href="#">Legal</a><br>
                            <a href="#">Healthcare</a>
                            <a href="#">Banking</a>
                            <a href="#">Cybersecurity</a>
                        </div>
                    </div><br>
                    <div class="mob-dropdown">
                        <button class="mob-dropbtn">PRODUCTS</button>
                        <div class="mob-dropdown-content">
                            <a href="product.php">HL-7 FHIR API ADAPTER</a>
                            <a href="product1.php">GENOMICS DNA API</a>
                        </div>
                    </div>
                    <a href="about.php">About Us</a>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>

        </div>
        <button type="" class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </header>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-btn').click(function (event) {
                $('.navbar-demo').toggleClass('open-nav');
            });
        });
    </script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>