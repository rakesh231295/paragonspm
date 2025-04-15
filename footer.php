        <section class="footer-section footer-bg fix">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="index.html">
                                        <img src="assets/img/paragon.png" alt="img" style="width:85px;">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                       Paragon SPM is a premier Sales Performance Management (SPM) application, known for its unique and dynamic sales compensation plan design generator along with AI Decision support system (DSS) to achieve plan personalisation for sales team.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="index.php">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.php">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.php">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Our Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Contact Us</h3>
                                </div>
                                <div class="footer-content">
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fa-regular fa-envelope"></i>
                                            <a href="mailto:sales@paragonspm.com">sales@paragonspm.com</a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-map"></i>
                                            <a href="#">2447 Ventura Drive • Oakville, ON • L6L 2H5</a>
                                        </li>
                                    </ul>
                                    <div class="social-icon d-flex align-items-center">
                                    
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper text-center align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            ©2025 ParagonSPM. All Right Reserved. Design by <a href="https://brandmeld.in/">Brandmeld</a>.
                        </p>
                        
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </section>
        <!-- Video Modal -->
        <div id="videoModal" class="video-modal" onclick="closeVideoModal(event)">
          <div class="video-content" onclick="event.stopPropagation()">
            <span class="close-btn" onclick="closeVideoModal(event)">&times;</span>
            <video id="demoVideo" controls>
              <source src="assets/img/ParagonCommercial_v2.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <a href="assets/img/ParagonCommercial_v2.mp4" download class="download-btn">Download Video</a>
          </div>
        </div>

        <!-- Script -->
        <script>
        function openVideoModal(event) {
          event.preventDefault();
          document.getElementById('videoModal').classList.add('active');
          document.getElementById('demoVideo').play();
        }

        function closeVideoModal(event) {
          const modal = document.getElementById('videoModal');
          const video = document.getElementById('demoVideo');
          modal.classList.remove('active');
          video.pause();
          video.currentTime = 0;
        }
        </script>
        <!--<< All JS Plugins >>-->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Circle Progress Js >>-->
        <script src="assets/js/circle-progress.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    </body>
</html>