<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM user");
 ?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>WebKita Online</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/webkita.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Wait, please...</span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Area Start -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Type keywords and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                        <!-- Search Button -->
                        <div class="search-btn"><i class="icon_search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Search Area End -->

    <!-- Social Share Area Start -->
    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                   <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img width="100" height="50" src="img/webkita.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./Home.php">Home</a></li>
                                    <li><a class="blog-nav-item" href="index.html" onclick =" return confirm ('Yakin ingin keluar?')";>Logout</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Podcast Thumbnail Area Start -->
    <section class="podcast-hero-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="podcast-hero-text section-padding-80 d-flex align-items-center">
                        <div class="podcast-txt- pr-md-5">
                            <h5>Web Kita Online</h5>
                            <h2>Selamat mendengarkan musik kesukaan Anda</h2>
                            <div class="podcast-meta-data">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> April 23, 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Podcast Thumbnail Area End -->

    <!-- Audio Player Area Start -->
    <div class="podcast-audio-player-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="audio-player">
                        <audio preload="auto" controls>
                            <source src="audio/armada-hargai-aku-official-videoss.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Audio Player Area End -->

    <!-- Latest Podcast Area Start -->
    <section class="razo-latest-podcast-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Latest on Webkita Online:</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Podcast Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                            <img src="img/webkita.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i> July 23, 2014</a>
                            </div>
                            <h5>Armada - Bebaskan Diriku</h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <a href="musik1.php" class="btn razo-btn btn-sm">Playing now</a>
                                <a href="audio/08 Armada Bebaskan Diriku.mp3" class="music-download-btn" download><i class="icon_download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Podcast Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                            <img src="img/webkita.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i> April 23, 2019</a>
                            </div>
                            <h5>Armada - Hargai Aku</h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <a href="musik2.php" class="btn razo-btn btn-sm">Playing now</a>
                                <a href="audio/armada-hargai-aku-official-video.mp3" class="music-download-btn" download><i class="icon_download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Podcast Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                            <img src="img/webkita.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i> April 23, 2019</a>
                            </div>
                            <h5>Justin Bieber - Be Alright</h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <a href="musik3.php" class="btn razo-btn btn-sm">Playing now</a>
                                <a href="audio/Justin Bieber - Be Alright.mp3" class="music-download-btn" download><i class="icon_download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Podcast Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                            <img src="img/webkita.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i> April 23, 2019</a>
                            </div>
                            <h5>Virgoun - Balasan Surat Cinta untuk Starla</h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <a href="musik4.php" class="btn razo-btn btn-sm">Playing now</a>
                                <a href="audio/Virgoun - Balasan Surat Cinta Untuk Starla.mp3" class="music-download-btn" download><i class="icon_download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Podcast Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                            <img src="img/webkita.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i> April 23, 2019</a>
                            </div>
                            <h5>Wiz Khalifa ft.Charlie Puth - See You Again</h5>
                            <div class="border-line"></div>
                            <div class="play-download-btn d-flex align-items-center justify-content-between">
                                <a href="musik5.php" class="btn razo-btn btn-sm">Playing now</a>
                                <a href="audio/Wiz_Khalifa_feat_Charlie_Puth_See_You_Again_Furious_7_Soundtrack002.mp3" class="music-download-btn" download><i class="icon_download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Podcast Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-80-0">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img width="200" height="50" src="img/webkita.png" alt=""></a>

                            <p class="mb-30">Web Kita Online adalah situs pemutar musik dan sebagai tempat penyimpanan musik yang bisa di upload dari gallery Anda dan download ke gallery Anda.<br> Be happy!</p>

                            <!-- Footer Content -->
                            <div class="footer-content">

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>Universitas Sriwijaya, Sumatera Selatan, Indonesia.</p>
                                    </div>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>gusthoviridians11@gmail.com</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">

                            <!-- Widget Title -->
                            <h4 class="widget-title">Developer</h4>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet">
                                    <p>Mahasiswa Sistem Informasi<br>Universitas Sriwijaya<br><a href="webkitaonline.epizy.com">WebKita Online</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Youtube</h4>
                                <p>Subcribe Channel<br><a href="https://www.youtube.com/channel/UCdWJv0bmAoie2w2P7vd53bg">Gustho Viridians</a></p>

                            <h4 class="widget-title">Instagram</h4>
                                <p>@gustho_viridians</p>

                             <h4 class="widget-title">Line</h4>
                                <p>@gustho11</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Footer Area End -->
        
    <!-- App Download Area Start -->
    <section class="razo-app-download-area section-padding-80-0 bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/21.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <!-- App Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="app-thumbnail mb-80">
                        <img src="img/bg-img/mockup-iphone.png" alt="">
                    </div>
                </div>
                <!-- App Download Text -->
                <div class="col-12 col-md-6">
                    <div class="app-download-text mb-80">
                        <span>Enjoy upload &amp; download music</span>
                        <h2>Web Kita Online</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Download Area End -->

        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Web Kita Online <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>