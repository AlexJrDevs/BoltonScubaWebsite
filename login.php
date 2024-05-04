<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scuba Bolton Center - Login</title>

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
    <!-- Header Part HTML Start -->

    <!-- Navigation Section HTML Start -->

    <section id="Header">
      <div class="navigation-wrapper">
        <nav>
          <div class="navigation-container">
            <div class="logo">
              <a href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <!-- Navigation Section HTML End -->

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Login Section HTML Start -->

      <section id="Login">
        <div class="login-wrapper">
          <div class="container">
            <div class="login-form-wrapper">
              <div class="login-language-selector">
                <select>
                  <option value="Language">Language</option>
                </select>
              </div>
              <div class="login-title">
                <h3>Login Account</h3>
              </div>
              <div class="d-md-flex justify-content-between align-items-center">
                <div class="google-btn">
                  <a href="#"
                    ><i class="fa-brands fa-google"></i>Sign up with google</a
                  >
                </div>
                <div class="facebook-btn">
                  <a href="#"
                    ><i class="fa-brands fa-facebook"></i>Sign up with
                    Facebook</a
                  >
                </div>
              </div>
              <div class="or">
                <span>OR</span>
              </div>
              <div class="login-form-container">
                <form>
                  <div class="login-form">
                    <div class="login-input-field">
                      <input type="text" placeholder="Username" />
                    </div>
                    <div class="login-input-field">
                      <input type="email" placeholder="Email Address" />
                    </div>
                    <div class="login-input-field position-relative">
                      <input
                        id="passInput"
                        type="password"
                        placeholder="Password"
                      />
                      <span onclick="passFunc()" class="eye">
                        <i id="eye-hide" class="fa-solid fa-eye"></i>
                        <i
                          id="eye-show"
                          class="fa-sharp fa-solid fa-eye-slash"
                        ></i>
                      </span>
                    </div>
                    <div class="login-btn-field pt-4">
                      <input type="submit" value="Login" />
                    </div>
                    <div class="have-account">
                      <span
                        >Don’t have an account? <a href="create-account.php">Sign In</a>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Login Section HTML End -->
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
