<!--style sheets-->
<link rel="stylesheet" type="text/css" href="<?php echo $ROUTE; ?>/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!--java script-->
<script src="<?php echo $ROUTE; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $ROUTE; ?>/assets/js/jquery_3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROUTE ?>/assets/icons/zam-favicon.png">
    <style>
        .header-nav-i {
            background-color: #1a68bc;
        }

        .header-nav a i {
            margin-right: 20px;
            color: #000;
            float: right;
            transition: all 0.3s ease-in;
        }

        .header-nav a i:hover {
            color: #1a68bc;
            transform: translateY(5px);
        }

        #nav_ul {
            margin-left: auto;
            margin-right: 20px;
        }

        li {
            margin: 10px;
        }

        #nav_ul li a {
            color: #ffffff;

        }

        #nav_ul li a:hover {
            color: #000;

        }

        @media (max-width: 576px) {
            .social a {
                display: none;
            }
        }

        .top_title {
            display: inline;
        }

        @media (max-width: 576px) {
            .top_title {
                text-align: center;
                display: block;
            }
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .img_size {
            height: 70px;
            width: 180px;
        }

        @media (max-width: 576px) {
            .img_size {
                height: 60px;
                width: 140px;
            }
        }
    </style>
</head>

<body>

    <!-- Top bar -->
    <div class="header-nav pt-2">
        <div class="social">
            <p class="mx-2 top_title text-uppercase header_social">Transforming your ideas into digital reality</p>
            <a href="https://www.linkedin.com/company/zam-developers" target="_blank">
                <i class="fa-brands fa-facebook header_social"></i>
            </a>
            <a href="https://twitter.com/zamdevelopers93" target="_blank">
                <i class="fa-brands fa-twitter header_social"></i>
            </a>
            <a href="https://www.linkedin.com/company/zam-developers" target="_blank">
                <i class="fa-brands fa-linkedin header_social"></i>
            </a>
            <a href="https://wa.me/923287006553" target="_blank">
                <i class="fa-brands fa-whatsapp header_social"></i>
            </a>
            <a href="https://www.instagram.com/zamdevelopers" target="_blank">
                <i class="fa-brands fa-instagram  header_social"></i>
            </a>
        </div>
    </div>
    <!-- Top bar end -->

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg header-nav-i py-0">
        <img class="img_size" href="#" src="<?php echo $ROUTE ?>/assets/img/logo.png" alt="logo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon my-toggler"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" id="nav_ul">
                <li class="nav-item active">
                    <a class="nav-link" id="nav_home" href="<?php echo $ROUTE ?>index.php">Home <span class="sr-only"></span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/web_dev/website-development.php">Web Development</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/mobile_development/mobile_development.php">Mobile App</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/digital_marketing/dgital_marketing.php">Digital Marketing</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/digital_marketing/dgital_marketing.php#SEO">SEO</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/graphices/graphices.php">Graphics</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/ecommerce/ecommerce.php">Ecommerce Platform</a>
                        <a class="dropdown-item text-dark" href="<?php echo $ROUTE ?>pages/ai/ai.php">AI Solutions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $ROUTE ?>pages/Contact_us/contact_us.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $ROUTE ?>pages/about_us/about_us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $ROUTE ?>pages/blog/blog.php">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->

</body>

</html>