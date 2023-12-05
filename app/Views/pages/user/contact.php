<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
  <nav>
    <img onclick="window.location.href='index.html'" src="assets/logo.svg" alt="" />
    <div class="navigation">
      <ul>
        <i id="menu-close" class="fas fa-times"></i>
        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
        <li><a href="<?php echo site_url('about') ?>">About</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="course.html">Courses</a></li>
        <li><a class="active" href="<?php echo site_url('contact') ?>">Contact</a></li>
        <li><a class="blue" href="join.html">Join For Free</a></li>
      </ul>
      <img id="menu-btn" src="assets/menu.png" alt="" />
    </div>
  </nav>

  <section id="about-home">
    <h2>Contact Us</h2>
  </section>

  <section id="contact">
    <div class="getin">
      <div class="getin-details">
        <h3>Headquaters</h3>
        <div>
          <i class="far fa-home get"></i>
          <p>
            Jl. Letjend Pol. Soemarto No.127, Watumas, Purwanegara, Kec.
            Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53127
          </p>
        </div>
        <h3>Phone</h3>
        <div>
          <i class="fas fa-phone-alt get"></i>
          <p>(0281) 623321</p>
        </div>
        <h3>Support</h3>
        <div>
          <i class="fal fa-envelope-open-text get"></i>
          <p>
            whisnusaputra30@gmail.com <br />
            21sa1026@mhs.amikompurwokerto.ac.id
          </p>
        </div>
        <h3>Follow Us</h3>
        <div class="pro-link">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </div>

    <div class="form">
      <h4>Get in touch</h4>
      <p>Looking for help? Fill the form and start a new adventure.</p>
      <div class="form-row">
        <input type="text" placeholder="Your Name" name="" id="" />
        <input type="text" placeholder="Your Email" name="" id="" />
      </div>
      <div class="form-col">
        <input type="text" placeholder="Subject" name="" id="" />
      </div>
      <div class="form-col">
        <textarea name="" id="" cols="30" rows="8" placeholder="How can we help?"></textarea>
      </div>
      <div class="form-col">
        <button>Send Message</button>
      </div>
    </div>
  </section>

  <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.128904686519!2d109.22858551867773!3d-7.398453322049507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ef25207e1e1%3A0xcedb82ef04ed7e7c!2sUniversitas%20Amikom%20Purwokerto!5e0!3m2!1sen!2sid!4v1700145322653!5m2!1sen!2sid" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
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
        <input type="text" name="" placeholder="Your Email Address" id="" />
        <a class="yellow" href="#">SUBSCRIBE</a>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright ©2023 All rights reserved | Made with 🧠 whisnuys</p>
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