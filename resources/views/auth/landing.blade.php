<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sanitation Code Advisor</title>
  <link rel="icon" href="assets/img/butuan-city-health-logo.png" type="image/x-icon/jpg">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section style="height: 120px;  background: linear-gradient(90deg, rgb(5, 2, 77) 0%, rgb(26, 14, 154) 35%, rgba(0,212,255,1) 100%);" id="topbar" class="d-flex align-items-center">
    <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-right" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/butuan-city-health-logo.png') }}" class="img-fluid d-none d-md-inline" alt="AdminLTE Logo" style="max-height: 100px; width: auto;">
        </div>
        <div class="contact-info d-flex align-items-left" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/butuan-logo.webp') }}" class="img-fluid d-none d-md-inline" alt="AdminLTE Logo" style="max-height: 100px; width: auto;">
        </div>
    </div>
</section>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 350px;">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>  Sanitation Code <span>Advisor</span></h1>
      <h2>"Delivering Hygiene Excellence: Your Food Sanitation Code Expert."</h2>
      <div class="d-flex">
        <a href="{{ url('loginfront') }}" class="btn-get-started scrollto">Get Started</a>
        <a href="{{ url('/register') }}" class="btn-get-started1 scrollto ml-4">Register Now</a>
      </div>
      
    </div>
  </section><!-- End Hero -->


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Sanitation Permit</a></li>
          <li><a class="nav-link scrollto " href="https://lawphil.net/statutes/presdecs/pd1975/pd_856_1975.html">Sanitation Code</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-shield"></i></div>
              <h4 class="title"><a href="">Prevention of Foodborne Illnesses</a></h4>
              <p class="description">To safeguard public health by minimizing the occurrence of foodborne diseases through the implementation of effective sanitation measures.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Compliance with Regulations</a></h4>
              <p class="description">Ensuring adherence to local to maintain legal compliance and protect consumer well-being.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title"><a href="">Education and Training</a></h4>
              <p class="description">Empowering food handlers with the knowledge and skills necessary to maintain high levels of sanitation throughout the food production and handling process.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-arrow-right-circle"></i></div>
              <h4 class="title"><a href="">Continuous Improvement</a></h4>
              <p class="description">Facilitating ongoing enhancement of sanitation practices by identifying areas for improvement, implementing corrective measures, and striving for excellence in food safety management</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>The Food Sanitation Code Advisor is a tool or resource that provides guidance and information regarding food safety regulations and requirements. It is typically designed to assist food establishments, such as restaurants, cafes, and food processing facilities, in understanding and complying with local, state, or national food safety laws and regulations.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-us.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Mission</h5>
                  <p>The City of Butuan will strive to achieve the community's vision of a great, inspirational, competitive, liveable and sustainable city.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Vision</h5>
                  <p>Making Butuan a great hub city of opportunities for all that spurs and supports CARAGA's sustainable growth and development.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Quality Policy</h5>
                  <p>We commit ourselves to provide the people of Butuan with inclusive social services, sustainable environmental services, innovative economic services, transparent governance and quality infrastructure projects carried out by public servants who are qualified, competent and are committed to uphold the values of honesty, integrity, professionalism and excellence thus making Butuan a VIBRANT, COMPETTTIVE, LIVABLE, SUSTAINABLE and SMART-ECO CITY.</p>
                </div>
              </li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/butuan-logo.webp " class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/butuan-city-health-logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/butuan-on-logo (1).png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/DTI.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/logo-dilg.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/bagong-pilipinas.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Issuance of Sanitary Permit</h2>
          <h3>Process of <span>Sanitary Permit</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Step 1</a></h4>
              <p>Submit the applicable requirments listed to the assigned Sanitary Inspectors counter</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Step 2</a></h4>
              <p>Proceed to Cashier and pay the required amount.After payment, return to the Sanitary Inspector's counter and present the Official Receipt (OR)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Step 3</a></h4>
              <p>Fill-out Satisfaction Survey Form and drop in the designated Drop Box</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
        
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/arnel-profile.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Arnel P. Tagupa</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/balen.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Clint Jhon Balen</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/serrano.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rommel Billy Serrano</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

        

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Getting in touch with our team, ensuring seamless communication and assistance.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jose Rosales Ave, Butuan City, 8600 Agusan Del Norte</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="info-box  mb-4">
              <a href="https://facebook.com/yourpage">
                <i class="bx bxl-facebook-circle"></i>
                <h3>Facebook</h3>
                <p>Butuan City PIO</p>
              </a>
            </div>
          </div>
          

          <div class="col-lg-2 col-md-6">
            <div class="info-box  mb-4">
              <a href="https://twitter.com/butuanPIO">
                <i class="bx bxl-twitter"></i>
                <h3>Twitter</h3>
                <p>Butuan City PIO</p>
              </a>
            </div>
          </div>
          
          

          <div class="col-lg-2 col-md-6">
            <div class="info-box  mb-4">
              <a href="https://www.messenger.com/t/1289458337769029/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0">
                <i class="bx bxl-messenger"></i>
                <h3>Messenger</h3>
                <p>Butuan City PIO</p>
              </a>
            </div>
          </div>
          

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3941.20601638093!2d125.5278086!3d8.9531553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c05dbc5565e9%3A0x7293d8b1dfda5345!2sButuan%20City%20Hall!5e0!3m2!1sfil!2sph!4v1711410534169!5m2!1sfil!2sph" width="600" height="450" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sanitation Code Advisor<span>.</span></h3>
            <p>
              City Government of Butuan<br>
City Information Communication Technology Office<br>
2nd Floor City Hall Bldg<br><br>
           
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Issuance of Sanitary Permit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Issuance of Health Certificate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Isuance of Birth Certificate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Providing Immunization Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Providing Hearing Screening</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect with us on Twitter, Facebook, Messenger.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/butuanPIO" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://facebook.com/yourpage" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.messenger.com/t/1289458337769029/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" class="instagram"><i class="bx bxl-messenger"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>FoodSanitationAdvisor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://www.facebook.com/arnel.chainsmoker">Arnel Tagupa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>