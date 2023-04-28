<?php
session_start();
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM users WHERE email='$email' && password='$password'";
  include_once('db.php');

  $qry=mysqli_query($conn,$sql) or die("Login Problem");
  $count=mysqli_num_rows($qry);
  if($count==1)
  {
    $_SESSION['user']=$email;
    header("Location: myprofile.php");
  }
  else
  {
    echo "Please enetr correct Email/Password";
  }
  
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login 03</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/41b051ed13.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body style="background-color: #f5f4ef">
  <header>
  <div class="nav">
<h2 style='font-family: "poppins", sans-serif;font-weight:revert'>Med+</h2>
<ul id="item">
  <li><a href="./index.html">Home</a></li>
  <li><a href="./aboutus.html">About Us</a></li>
  <li><a href="loggin.php">LogIn</a></li>
  <li><a href="signup.php">SignIn</a></li>
  <div class="icon">
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-twitter-square"></i>
    <i class="fa-brands fa-youtube"></i>
  </div>
</ul>
</div>
  </header>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a
                      href="#"
                      class="social-icon d-flex align-items-center justify-content-center"
                      ><span class="fa fa-facebook"></span
                    ></a>
                    <a
                      href="#"
                      class="social-icon d-flex align-items-center justify-content-center"
                      ><span class="fa fa-twitter"></span
                    ></a>
                  </p>
                </div>
              </div>
              <form action="" method="POST" class="login-form">
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-user"></span>
                  </div>
                  <input
                    type="text"
                    name="email"
                    class="form-control rounded-left"
                    placeholder="email"
                    required
                  />
                </div>
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-lock"></span>
                  </div>
                  <input
                    type="password"
                    name="password"
                    class="form-control rounded-left"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="form-group d-flex align-items-center">
                  <div class="w-100">
                    <label class="checkbox-wrap checkbox-primary mb-0"
                      >Save Password
                      <input type="checkbox" checked />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-100 d-flex justify-content-end">
                    <button
                      type="submit"
                      name="login"
                      class="btn btn-primary rounded submit"
                    >
                      Login
                    </button>
                  </div>
                </div>
                <div class="form-group mt-4">
                  <div class="w-100 text-center">
                    <p class="mb-1">
                      Don't have an account? <a href="signup.php">Sign Up</a>
                    </p>
                    <p><a href="#">Forgot Password</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="footer.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
