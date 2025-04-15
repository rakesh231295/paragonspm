<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Paragonspm">
        <meta name="description" content="">
        <!-- ======== Page title ============ -->
        <title>ParagonSPM - Home</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="assets/img/paragon.png">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Icomoon.css >>-->
        <link rel="stylesheet" href="assets/css/icomoon.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="assets/css/color.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
        <style>
        .blue-back {
            background: #e5f2fe;
            padding: 6px 18px 10px 17px;
            display: inline-block;
            border-radius: 25px;
        }
        </style>
        <!-- CSS Styles -->
        <style>
        .theme-btn {
          padding: 10px 20px;
          background-color: #0073e6;
          color: #fff;
          border-radius: 5px;
          text-decoration: none;
        }

        .video-modal {
          display: none;
          position: fixed;
          z-index: 9999;
          top: 0; left: 0;
          width: 100vw; height: 100vh;
          background: rgba(0, 0, 0, 0.8);
          justify-content: center;
          align-items: center;
        }

        .video-modal.active {
          display: flex;
        }

        .video-content {
            text-align: center;
          position: relative;
          background: #fff;
          padding: 15px;
          border-radius: 10px;
          max-width: 800px;
          width: 90%;
          box-sizing: border-box;
        }

        .video-content video {
          width: 100%;
          max-height: 450px;
          object-fit: contain;
          border-radius: 8px;
        }

        .close-btn {
          position: absolute;
          top: 10px;
          right: 15px;
          font-size: 28px;
          color: #000;
          cursor: pointer;
          z-index: 10;
        }

        .download-btn {
          display: inline-block;
          margin-top: 15px;
          padding: 10px 20px;
          background: #0073e6;
          color: #fff;
          border-radius: 5px;
          text-decoration: none;
        }

        .download-btn:hover {
          background: #005bb5;
        }

        /* Mobile Responsive */
        @media (max-width: 600px) {
          .video-content video {
            max-height: 250px;
          }
        }
        a.active {
            color: #0F75BC !important;
        }
        </style>
    </head>
    <body >

        <!-- Preloader Start -->
<!--
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
-->

        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.php">
                                    <img src="assets/img/paragon.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">2447 Ventura Drive • Oakville, ON • L6L 2H5</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@paragonspm.com">info@paragonspm.com</span></a>
                                    </div>
                                </li>
                                
                               
                            </ul>
                            <div class="header-button mt-4">
                                
                            </div>
                            <div class="main-button">
                                <a href="contact.php"> <span class="theme-btn"> Get Started </span></a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1 style-2">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="index.php" class="header-logo-3">
                                <img src="assets/img/paragon.png" alt="logo-img" style="width:65px;">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        
                                        <li >
                                            <a href="index.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";} ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="about.php"){echo "active";} ?>">About Us</a>
                                        </li>
                                        <li>
                                            <a href="services.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="services.php"){echo "active";} ?>">Our Product</a>
                                        </li>
                                        <li>
                                            <a href="contact.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";} ?>">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="main-button">
                                <a href="contact.php"> <span class="theme-btn"> Get Started </span></a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
