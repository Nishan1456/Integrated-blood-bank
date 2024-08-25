<?php
 @include 'eventConfig.php';

 if(isset($_GET['deleteid']))
 {
    $citizenId=$_GET['deleteid'];
    $sql="delete from `donorform` WHERE citizenId=$citizenId";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:adminManage.php');
    }
 }
?>