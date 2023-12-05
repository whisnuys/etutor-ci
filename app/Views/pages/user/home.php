<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Tutor | Capstone Project PEMWEB</title>
  <!-- Fontawesome - icon -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <nav>
    <img src="assets/logo.svg" alt="" />
    <div class="navigation">
      <ul>
        <i id="menu-close" class="fas fa-times"></i>
        <li><a href="<?php echo site_url('/') ?>" class="active">Home</a></li>
        <li><a href="<?php echo site_url('about') ?>">About</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="course.html">Courses</a></li>
        <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
        <li><a class="blue" href="join.html">Join For Free</a></li>
      </ul>
      <img id="menu-btn" src="assets/menu.png" alt="" />
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Hero -->
  <section id="hero">
    <h2>Enhance Your Future With E-Tutor</h2>
    <p>
      Our mision is to help people to find the best course online and learn
      with expert anytime, anywhere.
    </p>
    <div class="btn">
      <a class="learnmore" href="#">Learn More</a>
    </div>
  </section>
  <!-- End Hero -->
  <!-- Features -->
  <section id="features">
    <h1>Awesome Features</h1>
    <p>
      Discover our incredible features for an extraordinary learning
      experience.
    </p>
    <div class="fea-base">
      <div class="fea-box">
        <i class="fas fa-graduation-cap"></i>
        <h3>Scholarship Facility</h3>
        <p>
          One make creepeth, man bearing theira firmament won't great heaven
        </p>
      </div>
      <div class="fea-box">
        <i class="fas fa-file-certificate"></i>
        <h3>Sell Online Course</h3>
        <p>Unlock your potential with our online course marketplace</p>
      </div>
      <div class="fea-box">
        <i class="fas fa-award"></i>
        <h3>Certification</h3>
        <p>
          Earn your certification and unlock new opportunities for success.
        </p>
      </div>
    </div>
  </section>
  <!-- End Features -->

  <!-- Course -->
  <section id="course">
    <h1>Our Popular Courses</h1>
    <p>Discover our popular courses and enhance your learning journey</p>
    <div class="course-box">
      <div class="courses">
        <img src="assets/c1.jpg" alt="" />
        <div class="details">
          <span>Updated 17 Nov 2023</span>
          <h6>JavaScript Beginners Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
      <div class="courses">
        <img src="assets/c2.jpg" alt="" />
        <div class="details">
          <span>Updated 21/8/21</span>
          <h6>HTML & CSS Beginners Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
      <div class="courses">
        <img src="assets/c3.jpg" alt="" />
        <div class="details">
          <span>Updated 21/8/21</span>
          <h6>Python Beginners Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
      <div class="courses">
        <img src="assets/c4.jpg" alt="" />
        <div class="details">
          <span>Updated 21/8/21</span>
          <h6>Web Design Crash Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
      <div class="courses">
        <img src="assets/c5.jpg" alt="" />
        <div class="details">
          <span>Updated 21/8/21</span>
          <h6>Web Development Crash Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
      <div class="courses">
        <img src="assets/c6.jpg" alt="" />
        <div class="details">
          <span>Updated 21/8/21</span>
          <h6>Angular Beginners Course</h6>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(239)</span>
          </div>
        </div>
        <div class="cost">$20.00</div>
      </div>
    </div>
  </section>
  <!-- End Course -->
  <!-- Footer -->
  <footer>
    <div class="footer-col">
      <h3>Top Products</h3>
      <li>Web Development</li>
      <li>Machine Learning</li>
      <li>No-Code Development</li>
      <li>Data Analyst</li>
    </div>
    <div class="footer-col">
      <h3>Quick Links</h3>
      <li>Jobs</li>
      <li>Brand Assets</li>
      <li>Investor Relations</li>
      <li>Terms of Service</li>
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
        <input type="text" name="" placeholder="Your Email Address" id="" />
        <a class="subscribe-btn" href="#">SUBSCRIBE</a>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright ©2023 All rights reserved | Made with necessary</p>
      <div class="pro-link">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
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