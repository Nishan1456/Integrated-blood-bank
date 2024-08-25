<?php

@include 'eventConfig.php';


session_start();
?>

<!Doctype HTML>
	<html>
	<head>
	<link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
		<link rel="stylesheet" href="adminManage.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	</head>


	<body>
		
		<div id="mySidenav" class="sidenav">
		<p class="logo"><span><img src="blood.png"></span>BMS</p>
		<a href="adminIndex.php" class=" icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="adminManage.php"class="active icon-a"><i class="fa fa-users icons"></i>   Manage Donor</a>
	  <a href="adminManageEvent.php"class="icon-a"><i class="fa fa-calendar-days icons"></i>  Manage Event</a>
	  <a href="adminManageRecipent.php"class="icon-a"><i class="fa fa-users icons"></i>   Manage Recipient</a>
	  
	  <a href="adminViewblood.php"class=" icon-a"><i class="fa-solid fa-droplet icons"></i> View Blood</a>
	  <a href="adminFeedback.php"class=" icon-a"><i class="fa fa-tasks icons"></i>  Queries</a>
	  <a href="adminAddevent.php"class=" icon-a"><i class="fa-regular fa-calendar-plus icons"></i>   Add Event</a>
	  <a href="logout.php"class="icon-a"><i class="fa fa-sign-out icons"></i>   Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav"  >☰ Manage Donor</span>
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  >☰ Manage Donor</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">

		<img src="admin.png" class="pro-img" />
		<p><?php echo strtoupper($_SESSION['user_name']) ?></p>
		</div>
	</div>
</div>
<div class="content">
     <div class="comment">

     

<table>



<tr>

<th>Citizenship ID</th>

<th>Donor Name</th>

<th>Age</th>

<th>Address</th>

<th>Blood Group</th>
<th>Mobile NO.</th>
<th>Gender</th>
<th >Event Location</th>



<th colspan="2">Operation</th>

</tr>

<?php
            $select = " SELECT * FROM donorform" ;

            $result = mysqli_query($conn, $select);
            
            if(mysqli_num_rows($result) > 0){
            ?>
            <?php while( $row = mysqli_fetch_assoc($result)){
             ?>
 <tr>

<td><?php echo $row['citizenId']?></td>

<td><?php echo $row['donor']?> </td>

<td><?php echo $row['age']?></td>

<td><?php echo $row['address']?></td>
<td><?php echo $row['bloodgrp']?></td>

<td><?php echo $row['number']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['location']?></td>

<td><button class="btn"><a href="delete.php?deleteid='<?php echo $row['citizenId']?>'">Delete</a></button></td>

</tr>
<?php }?>
<?php }?>

</table>
</div>
     </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

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