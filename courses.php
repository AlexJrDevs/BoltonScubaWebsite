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
    <title>Scuba Bolton Center - Courses</title>

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

    <section id="Courses-hero">
      <div class="courses-hero-wrapper">
        <div class="container">
          <div class="courses-hero-container">
            <div class="courses-hero-content">
              <h6>MEMBER COURSES</h6>
              <h2>COURSES WE OFFER TO OUR MEMBERS</h2>
              <p>
                We know how much scuba means to you, so we provide spectacular
                trips and offers to our members!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hero Section HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Couses Features Section HTML Start -->

      <section id="Courses-features">
        <div class="courses-features-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="features-card">
                  <div class="features-card-icon">
                    <img
                      src="assets/images/cancel-icon.svg"
                      alt="cancel-icon"
                    />
                  </div>
                  <div class="features-card-content">
                    <h6>Cancel Anytime</h6>
                    <p>
                      We protect our members decisions and offer them a cancel
                      anytime, as you shouldn’t pay if you no longer want to.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 pt-5 pt-md-0">
                <div class="features-card">
                  <div class="features-card-icon">
                    <img
                      src="assets/images/certified-icon.svg"
                      alt="certified-icon"
                    />
                  </div>
                  <div class="features-card-content">
                    <h6>Certified Teacher</h6>
                    <p>
                      We provide the most qualified teachers to train and dive
                      with you, no ocean is too big to dive in.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 pt-5 pt-lg-0">
                <div class="features-card">
                  <div class="features-card-icon">
                    <img
                      src="assets/images/nation-icon.svg"
                      alt="nation-icon"
                    />
                  </div>
                  <div class="features-card-content">
                    <h6>Nation Wide</h6>
                    <p>
                      We provide a nation wide events so no matter where you
                      live we have events and teachers at your disposal.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Couses Features Section HTML End -->

      <!-- Courses Level Section HTML Start -->

      <section id="Courses-level">
        <div class="courses-level-wrapper">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="courses-level-img">
                  <img
                    src="assets/images/course-level-img.png"
                    alt="course-level-img"
                  />
                </div>
              </div>
              <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="courses-level-content">
                  <h3>Beginner Courses</h3>
                  <p>
                    We accept in our courses any one at any level that they
                    might be currently at. We will help you develop you skills
                    to become a better diver.
                  </p>
                  <div class="learn-more-btn">
                    <a href="#"
                      >Learn More <i class="fa-solid fa-chevron-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Courses Level Section HTML End -->

      <!-- Current Course Section HTML Start -->

      <section id="Current-courses">
        <div class="current-courses-wrapper">
          <div class="container">
            <div class="current-courses-top">
              <span>Practice Advice</span>
              <h3>ALL OF OUR CURRENT COURSES</h3>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="course-card">
                  <div class="course-card-img position-relative">
                    <img src="assets/images/course-img.png" alt="course-img" />
                    <div class="sale-tag">
                      <span>Sale</span>
                    </div>
                  </div>
                  <div class="course-card-content">
                    <span>Beginner Level</span>
                    <h6>Beginner Level</h6>
                    <p>
                      We will help you develop your diving skills and become
                      comfortable with diving.
                    </p>
                    <div class="course-price">
                      <p><span>£59.99</span> £39.99 / Month</p>
                    </div>
                    <div class="course-info">
                      <span
                        ><img
                          src="assets/images/time-icon.svg"
                          alt="time-icon"
                        />∞hr...</span
                      >
                      <span
                        ><img
                          src="assets/images/lessons-icon.svg"
                          alt="lessons-icon"
                        />∞Lessons</span
                      >
                      <span
                        ><img
                          src="assets/images/progress-icon.svg"
                          alt="progress-icon"
                        />Progress</span
                      >
                    </div>
                    <div class="buy-now-btn">
                      <a href="#"
                        >Buy Now <i class="fa-solid fa-chevron-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="course-card">
                  <div class="course-card-img position-relative">
                    <img src="assets/images/course-img.png" alt="course-img" />
                    <div class="sale-tag">
                      <span>Sale</span>
                    </div>
                  </div>
                  <div class="course-card-content">
                    <span>Intermediate Level</span>
                    <h6>Intermediate Level</h6>
                    <p>
                      This is focused more on complex and difficult diving, only
                      experience divers who want to be challenged.
                    </p>
                    <div class="course-price">
                      <p><span>£79.99</span> £59.99 / Month</p>
                    </div>
                    <div class="course-info">
                      <span
                        ><img
                          src="assets/images/time-icon.svg"
                          alt="time-icon"
                        />∞hr...</span
                      >
                      <span
                        ><img
                          src="assets/images/lessons-icon.svg"
                          alt="lessons-icon"
                        />∞Lessons</span
                      >
                      <span
                        ><img
                          src="assets/images/progress-icon.svg"
                          alt="progress-icon"
                        />Progress</span
                      >
                    </div>
                    <div class="buy-now-btn">
                      <a href="#"
                        >Buy Now <i class="fa-solid fa-chevron-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="course-login-btn">
              <a href="login.php">Logn in</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Current Course Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

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
