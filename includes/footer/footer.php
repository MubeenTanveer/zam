<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .footer-heading-title {
      color: #1a68bc;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .footer-heading-title:hover {
      color: #000000;

    }

    .footer-p {
      text-align: justify;
    }

    .footer-social-media-icon {
      width: 35px;
      height: 35px;
      border-radius: 5px;
      background-color: #1a68bc;
      color: #fff;
      text-align: center;
      line-height: 35px;
      margin-right: 0.5rem;
    }

    .footer-social-media-icon:hover {
      background-color: #fff;
      color: #1a68bc;
      transition: 0.3s;
    }

    .footer-link {
      color: black;
    }

    .footer-link:hover {
      color: #1a68bc;
    }

    .btn-footer-contact {
      background-color: #1a68bc;
      /* Green */
      border: 2px solid #1a68bc;
      /* Green */
      color: white;
      padding: 5px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      margin-top: 10px;
    }

    .btn-footer-contact:hover {
      background-color: white;
      /* Green */
      color: #1a68bc;
      font-size: 20px;
      border: none;
      font-weight: 600;
    }
    @media (max-width: 600px) {
      .footer-contact-portion {
        text-align: center;
      }
    }
    .fotter-logo-img{
      height: 30vh;
      width: 20vw;
    }
    @media (max-width: 600px) {
      .fotter-logo-img{
      height: 35vh;
      width: 45vw;
    }
    }
  </style>
</head>

<body>




  <div class="container">
    <footer class="row p-5 pb-0">
      <div class="col-sm-12 col-md-4 col-lg-3">
        <a href="<?php echo $ROUTE ?>index.php" class="d-flex justify-content-center and align-items-center ">
          <img src="<?php echo $ROUTE ?>assets/img/fotter-logo.webp" alt="fotter-logo" class="fotter-logo-img">
        </a>
        <p class="footer-p"> Empowering businesses with cutting-edge software solutions, we deliver unparalleled quality and innovation tailored to your unique needs</p>

      </div>

      <div class="col-sm-12 col-md-4 col-lg-3 text-center">
        <h5 class="m-2 fs-2 footer-heading-title">Services</h5>
        <ul class="nav flex-column p-2 ">
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/web_dev/website-development.php" class="nav-link p-0  footer-link ">Web Development</a></li>
          <li class="nav-item mb-2 "><a href="<?php echo $ROUTE ?>pages/mobile_development/mobile_development.php" class="nav-link p-0 footer-link ">Mobile APP</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/digital_marketing/dgital_marketing.php" class="nav-link p-0 footer-link ">Digital Marketing</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/digital_marketing/dgital_marketing.php#seo" class="nav-link p-0 footer-link ">SEO</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/graphices/graphices.php" class="nav-link p-0 footer-link ">Grapics</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/ecommerce/ecommerce.php" class="nav-link p-0 footer-link ">Ecommerce Platform</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages/services/services.php" class="nav-link p-0 footer-link ">AI solutions</a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-2 text-center">
        <h5 class="m-2 fs-2 footer-heading-title">About</h5>
        <ul class="nav flex-column p-2">
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>index.php" class="nav-link p-0 footer-link ">Home</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages\about_us\about_us.php" class="nav-link p-0 footer-link ">About</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages\Privacy policy\privacy_policy.php" class="nav-link p-0 footer-link ">Privacy Policy</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages\disclamer\disclaimer.php" class="nav-link p-0 footer-link ">Disclaimer</a></li>
          <li class="nav-item mb-2"><a href="<?php echo $ROUTE ?>pages\blog/blog.php" class="nav-link p-0 footer-link ">Blogs</a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4 ">
        <h5 class="m-2 fs-2 footer-heading-title footer-contact-portion">Contact</h5>
        <ul class="nav flex-column py-1">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 footer-link"><i class="fa-solid fa-location-dot  footer-social-media-icon"></i>Harborne, Birmingham, UK</a></li>
          <li class="nav-item mb-2"><a href="https://wa.me/447867203147" class="nav-link p-0 footer-link"><i class="fa-brands fa-whatsapp   footer-social-media-icon"></i>+44-7867-203147</a></li>
          <li class="nav-item mb-2"><a href="mailto:info@zamdevelopers.com" class="nav-link p-0 footer-link"><i class="fa-solid fa-envelope footer-social-media-icon"></i>info@zamdevelopers.com</a></li>
          <li class="nav-item mb-2 footer-contact-portion"><button id="home-contact-btn" type="button" class=" btn-footer-contact ">Contact US</button></li>
        </ul>
      </div>
    </footer>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 ">© 2024 ZAM DEVELOPERS, All rights reserved.</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
        <li class="ms-3"><a class="text-muted" href="https://web.facebook.com/profile.php?id=61560515163938&mibextid=ZbWKwL&_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f  footer-social-media-icon"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://twitter.com/zamdevelopers93" target="_blank"><i class="fa-brands fa-x-twitter  footer-social-media-icon"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.linkedin.com/company/zam-developers" target="_blank"><i class="fa-brands fa-linkedin-in footer-social-media-icon"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/zamdevelopers" target="_blank"><i class="fa-brands fa-instagram  footer-social-media-icon"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://wa.me/923287006553" target="_blank"><i class="fa-brands fa-whatsapp  footer-social-media-icon"></i></a></li>
      </ul>
    </footer>
    <p class="float-end"><a href="#">Back to top</a></p>
  </div>

</body>
<script>
  document.getElementById("home-contact-btn").onclick = function() {
    window.location.href = "../../pages/Contact_us/contact_us.php";
  };
</script>

</html>