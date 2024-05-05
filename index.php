<?php
session_start();
?>

<!-- end of base -->
<?php
require_once("header.php");
?>
<!-- start of base -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scuba Bolton Center</title>

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body>
    <!-- Hero Section HTML Start -->

    <section id="Hero">
      <div class="hero-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="hero-content">
                <h2>
                  Improve your scuba <br />
                  without <span>diligence.</span>
                </h2>
                <p>
                  The 1 leading website on all your scuba needs, dive in to our
                  catalogue and we will promise you that you will never want to
                  dive out
                </p>
                <div class="hero-buttons">
                  <a href="create-account.php" class="sign-up-btn">Sign up</a>
                  <a href="#" class="browse-btn">Browse</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="hero-img">
                <img src="assets/images/hero-image.png" alt="hero-image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hero Section HTML End -->

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Why Section HTML Start -->

      <section id="Why">
        <div class="why-wrapper">
          <div class="container">
            <div class="why-top">
              <h2>Why we are better than others</h2>
              <p>
                We value every customer who decides to shop with us, so we
                always make sure these conditions are accurate before sending
                the chosen item to you
              </p>
            </div>
            <div class="why-cards">
              <div class="why-card">
                <div class="why-card-img">
                  <img
                    src="assets/images/high-quality.png"
                    alt="high-quality"
                  />
                  <h3>High Quality</h3>
                </div>
              </div>
              <div class="why-card">
                <div class="why-card-img">
                  <img src="assets/images/ideal-gift.png" alt="ideal-gift" />
                  <h3>Ideal Gift</h3>
                </div>
              </div>
              <div class="why-card">
                <div class="why-card-img">
                  <img src="assets/images/durable.png" alt="durable" />
                  <h3>Durable</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Section HTML End -->

      <!-- Services Section HTML Start -->

      <section id="Services">
        <div class="services-wrapper">
          <div class="container">
            <div class="services-top">
              <h2>Other services we provide are</h2>
            </div>
            <!-- Member Card -->
            <div class="services-cards">
              <div class="services-card">
                <a href="non-members.php"><div class="services-card-img">
                  <img
                    src="assets/images/services-img1.png"
                    alt="services-img1"
                  />
                  <h3>Member Events</h3>
                </div></a>
              </div>

            <!-- Service Card -->
              <div class="services-card">
                  <a href="#"><div class="services-card-img">
                  <img
                    src="assets/images/services-img2.png"
                    alt="services-img2"
                  />
                  <h3>Services</h3>
                </div></a>
              </div>

            <!-- Courses Card -->
              <div class="services-card">
              <a href="courses.php"><div class="services-card-img">
                  <img
                    src="assets/images/services-img3.png"
                    alt="services-img3"
                  />
                  <h3>Courses</h3>
                </div></a>
        

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section HTML End -->
    </main>

    <!-- Main Part HTML End -->


    <!-- end of base -->
    <?php
    require_once("footer.php");
    ?>
    <!-- start of base -->

    <!-- Bootstrap JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
