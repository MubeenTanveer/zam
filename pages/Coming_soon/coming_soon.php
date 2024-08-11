<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    #section_1 {
      background-image: url('<?php echo $ROUTE ?>/pages/coming_soon/construction-bg.png');
      background-repeat: no-repeat;
      background-size: 100%;
      background-position: center;

    }
    .coming-soon-sm{
      display: none;
    }
    .stay-connected {
      color: grey !important;
    }

    @media (max-width: 768px) {
      #section_1 {
        display: none !important;
      }

       .coming-soon-sm {
        display: block !important;
      }

      #section_2 {
        background-image: url('<?php echo $ROUTE ?>/pages/coming_soon/construction-bg.png');
        background-repeat: no-repeat;
      }

    }
  </style>
</head>



<body>
  <div id="section_3" class="p-0 container-fluid d-sm-flex sm-grid justify-content-center align-items-center vh-100" id="page_2_body">
    <div class="row col-md-12">
      <section class="vh-100 col-md-6" id="section_1">
        <div class="d-sm-flex justify-content-end p-3">
          <div class="p-3 bottom-50 position-absolute">
            <h1 class="text-primary mb-0 pb-0">Coming Soon...</h1>
            <p class="text-dark stay-connected">
              Stay Connected, Stay Updated
            </p>
          </div>
        </div>
      </section>

      <section id="section_2" class="row   align-items-center vh-100 col-md-6 align-middle align-items-center text-center text-white">
        <div class="align-middle">
          <div class="coming-soon-sm">
            <h1 class=" text-primary mb-0 pb-0">Coming Soon...</h1>
            <p class=" text-dark">
              <small>Stay Connected, Stay Updated</small>
            </p>
          </div>
          <div class="d-flex text-dark justify-content-center text-center  text-uppercase">
            <div class="p-3">
              <p>
                Our website is undergoing maintenance. We apologize for any
                inconvenience and appreciate your understanding.
              </p>
              <p>Our team is available to assist you. please contact us.</p>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <hr class="text-dark w-50 text-center" />
          </div>
          <div>
            <p class="p-3 text-dark">
              Please feel free to reach out to me for any further discussions
              or collaboration.!
            </p>
          </div>
          <div class="">
            <button id="home-contact-btn" class="btn btn-primary text-center w-70">
              Contact Us
            </button>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>
<script>
  document.getElementById("home-contact-btn").onclick = function() {
    window.location.href = "./pages/Contact_us/contact_us.php";
  };
</script>

</html>