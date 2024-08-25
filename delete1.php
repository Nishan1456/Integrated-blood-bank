<?php
 @include 'eventConfig.php';

 if(isset($_GET['deleteid']))
 {
    $id=$_GET['deleteid'];
    $sql="delete from `addevent` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:adminManageEvent.php');
    }
 }
?>