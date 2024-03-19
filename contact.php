<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);
   $insert = "INSERT INTO contact(name, email,message) VALUES('$name','$email','$message')";
   mysqli_query($conn, $insert);
   header('Location:contact.php');
    
};
?>
<html>
  <head>
    <title>contact</title>
    <link rel="stylesheet" href="css/contact.css" />
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
      <div class="same1">
        <div class="same text-center pad">
          <div class="text">LETS KEEP IN TOUCH</div>
          <div class="text1">
            <b> CONTACT US</b>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="container1">
          <div class="size"><b>OUR CONTACTS</b></div>
          <br /><b>CALL US</b> <br />123-456-789<br /><br />
          <b>LOCATION</b><br />
          9th Floor, 34/38,Harileela House, Fort, Maharashtra<br /><br />
          <b>EMAIL</b><br />
          hamsa22@gmail.com
        </div>
        <div class="form-container login-container">
          <form method="post">
            <div class="size"><b>CONTACT US</b></div>
            <br />
            <input
              type="text"
              name="name"
              placeholder="Enter your Name"
              class="type"
            /><br /><br />
            <input
              type="email"
              name="email"
              placeholder="Enter a valid email"
              class="type"
            /><br /><br />
            <textarea name="message" rows="4" cols="30">
Enter your message...</textarea
            ><br /><br />
            <input type="submit" name="submit" class="button" />
          </form>
        </div>
      </div>
    </section>
  </body>
</html>