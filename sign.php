<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn,$select);
   $res = mysqli_fetch_assoc($result);
   if ($result->num_rows > 0) {
    $_SESSION['email']=$res['email'];
    $_SESSION['password'] = $res['password'];
    $_SESSION['user_name'] = $res['name'];
    header('Location:main.php'); // Redirect to the dashboard page
    } else{
      $error[] = 'incorrect email or password!';
   }

};
?>


 <html>
  <head>
    <title>signin</title>
    <link rel="stylesheet" href="css/sign.css" />
    <script
      src="https://kit.fontawesome.com/7d9d5bf685.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container login-container">
        <form action="" method="post">
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
          <h1 style="color: #deb887">Login here</h1>
          <input type="email" name="email" placeholder="email" />
          <input type="password" name="password" placeholder="Password" />
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox" />
              <label style="color: black; font-size: 15px"
                ><b>Remember me</b></label
              >
            </div>
            <div class="pass-link">
              <a href="#"><b>Forgot password?</b></a>
            </div>
          </div>
          <input type="submit"  name="submit" class="button">
          <span style="color: black; font-size: 15px"
            ><b>or use your account</b></span
          >
          <div class="social-container">
            <a href="#" class="social"
              ><i class="fa-brands fa-facebook" style="font-size: 25px; color: white;"></i
            ></a>
            <a href="#" class="social"
              ><i class="fa-brands fa-google" style="font-size: 25px"></i
            ></a>
            <a href="#" class="social"
              ><i class="fa-brands fa-linkedin-in" style="font-size: 25px"></i
            ></a>
          </div>
        </form>
      </div>

     

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <h1 class="title">
              Start your <br />
              journy now
            </h1>
            <p>
              if you don't have an account yet, join us and start your journey.
            </p>
            <a class="ghost" id="register" class="button" href="up.php">
              Sign Up
              <i class="lni lni-arrow-right register"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

