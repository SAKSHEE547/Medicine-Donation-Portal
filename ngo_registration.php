<?php

  if(isset($_POST['ngo_register']))
  {
    $ngo_name = $_POST['ngo_name'];
    $ngo_id = $_POST['ngo_id'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    if($ngo_id!='' && $ngo_name != '' && $email != '' && $password != '' && $address != '' && $city !='')
    {
      $sql = "INSERT INTO ngos(ngo_name, email,address,city,password)VALUES('$ngo_name','$email','$address','$city','$password')";
      include_once('db.php');

      $qry = mysqli_query($conn, $sql) or die("Data insert error");

      if($qry)
      {
        echo "$ngo_name registered successfully";
        header("Location: ngo_display.php");
      }
      else{
        echo "please fill the fields";
      }
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
  <body style="background-color: #f5f4ef">
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">NGO Rgistration</h2>
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
                    name="ngo_name"
                    class="form-control rounded-left"
                    placeholder="NGO Name"
                    required
                  />
                </div>
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-user"></span>
                  </div>
                  <input
                    type="text"
                    name="ngo_id"
                    class="form-control rounded-left"
                    placeholder="NGO Id"
                   
                  />
                </div>
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-envelope"></span>
                  </div>
                  <input
                    type="email"
                    name="email"
                    class="form-control rounded-left"
                    placeholder="Email"
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
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-address-card"></span>
                  </div>
                  <input
                    type="text"
                    name="address"
                    class="form-control rounded-left"
                    placeholder="Address"
                    required
                  />
                </div>
                <div class="form-group">
                  <div
                    class="icon d-flex align-items-center justify-content-center"
                  >
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <input
                    type="text"
                    name="city"
                    class="form-control rounded-left"
                    placeholder="City"
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
                      name="ngo_register"
                      class="btn btn-primary rounded submit"
                    >
                      Sign Up
                    </button>
                  </div>
                </div>
                <div class="form-group mt-4">
                  <div class="w-100 text-center">
                    <p class="mb-1">
                      Already have an account? <a href="loggin.php">Log In</a>
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