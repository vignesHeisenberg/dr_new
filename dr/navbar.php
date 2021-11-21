<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            }
            else {
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function () {
            $('.menu h4').click(function () {
                $("nav ul").toggleClass("active")
            })
        })
    </script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .responsive-bar {
        display: none;
    }

    nav {
        z-index: 2;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        height: 100px;
        padding: 10px 100px;
        box-sizing: border-box;
        transition: .5s;
    }

    nav.black {
        background: #fff;
        height: 80px;
        padding: 10px 50px;
    }

    nav .logo {
        float: left;
    }

    nav .logo img {
        height: 50px;
        transition: .5s;
        
    }

    nav.black .logo img {
        height: 50px;
    }

    nav>ul {
        width: 80%;
        margin: 0 auto;
        padding: 0;
        float: right;
    }

    nav>ul>li {
        list-style: none;
        display: inline-block;
    }

    nav>ul>li>a:hover {
        background: transparent;
        color: #ff9900;
    }

    nav>ul>li>a {
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        line-height: 80px;
        padding: 5px 20px;
        transition: .5s;
        font-weight: 500;
    }

    nav.black>ul>li>a {
        color: #000;
        line-height: 60px;
    }
    nav.black span{
        color:#000;
    }
    nav.black>ul>li>a:hover {
        background-color: transparent;
        color: #007CE1;
    }

    @media(max-width:575.98px) {
        .responsive-bar {
            display: block;
            width: 100%;
            height: 60px;
            background: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding: 5px 20px;
            box-sizing: border-box;
            z-index: 1;
        }

        .responsive-bar .logo img {
            float: left;
            height: 50px;
        }

        .responsive-bar .menu h4 {
            float: right;
            color: #fff;
            margin: 0;
            padding: 0;
            line-height: 50px;
            cursor: pointer;
            text-transform: uppercase;
        }

        nav {
            padding: 0;
        }

        nav,
        nav.black {
            background: #fff;
            height: 60px;
            padding: 0;
        }

        nav .logo {
            display: none;
        }

        nav ul {
            position: absolute;
            width: 100%;
            top: 60px;
            left: 0;
            background: #fff;
            float: none;
            display: none;
        }

        nav ul.active {
            display: block;
        }

        nav ul li {
            width: 100%;
        }

        nav ul li a {
            display: block;
            padding: 0;
            width: 100%;
            text-align: center;
            line-height: 30px !important;
            color: #fff;

        }

        nav>ul {
            width: 100%;
            display: none;
        }

        nav>ul>li {
            display: block;
            text-align: center;
        }

        .active {
            display: block;
        }
    }
    /* dropdown */
    .dropdown {
  position: relative;
  display: inline-block;
  padding: 5px 20px;
  color: #fff;
  font-weight: 500;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 220px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 16px;
  z-index: 1;
  
}
.dropdown-content a{
 text-decoration: none;
 line-height: 2em;
 margin:5px;
 color:#000;  
 font-size:1.1em; 
}
.dropdown-content a:hover{
 color:#37d0f7;
}
.dropdown:hover .dropdown-content {
  display: block;
  margin-top: 2%;
  border-radius: 10px;  
  text-align: left;
}
</style>

<body>
    <div class="d-none d-sm-none d-md-none d-lg-block">
        <nav class="responsive-bar">
            <div class="logo">
                <img src="#" alt="logo"  />
            </div>
            <div class="menu">
                <h4>Menu</h4>
            </div>
        </nav>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="logo" class="mt-1" />
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>   
                    <div class="dropdown">
                        <span>EXTRACT PLATFORM</span>
                            <div class="dropdown-content">
                                <a href="vision.php">Vision</a><br>
                                <a href="language.php">Language</a><br>
                                <a href="learning.php">Learning</a><br>
                                <a href="api-development.php">API Development</a><br>
                                <a href="product-development.php">Product Development</a>
                             </div>
                    </div>
                  
                </li>
                <li>
                    <div class="dropdown">
                        <span>INDUSTRIES</span>
                            <div class="dropdown-content">
                                <a href="./smart-city.php">Smart Cities</a>
                                <a href="./transportation.php">Transportation</a><br>
                                <a href="./data.php">Data</a><br>
                                <a href="#">Legal</a><br>
                                <a href="#">Healthcare</a><br>
                                <a href="#">Banking</a>
                                <a href="#">Cybersecurity</a>
                             </div>
                    </div>
                </li>
                <li>

                <div class="dropdown">
                        <span>PRODUCT</span>
                            <div class="dropdown-content">
                                <a href="product.php">HL7-FHIR API</a><br>
                                <a href="product1.php">GENOMICS DNA API</a>
                             </div>
                    </div>

                </li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>