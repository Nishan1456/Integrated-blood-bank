<?php

@include 'eventConfig.php';


session_start();
if(isset($_POST['submit'])&&isset($_FILES['image'])){

    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $organizer = mysqli_real_escape_string($conn, $_POST['organizer']);
    
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
 
    $select = " SELECT * FROM addevent WHERE location= '$location' && date = '$date' ";
  
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'Event already exist!';
 
    }else{
     
          $insert = "INSERT INTO addevent(location, date, time, organizer,image) VALUES('$location','$date','$time','$organizer','$destinationImg')";
          mysqli_query($conn, $insert);
          header('location:adminIndex.php');
     
 
 }
 }
 
 
 ?>
 
?>
<!Doctype HTML>
	<html>
	<head>
		
		<link rel="stylesheet" href="adminAddevent.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	</head>


	<body>
		
		<div id="mySidenav" class="sidenav">
		<p class="logo"><span><img src="blood.png"></span>BMS</p>
		<a href="adminIndex.php" class=" icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="adminManage.php"class="icon-a"><i class="fa fa-users icons"></i>   Manage Donor</a>
	  <a href="adminManageEvent.php"class="icon-a"><i class="fa fa-calendar-days icons"></i>   Manage Event</a>
    <a href="adminManageRecipent.php"class="icon-a"><i class="fa fa-users icons"></i>   Manage Recipient</a>
	  <a href="adminViewblood.php"class=" icon-a"><i class="fa-solid fa-droplet icons"></i> View Blood</a>
	  <a href="adminFeedback.php"class=" icon-a"><i class="fa fa-tasks icons"></i>  Queries</a>
	  <a href="adminAddevent.php"class="active icon-a"><i class="fa-regular fa-calendar-plus icons"></i>  Add Event</a>
	  <a href="logout.php"class="icon-a"><i class="fa fa-sign-out icons"></i>   Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav"  >☰ Add Event</span>
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  >☰ Add Event</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">

		<img src="admin.png" class="pro-img" />
		<p><?php echo strtoupper($_SESSION['user_name']) ?></p>
		</div>
	</div>
</div>
<div class="content">
<div class="container">
    <div class="title">Add Event</div>
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
            <span class="details">Enter Location</span>
            <input type="text" name="location" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Date</span>
            <input type="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Enter time</span>
            <input type="text" name="time" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Organizer</span>
            <input type="text" name="organizer" required>
          </div>
          <div class="inputBox">
          <span class="details">Choose Image</span><br>
                <input type="file" name="image" value="Choose Image" required>
            </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Add Event">
        </div>
      </form>
    </div>
  </div>

  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

    

	</script>
    

	</body>


	</html>