<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
  header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>India</title>
    <link rel="stylesheet" href="css/file.css" />
  </head>
  <body>
    <section>
      <div class="space">
        <div class="toolbar text-right">
          <ul>
            <li>
              <a href="main.php">Home</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li>
              <a href="places.php">Places</a>
            </li>
            <li>
              <a href="hotels.html">Hotels</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="b">
        <div class="space">
          <font face="Forte" size="50" color="white">Explore</font><br />
          <font face="Century" size="50" color="white">India</font><br /><br />
          <font size="5" color="white">Find great places to stay,eat or visit</font><br/><br />
          <font size="5" color="white">welcome <span><?php echo $_SESSION['user_name'] ?></span></font><br/><br />
          <br />
          <font size="5" color="white">Or browse</font><br /><br />
          <ul>
            <li>
              <a href="#">Hotels</a>
            </li>
            <li>
              <a href="#">Places</a>
            </li>
          </ul>
          <br /><br />
          <div class="boxes text-center">
            <div class="box">Best<br />packages</div>
            <div class="box">Best places<br />to travell</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
