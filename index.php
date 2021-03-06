<?php
include_once "./class/include.php";



?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Footage.lk</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>

<body>
    <?php include_once(dirname(__FILE__) . '/components/header.php'); ?>
    <!-- Slider -->
    <header id="slider-area" class="header slider-fade">
        <div class="ruby-container">
            <div class="owl-carousel owl-theme">
                <?php

                $SLIDER =  new Slider(NULL);
                foreach ($SLIDER->all() as $slider) {
                ?>
                    <div class="text-left item bg-img" data-overlay-dark="2" data-background="upload/slider/<?php echo $slider['image_name'] ?>">
                        <div class="v-middle caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Welcome to my</h4>
                                        <h1><?php echo $slider['title'] ?></h1>
                                        <p><?php echo $slider['short_description'] ?></p> <a href="#" class="button-primary">My works</a> <a href="#" class="button-tersiyer">Contact me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </header>
    <!-- About section -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">Who we are</h2>
                    <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold. Viverra tristique usto duis vitae diam neque nivamus estan ateuene artines viverra nec setlie no curabit tristique.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Over 15 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>200+ successfully executed projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Exceptional work quality</p>
                            </div>
                        </li>
                    </ul>
                    <hr class="border-2">
                    <div class="about-bottom"> <img src="img/signature-dark.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name-dark">Martin Dan</div>
                            <div class="about-rol">Founder of Photography</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"> <img src="img/about.jpg" class="img-fluid" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section -->
    <section class="services section-padding bg-black" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-30 text-center">
                    <h2 class="section-title"><span>Our Services</span></h2>
                    <p class="section-title2">Quverra tristique justo duis vitae diam neque nivamus aestan ateuene artinaelition finibus viverra nec lacus setlie suscipe tristique.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border-1">
                    <div class="item"> <img src="img/icons/icon-1.svg" alt="">
                        <h5>Photography </h5>
                        <p>Photography bibendum eros amet vacun the vulputate in the vitae miss.</p>
                    </div>
                </div>
                <div class="col-md-4 border-2">
                    <div class="item"> <img src="img/icons/icon-2.svg" alt="">
                        <h5>Videography </h5>
                        <p>Videography bibendum eros amen vacun the vulputate in the vitae miss.</p>
                    </div>
                </div>
                <div class="col-md-4 border-3">
                    <div class="item"> <img src="img/icons/icon-3.svg" alt="">
                        <h5>Corporate & Documentary</h5>
                        <p>Photo Retouching bibenum eros amen vacun the vulputate the vitae miss.</p>
                    </div>
                </div>
                <div class="col-md-4 border-4">
                    <div class="item"> <img src="img/icons/icon-4.svg" alt="">
                        <h5>Drone footage Selling </h5>
                        <p>Aerial Photography bibendum eros amen vacun the vulputate in the miss.</p>
                    </div>
                </div>
                <div class="col-md-4 border-5">
                    <div class="item"> <img src="img/icons/icon-5.svg" alt="">
                        <h5>Aerial Photography</h5>
                        <p>Lightning Setup bibendum eros amen vacus duru in the vitae miss.</p>
                    </div>
                </div>
                <div class="col-md-4 border-6">
                    <div class="item"> <img src="img/icons/icon-6.svg" alt="">
                        <h5>Video Editing </h5>
                        <p>Video Color Grading bibendum amen vacus the vulputate in the vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Works Gallery -->
    <section class="section-padding bg-black" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left">
                    <h2 class="section-title"><span>Portfolios</span></h2>
                    <hr class="border-2">
                </div>
            </div>

            <div class="row gallery-items">
                <div class="masonry-items">
                    <?php
                    $PORTFOLIO = new Portfolio(NULL);
                    foreach ($PORTFOLIO->all() as $portfolio) {
                    ?>
                        <div class="col-md-4 gallery-masonry-wrapper single-item wedding">
                            <a href="upload/portfolio/<?php echo $portfolio['image_name'] ?>" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="upload/portfolio/<?php echo $portfolio['image_name'] ?>" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                    <div class="gallery-masonry-item-content">
                                        <h4 class="gallery-masonry-item-title"><?php echo $portfolio['title'] ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials" id="feedback">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner/2.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Work together -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h5>Need help with professional photography? Let's work together!</h5> <a href="contact.html" class="button-tersiyer">Contact me</a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Jason Brown</h6> <span>Project Owner</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="img/quot.png" alt="">
                                    </span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/2.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Project Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include_once(dirname(__FILE__) . '/components/footer.php') ?>
    <!-- jQuery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/libs/owl/dist/owl.carousel.min.js"></script>
    <!-- <script src="js/libs/owl/src/js/owl-tube.min.js"></script> -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>