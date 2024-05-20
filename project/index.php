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
    <!-- <link rel="stylesheet" href="css/index_style.css"> -->
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
    <?php include 'components/home_header.php'; ?>

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
                        <a href="#" class="btn">book our services now!</a>
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

        <h3 class="sub-heading">decorations we offer for our catering services</h3>
        <h1 class="heading">popular decorations our customers use</h1>

        <div class="box-container">

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco10.png" alt="">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco11.png" alt="" class="deco">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco12.png" alt="">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco13.png" alt="">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco14.png" alt="">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="Catering pics/deco15.png" alt="">
                <h3>professional looking food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5 per head</span>
                <a href="#" class="btn">add to cart</a>

            </div>

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

                <a href="#" class="btn">learn more</a>

            </div>

        </div>


    </section>


    <!--About section ends-->

    <!--Menu section ends-->

    <!-- <section class="menu" id="menu">

        <h3 class="sub-heading">our menu</h3>
        <h1 class="heading">with a hint of speciality in every option</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="Catering pics/1star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>1 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$5 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/2star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>2 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$10 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/3star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>3 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$15 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/4star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>4 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$20 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/5star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>5 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$25 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/6star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>6 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$30 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/7star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>7 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$35 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/8star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>8 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$40 per head</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Catering pics/9star.jpeg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>9 star menu</h3>
                    <p>the increase in stars the increase in exquisite</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$45 per head</span>
                </div>
            </div>

        </div>


    </section> -->

    <!--Menu section ends-->



    <!--review section starts-->

    <!-- <section class="review" id="review">

        <h3 class="sub-heading">custome's review</h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Catering pics/lady1.jpeg" alt="">
                        <div class="user-info">
                            <h3>mia mashuku</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Our event was elevated to new heights thanks to Tayamika Catering Service.
                        The food was divine, and the service impeccable. Every bite was a
                        delight, leaving our guests raving. We're thrilled with the
                        experience and look forward to future events with them!"</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Catering pics/lady2.png" alt="">
                        <div class="user-info">
                            <h3>abigail nyama</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Absolutely blown away by the catering from Tayamika Catering Service! From the
                        moment we placed our order to the last bite, everything was flawless. The
                        food was fresh, flavorful, and beautifully presented. Our guests couldn't
                        stop complimenting the spread. Thank you for making our event a delicious
                        success!"</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="Catering pics/lady3.jpeg" alt="">
                        <div class="user-info">
                            <h3>talent chiguyo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"We recently used Tayamika Catering Service for our event, and it was an absolute hit!
                        The food was delicious, and the service was top-notch. From setup to cleanup,
                        they took care of everything seamlessly. Our guests were impressed, and so
                        were we. Highly recommend!"</p>
                </div>

            </div>

        </div>

    </section> -->

    <!--review section ends-->


    <!--order section starts-->

    <!-- <section class="order" id="order">

        <h3 class="sub-heading">book with us now</h3>
        <h1 class="heading">free and fast</h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name">
                </div>

                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number">
                </div>

                <div class="input">
                    <span>your menu option</span>
                    <input type="text" placeholder="enter your menu option">
                </div>

                <div class="input">
                    <span>additional foods</span>
                    <input type="test" placeholder="extra with menu option">
                </div>

                <div class="input">
                    <span>number of guests</span>
                    <input type="number" placeholder="how many guests are to be served">
                </div>

                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>

                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>

            </div>

            <input type="submit" value="book now" class="btn">

        </form>

    </section> -->

    <!--order section ends-->

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

    <script src="js/script.js"></script>


</body>

</html>