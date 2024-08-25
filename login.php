<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   //$username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  


   $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['image']=$row['image'];
      $_SESSION['user_name'] = $row['username'];
      header('location:adminindex.php');
      }
      else{
      $error[] = 'incorrect email or password!';
}
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
</head>
<body>
<body>
    <!-- <div class="box1"> -->

        <span class="pic"><img src="signup.png" alt="login"></span>
    <!-- </div> -->
    <div class="box">
        <span class="borderLine"></span>
        <form action="" method="post">
            <h2>Admin Login</h2>
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <div class="inputBox">
                <input type="email" id="email" name="email" required>
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" id="password" name="password" required>
                <span>Password</span>
                <i></i>
            </div>
            
            <div class="inputBox">

                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>