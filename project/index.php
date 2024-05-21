<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tayamika Catering</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Tayamika Catering</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">decorations</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
            <a href="#portal">portal</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header> -->
    <?php include 'components/header.php'?>

    <!--header section ends-->

    <!--search form-->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <!--home section starts-->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>Welcome to</span>
                        <h3>Tayamika Catering</h3>
                        <p>where customer satisfaction, and hunger sating is what we do best!</p>
                        <a href="view_menu.php" class="btn">book our services now!</a>
                    </div>

                    <div class="image">
                        <img src="Catering pics/home.jpeg" alt="">
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>our special dish</span>
                        <h3>madora</h3>
                        <p>beautifully charred to a crisp, a Zimbabwean delicacy you must have!</p>
                        <a href="#" class="btn">order now!</a>
                    </div>

                    <div class="image">
                        <img src="Catering pics/Madora.png" alt="">
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>our special dish</span>
                        <h3>derere</h3>
                        <p>beautifully whisked to perfection, a Zimbabwean delicacy you must try today!</p>
                        <a href="#" class="btn">order now</a>
                    </div>

                    <div class="image">
                        <img src="Catering pics/derere.jpeg" alt="">
                    </div>

                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!--home section ends-->

    <!--decoration section starts-->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading">dishes we offer from our catering services</h3>
        <h1 class="heading">popular dishes our customers prefer</h1>

        <div class="box-container">

            <img src="./Catering pics/food1.jpg" class="box" alt="">
            <img src="./Catering pics/food2.jpg" class="box" alt="">
            <img src="./Catering pics/food3.jpg" class="box" alt="">
            <img src="./Catering pics/food4.jpg" class="box" alt="">
            <img src="./Catering pics/food5.jpg" class="box" alt="">
            <img src="./Catering pics/food6.jpg" class="box" alt="">

            

        </div>

    </section>

    <!--decoration section ends-->

    <!--About section starts-->

    <section class="about" id="about">

        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us</h1>

        <div class="row">

            <div class="image">
                <img src="Catering pics/about.jpeg" alt="">
            </div>

            <div class="content">
                <h3>best customer care in the country</h3>
                <p>
                    "In the realm of customer service, every interaction is an
                    opportunity to weave a tapestry of trust, empathy, and excellence.
                    It's not merely about addressing needs; it's about creating moments
                    of delight and forging connections that transcend transactions. Whether
                    through a warm greeting, a listening ear, or a well catered event,
                    exceptional customer service is a beacon of humanity at gatherings.
                    It's the art of making each customer feel valued, understood, and
                    appreciated, leaving an indelible mark, and a full belly that echoes long after the
                    encounter. In the symphony of catering, customer service is the melody
                    that harmonizes relationships, fostering loyalty, and propelling success."</p>

                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>for every 20 heads paid for there is a free +1</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>

              

            </div>

        </div>


    </section>


    <!--About section ends-->


    <!--footer section starts-->

    <selection class="footer">

        <div class="box-container">

            <div class="box">
                <h3>location</h3>
                <a href="#">Chinhoyi</a>
                <a href="#">Harare</a>
                <a href="#">Bulawayo</a>
                <a href="#">Mutare</a>
                <a href="#">Masvingo</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">Home</a>
                <a href="#">Decoration</a>
                <a href="#">About</a>
                <a href="#">Menu</a>
                <a href="#">Review</a>
                <a href="#">Booking</a>
            </div>

            <div class="box">
                <h3>contact information</h3>
                <a href="#">+263 715783511</a>
                <a href="#">+263 717824700</a>
                <a href="#">tayamika.co.zw</a>
                <a href="#">tayamika@gmail.com</a>
                <a href="#">Chinhoyi University of Technology, Chinhoyi</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">intsagram</a>
                <a href="#">linkedin</a>
                <a href="#">whatsapp</a>
            </div>

        </div>

        <div class="credit">copyright @ 2024 by <span>Tayamika Catering Company</span></div>

        </div>

    </selection>

    <!--footer section ends-->


    <!-- Portal section starts -->
    <!-- <section class="portal" id="portal">
        <div class="box-container">
            <h3 class="sub-heading">Login</h3>
            <h1 class="heading">Login to your account</h1>

            <form id="login-form">
                <div class="inputBox">
                    <div class="input">
                        <span>Username</span>
                        <input type="text" id="username" placeholder="Enter your username">
                    </div>

                    <div class="input">
                        <span>Password</span>
                        <input type="password" id="password" placeholder="Enter your password">
                    </div>
                </div>
                <input type="button" value="Login" class="btn" onclick="handleLogin()">
            </form>
        </div>
    </section> -->


    <!-- Portal section ends -->









    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/index_script.js"></script>


</body>

</html>