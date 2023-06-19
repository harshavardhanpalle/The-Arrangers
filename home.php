<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Arrangers</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">The Arrangers</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="Packages.php">packages</a>
            <a href="Booknow.php">Book Now</a>
        </nav>

        <div id="menu-btn"><i class="fa fa-bars"></i></div>
    </header>

<!-- Home -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home1.jpeg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover,Travel</span>
                        <h3>Travel around India</h3>
                        <a href="Packages.php" class="btn">Discover More</a>
                    </div>
                </div>
                
                <div class="swiper-slide slide" style="background: url(images/home2.jpeg) no-repeat ">
                <div class="content">
                        <span>Explore, Discover,Travel</span>
                        <h3>Discover new places</h3>
                        <a href="Packages.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home3.jpeg) no-repeat">
                <div class="content">
                        <span>Explore, Discover,Travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <a href="Packages.php" class="btn">Discover More</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
 
        </div>
    </section>
    
<!--  services  -->
    <section class="services">
        <h1 class="heading-title"> Our Services</h1>

        <div class="box-container">
            
            <div class="box">
                <i class="fas fa-bullhorn fa-4x"></i>
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <i class="fas fa-hotel fa-4x"></i>
                <h3>Affordable Hotel</h3>
            </div>
            <div class="box">
                <i class="fas fa-utensils fa-4x"></i>
                <h3>Food and Drinks</h3>
            </div>
            <div class="box">
                <i class="fas fa-plane fa-4x"></i>
                <h3>Fastest Travel</h3>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia fa-4x"></i>
                <h3>Around India</h3>
            </div>
            <div class="box">
                <i class="fas fa-hiking fa-4x"></i>
                <h3>adventure</h3>
            </div>
        </div>
        <br><br>
    </section>

<!--about-->
    <section class="home-about">
        <div class="image">
            <img src="images/about1.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p> We are passionate about exploring new destinations and creating unforgettable experiences for our clients. With years of experience in the travel industry, we strive to provide exceptional service and personalized itineraries to suit every traveler's needs.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
        <br><br>
    </section>

<!--Packages  -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/south/Coorg.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Coorg</h3>
                    <p>Surrounded by imposing mountains and covered by mist, Coorg is a nature lover's paradise</p>
                    <a href="Booknow.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/north/Agra.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Agra</h3>
                    <p>Agra, home to the famous Taj Mahal, counts among the top places to visit in North India and for all the right reasons.</p>
                    <a href="Booknow.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/east/Darjeeling.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Darjeeling</h3>
                    <p>Darjeeling is one of the most beautiful hill station places to visit in East India, with jaw-dropping scenery, mesmerising sunrises, the untouched beauty of the hills, the old-world charm of the past, and the welcoming smiles of the locals.</p>
                    <a href="Booknow.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/west/Mumbai.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mumbai</h3>
                    <p>Mumbai is the city of dreams, and whoever said that was absolutely correct! And you'll realize the same thing once you've cut and run through Mumbai's perilous alleyways.</p>
                    <a href="Booknow.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="Packages.php" class="btn">Load More</a></div>
        <br><br>
    </section>





<!--offer-->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Book your next vacation with us and get a 50% discount on all travel packages. Don't miss out on this amazing offer!</p>
            <a href="Booknow.php" class="btn">Book Now</a>
        </div>
        <br>
    </section>


    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="Packages.php"><i class="fas fa-angle-right"></i> packages</a>
                <a href="Booknow.php"><i class="fas fa-angle-right"></i> Book Now</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> 9347067093</a>
                <a href="#"><i class="fas fa-phone"></i> 9392794383</a>
                <a href="#"><i class="fas fa-envelope"></i> akashmandapalli1947@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Tirupati,Andhra Pradesh,India-517102</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>
        <div class="credit"> created by <span>M.Akash | P.Harsha | P.Samara</span> <br>all rights reserved !!</div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>