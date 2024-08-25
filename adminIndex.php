<?php

@include 'queryConfig.php';
@include 'eventConfig.php';
@include 'recipentConfig.php';


session_start();
?>
<!Doctype HTML>
	<html>
	<head>
	<link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
		<link rel="stylesheet" href="adminIndex.css" type="text/css"/>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	</head>


	<body>
		
		<div id="mySidenav" class="sidenav">
		<p class="logo"><span><img src="blood.png"></span>BMS</p>
		<a href="adminIndex.php" class="active  icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="adminManage.php"class="icon-a"><i class="fa fa-users icons"></i>   Manage Donor</a>
	  <a href="adminManageEvent.php"class="icon-a"><i class="fa fa-calendar-days icons"></i>  Manage Event</a>
	  <a href="adminManageRecipent.php"class="icon-a"><i class="fa fa-users icons"></i>   Manage Recipient</a> 
	  <a href="adminViewblood.php"class="icon-a"><i class="fa-solid fa-droplet icons"></i> View Blood</a>
	  <a href="adminFeedback.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Queries</a>
	  <a href="adminAddevent.php"class="icon-a"><i class="fa-regular fa-calendar-plus icons"></i>   Add Event</a>
	  <a href="logout.php"class="icon-a"><i class="fa fa-sign-out icons"></i>   Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  >☰ Dashboard</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">

		<img src="admin.png" class="pro-img" />
		<p><?php echo strtoupper($_SESSION['user_name']) ?></p>
		</div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		
		<a href="adminManage.php"><div class="col-div-3">
			<div class="box">
			<p><?php
                       
					   $select = " SELECT count(*) AS count FROM donorform";
		   
					   $result = mysqli_query($conn, $select);
					   while( $row = mysqli_fetch_assoc($result)){
						   echo $row['count'];
						}
						   ?>
					<br/><span>Blood Donor</span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div></a>
		<a href="adminManageEvent.php"><div class="col-div-3">
			<div class="box">
			<p><?php
                       
					   $select = " SELECT count(*) AS count FROM addevent";
		   
					   $result = mysqli_query($conn, $select);
					   while( $row = mysqli_fetch_assoc($result)){
						   echo $row['count'];
						}
						   ?>
					<br/><span>Events</span></p>
					<i class="fa fa-calendar-days box-icon"></i>
				
			</div>
		</div><a>
		<a href="adminManageRecipent.php"><div class="col-div-3">
			<div class="box">
			<p><?php
                       
					   $select = " SELECT count(*) AS count FROM recipentform";
		   
					   $result = mysqli_query($con, $select);
					   while( $row = mysqli_fetch_assoc($result)){
						   echo $row['count'];
						}
						   ?>
					<br/><span>Recipient</span></p>
				<i class="fa fa-user box-icon"></i>
				 
			</div>
		</div></a>
		<a href="adminFeedback.php"><div class="col-div-3">
			<div class="box">
			<p><?php
                       
					   $select = " SELECT count(*) AS count FROM queryForm";
		   
					   $result = mysqli_query($connect, $select);
					   while( $row = mysqli_fetch_assoc($result)){
						   echo $row['count'];
						}?><br/><span>Queries</span></p>
				<i class="fa fa-tasks box-icon"></i>
			</div>
		</div></a>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
				<p>No. Of Blood Packs<span>See All</span></p>
				<br/>
			
			</div>
		</div>
		</div>

		<div class="col-div-4">
			<div class="box-4">
			<div class="content-box">
				<p>Blood Donation <span>See All</span></p>

				<div class="circle-wrap">
	    <div class="circle">
	      <div class="mask full">
	        <div class="fill"></div>
	      </div>
	      <div class="mask half">
	        <div class="fill"></div>
	      </div>
	      <div class="inside-circle"> 70% </div>
	    </div>
	  </div>
			</div>
		</div>
		</div>
			
		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
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