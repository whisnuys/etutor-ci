<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

  <nav>
    <img onclick="window.location.href='index.html'" src="assets/logo.svg" alt="">
    <div class="navigation">
      <ul>
        <i id="menu-close" class="fas fa-times"></i>
        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
        <li><a href="<?php echo site_url('about') ?>" class="active">About</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="course.html">Courses</a></li>
        <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
        <li><a class="blue" href="join.html">Join For Free</a></li>
      </ul>
      <img id="menu-btn" src="assets/menu.png" alt="">
    </div>
  </nav>

  <section id="about-home">
    <h2>About Us /</h2>
  </section>

  <section id="about-container">
    <div class="about-img">
      <img src="assets/a.png" alt="">
    </div>

    <div class="about-text">
      <h2>Welcome to TechEduca, Enhance your skills with best Online Courses</h2>
      <p>You can start and finish one of these popular courses in under a day – for free! Check out the list below.. Take the course for free</p>

      <div class="about-fe">
        <img src="assets/fe1.png" alt="">
        <div class="fe-text">
          <h5>400+ Courses</h5>
          <p>You can start and finish one of these popular courses in under our site</p>
        </div>
      </div>
      <div class="about-fe">
        <img src="assets/fe2.png" alt="">
        <div class="fe-text">
          <h5>Lifetime Access</h5>
          <p>You can start and finish one of these popular courses in under our site</p>
        </div>
      </div>

    </div>
  </section>

  <section id="features">
    <h1>Awesome Feature</h1>
    <p>Replenish man have thing gathering lights yielding shall you</p>
    <div class="fea-base">
      <div class="fea-box">
        <i class="fas fa-graduation-cap"></i>
        <h3>Scholarship Facility</h3>
        <p>One make creepeth, man bearing theira firmament won't great heaven</p>
      </div>

      <div class="fea-box">
        <i class="fas fa-file-certificate"></i>
        <h3>Sell Online Course</h3>
        <p>One make creepeth, man bearing theira firmament won't great heaven</p>
      </div>

      <div class="fea-box">
        <i class="fas fa-award"></i>
        <h3>Global Certification</h3>
        <p>One make creepeth, man bearing theira firmament won't great heaven</p>
      </div>
    </div>
  </section>

  <section id="trust">
    <h1>Trusted By</h1>
    <p>Replenish man have thing gathering lights yielding shall you</p>
    <div class="trust-images">
      <img src="assets/trust (1).png" alt="">
      <img src="assets/trust (2).png" alt="">
      <img src="assets/trust (3).png" alt="">
      <img src="assets/trust (4).png" alt="">
      <img src="assets/trust (5).png" alt="">
      <img src="assets/trust (6).png" alt="">
    </div>
  </section>

  <footer>
    <div class="footer-col">
      <h3>Top Products</h3>
      <li>Manage Reputation</li>
      <li>Power Tools</li>
      <li>Managed Website</li>
      <li>Marketing Service</li>
    </div>
    <div class="footer-col">
      <h3>Quick Links</h3>
      <li>Jobs</li>
      <li>Brand Assets</li>
      <li>Investor Relations</li>
      <li>Terms of Service</li>
    </div>
    <div class="footer-col">
      <h3>Features</h3>
      <li>Manage Reputation</li>
      <li>Power Tools</li>
      <li>Managed Website</li>
      <li>Marketing Service</li>
    </div>
    <div class="footer-col">
      <h3>Resources</h3>
      <li>Guides</li>
      <li>Research</li>
      <li>Experts</li>
      <li>Marketing Service</li>
    </div>
    <div class="footer-col">
      <h3>Newsletter</h3>
      <p>You can trust us. we only send promo offers,</p>
      <div class="subscribe">
        <input type="text" name="" placeholder="Your Email Address" id="">
        <a class="yellow" href="#">SUBSCRIBE</a>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright ©2021 All rights reserved | This template is made by Tech2etc</p>
      <div class="pro-link">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
      </div>
    </div>
  </footer>

  <script>
    $("#menu-btn").click(function() {
      $("nav .navigation ul").addClass("active");
    });
    $("#menu-close").click(function() {
      $("nav .navigation ul").removeClass("active");
    });
  </script>

</body>

</html>