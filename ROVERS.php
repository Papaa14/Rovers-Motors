 <?php
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<form action="login.php" method="post">
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>ROVERS</span>MOTORS</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#featured">featured</a>
         <a href="#contact">contact</a>
         
         </div>
    
    </nav>
    

</header> 
</form>
<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">Get yourself a safe ride</h3>

    <img data-speed="5" class="home-parallax" src="Images\home-img.png" alt="">

   

</section>
<!-- SLIDING CAR OPTIONS -->
<div class="car_options g-bg-color--something g-font-family--secondary" id="Cars">
    <h3 class="display-3" style="padding: 0.5em;">Choose from the world's Best..</h3>
<div class="slide_car">
    <div class="slide slide-left">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY NOW</button></a>
        </div>
        <img class="car_slide" src="Images\BMW X7.png" alt="Car1">
    </div>
    <div class="slide slide-top">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY  NOW</button></a>
        </div>
        <img class="car_slide" src="Images\Nissan juke.jpeg" alt="Car2">
    </div>
    <div class="slide slide-right">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY NOW</button></a>
        </div>
        <img class="car_slide" src="Images\Lexus LX 570.jpeg" alt="Car3">
    </div>
    <div class="slide slide-left">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY NOW</button></a>
        </div>
        <img class="car_slide" src="Images\Lexus v8.jpeg" alt="Car4">
    </div>
    <div class="slide slide-bottom">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY NOW</button></a>
        </div>
        <img class="car_slide" src="Images\Mercedes g wagon.jpeg" alt="Car5">
    </div>
    <div class="slide slide-right">
        <div class="slide-content">
            <a href="order.php"><button type="button" class="s-btn--scooter-bg">BUY NOW</button></a>
        </div>
        <img class="car_slide" src="Images\Mercedes c 180.jpeg" alt="Car6">
    </div>
</div>
</div>
<!-- END SLIDEING CAR OPTIONS-->



<section class="featured" id="featured">
<h1 class="heading"> <span>featured</span> cars </h1>
 <div class="featured-content">
 <div class="product-box">
                <img src="Images\Nissan note.jpeg" alt="" class="product-img">
                    <h3 class="product-title">Nissan Note <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 2.1M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Nissan patrol.jpeg" alt="" class="product-img">
                    <h3 class="product-title">Nissan Patrol <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 5.9M</span>
                    <div class="edit">
                       <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a> 
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Nissan sylphy.jpeg" alt="" class="product-img">
                    <h3 class="product-title">SYLPHY <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 2.5M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota Alphard.jpeg" alt="" class="product-img">
                    <h3 class="product-title">ALPHARD <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 6.4M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota Camry.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">CAMRY <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 4.3M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota crown.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">CROWN<br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 6.2M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\fielder s.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">FIELDER <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 2.9M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota harrier.jpeg" alt="" class="product-img">
                    <h3 class="product-title">HARRIER <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 5.4M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota Hilux double cabin.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">TOYOTA HILUX <br>DOUBLE CABIN</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 2.8M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota Hilux single cabin.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">TOYOTA HILUX <br> SINGLE CABIN</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 2.5M</span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota Noah.jpeg" alt=""  class="product-img">
                    <h3 class="product-title">NOAH <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 4.5 </span>
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
            </div>
            <div class="product-box">
                <img src="Images\Toyota prado.jpeg" alt="" class="product-img">
                    <h3 class="product-title">PRADO <br> new model</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i><br>
                    <span class="price">KSH 5.6M</span>
                 <div class="edit">
                    <div class="edit">
                        <a href="order.php"><button style="font-size: 24px;"><i class="fas fa-shopping-bag"></i></button></a>
                     </div>
                 </div>
            </div>

          </div>

</section>
<a href="order.php"><button type="button" class="btn">Load More...</button></a>


<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> MOMBASA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> KISUMU </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> NAIROBI</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> NAROK </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> BUNGOMA</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 0706709332 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0776851434 </a>
            <a href="#"> <i class="fas fa-envelope"></i> roversmotors@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> KISUMU, Maseno - 508881 </a>
        </div>

        <div class="box">
            <h3>social media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> © 2022 Rovers Motors | all rights reserved </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
