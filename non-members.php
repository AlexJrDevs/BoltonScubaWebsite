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
        <title>Club Membership Events / Offers</title>

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

    </body>

        <!-- Hero Section HTML Start -->
        <section id ="Non-Members-Hero">
            <div class="hero-non-members-wrapper">
                <div class="container">
                    <div class="row" dir="rtl">
                        <div class="col-lg-8">
                            <div class="hero-non-members-content">
                                <h2>
                                    Club Membership 
                                    Events / Offers
                                </h2>

                                <p>
                                    We take care and give our members great events 
                                    and offers to experience a life changing experiences. We only 
                                    offer the best of the best with maxium safety!
                                </p>

                                <div class="hero-buttons">
                                    <a href="create-account.php" class="sign-up-btn">Join Us</a>
                                    <a href="#" class="browse-btn">Browse</a>  
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section HTML End -->
      
        <!-- Main Part HTML Star -->
        <main>
            <section id="events-search">
                <div>
                    <div class="container">
                        <div class="row events-search-wrapper">
                            <div class="col-md-6 col-lg-4">
                                <div class="search-event">
                                    <h6> Search Event </h6>
                                    <input type="text" placeholder="Sight Diving" />
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="place-event">
                                    <h6> Place </h6>
                                    <input type="text" placeholder="England" />
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="time-event">
                                    <h6> Time </h6>
                                    <input type="date" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
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