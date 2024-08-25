<?php
    @include "header.php";
    @include "eventConfig.php";
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="event.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
</head>
<body>
  <h1>Blood Donation Events</h1>
  <div class="container">
     <div class="content">
        
        <?php
            $select = " SELECT * FROM addevent ";

            $result = mysqli_query($conn, $select);
            
            if(mysqli_num_rows($result) > 0){
            ?>
            <?php while( $row = mysqli_fetch_assoc($result)){
              
              ?>
              <div class="box" style="background-image: linear-gradient(rgba(212, 59, 59, 0.75),rgba(240, 32, 32, 0.75)),url(<?php echo ($row['image']);?>);">
              <div class="detail">
          <div class="date"><i class="fa-solid fa-calendar-days"></i> <?php echo ($row['date']);?></div>
          <div class="location"><i class="fa-solid fa-location-dot"></i> Location:-    <?php echo strtoupper($row['location']);?></div>
          <div class="orgainizer"><i class="fa-solid fa-building-ngo"></i> Organizer:-   <?php echo strtoupper($row['organizer']);?></div>
          <div class="time"><i class="fa-solid fa-clock"></i> Time:-  <?php echo strtoupper($row['time']);?></div>
          </div>  
          <div class="btn">
           <a href="donorForm.php"> <button>form fillup <i class="fa-solid fa-arrow-right"></i></button></a>
          </div> 
              </div>
              <?php }?>
        <?php }?>
     </div>
  </div>
  <script>
    console.log("HEre we come");
  </script>
  
</body>
</html>