<?php

@include "header.php";
@include 'recipentConfig.php';

if(isset($_POST['submit'])&&isset($_FILES['image'])){
   $recipent = mysqli_real_escape_string($con, $_POST['recipent']);
   $address = mysqli_real_escape_string($con, $_POST['address']);
   $bloodgrp = mysqli_real_escape_string($con, $_POST['bloodgrp']);
   $number = mysqli_real_escape_string($con, $_POST['number']);
   
   $imgName=$_FILES['image']['name'];
    $imgError=$_FILES['image']['error'];
    $imgTmp=$_FILES['image']['tmp_name'];
    $imgExt=explode(".",$imgName);
    $imgCheck=strtolower(end($imgExt));
 
    $imgextStored=array('png','jpg','jpeg');
 
    if(in_array($imgCheck,$imgextStored))
    {
     $destinationImg='upload/'.$imgName;
    move_uploaded_file($imgTmp,$destinationImg);
    }

   $select = " SELECT * FROM recipentform  ";
 
   $result = mysqli_query($con, $select);
    $insert = "INSERT INTO recipentform(recipent,  address,bloodgrp,number,image) VALUES('$recipent','$address','$bloodgrp','$number','$destinationImg')";
  mysqli_query($con, $insert);
   header('location:index.php');
      
    


}


?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
    <link rel="stylesheet" href="donorForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="conten">

    <div class="container">
      <div class="title">Recipient Registration</div>
      
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="recipent"required>
          </div>
          
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Blood Group</span>
            <select name="bloodgrp">
              <option value="A+" selected>A+</option>
              <option value="A-" >A-</option>
              <option value="B+" >B+</option>
              <option value="B-" >B-</option>
              <option value="AB+" >AB+</option>
              <option value="AB-" >AB-</option>
              <option value="O+" >O+</option>
              <option value="O-" >O-</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Mobile number</span>
            <input type="tel" placeholder="Enter your number" name="number" pattern="[9]{1}[7-8]{1}[0-9]{8}"required>
          </div>
        </div>
          
          <div class="input-box">
            <span class="details">Hospital Slip</span>
            <input type="file" name="image" value="Choose Image" required>
          </div>
          
          
        
        
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </div>

      </div>
  </div>
 </form>
   
</body>
</html>