<?php
@include 'header.php';
@include 'eventConfig.php';
if(isset($_POST['submit'])){
  $citizenId = mysqli_real_escape_string($conn, $_POST['citizenId']);
   $donor = mysqli_real_escape_string($conn, $_POST['donor']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $bloodgrp = mysqli_real_escape_string($conn, $_POST['bloodgrp']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $location = mysqli_real_escape_string($conn, $_POST['location']);
   

   $select = " SELECT * FROM donorform WHERE donor = '$donor' && citizenId= '$citizenId' ";
 
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Already filled!';

   }else{
    
      
         $insert = "INSERT INTO donorform(citizenId,donor, age, address,bloodgrp,number,gender,location) VALUES('$citizenId','$donor','$age','$address','$bloodgrp','$number','$gender','$location')";
         mysqli_query($conn, $insert);
         header('location:event.php');
      }
    


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
      <div class="title">Donor Registration</div>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
          }
      }
      ?>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="donor"required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" placeholder="Enter your age" name="age" min=18 max=70 required>
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
          <div class="input-box">
            <span class="details">Citizenship ID no.</span>
            <input type="tel" placeholder="Enter your number" name="citizenId" pattern="[0-9]{14}"required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <select name="gender">
              <option value="Male" selected>Male</option>
              <option value="Female" >Female</option>
              <option value="other" >Other</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Event location</span>
            <select name="location">
              <?php
            $select = " SELECT * FROM addevent ";
            
            $result = mysqli_query($conn, $select);
            
            if(mysqli_num_rows($result) > 0){
              ?>
            <?php while( $row = mysqli_fetch_assoc($result)){
              
              ?>
                
                <option value="<?php  echo($row['location']) ?>" ><?php  echo($row['location'])?></option>
                <?php }?>
                <?php }?>
              </select>
            </div>
          
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>