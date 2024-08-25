<?php

@include 'queryConfig.php';
if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($connect, $_POST['username']);
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $msg=mysqli_real_escape_string($connect, $_POST['message']);

   
         $insert = "INSERT INTO queryForm(username, email, message) VALUES('$username','$email','$msg')";
         mysqli_query($connect, $insert);
         header('location:index.php');
      }
    



?>
<?php
    @include "header.php";
    ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
  <title>Hamro Blood Bank</title>
    <link rel="stylesheet" href="contactus.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

 <div class="box">
  <div class="container">
  
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Sitapaila,Kathmandu</div>
          <div class="text-two">Nepal</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+977 9898935647</div>
          <div class="text-two">+977 9634345678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">blooddonor12@gmail.com</div>
          <div class="text-two">bloodyhell33@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any types of queries, you can send message from here.</p>
      <form action=""  method="post" enctype="multipart/form-data">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="username" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box message-box">
          <textarea name="message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </div>
</body>
</html>