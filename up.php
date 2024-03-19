<?php

@include 'config.php';
session_start();

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:sign.php');
      }
   }
  
};


?>



<html>
  <head>
    <title>signup</title>
    <link rel="stylesheet" href="css/sig.css" />
    <script
      src="https://kit.fontawesome.com/7d9d5bf685.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container login-container">
        <form action="" method="post">
          <h1 style="color: #deb887">Sign Up</h1>
          <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
          <input type="text" name="name" placeholder="Enter your name" />
          <input type="email" name="email" placeholder="Enter your email" />
          <input type="password" name="password" placeholder="Enter your password" />
          <input type="password" name="cpassword" placeholder="Confirm your password" />
          <br />
          <input type="submit" name="submit" class="button">
          <div class="pass-link">
            <label style="color: white; font-size: 15px"
              ><b>already have an account?</b></label
            >
            <a href="sign.php" style="color: #deb887"><b>login now</b></a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
>



