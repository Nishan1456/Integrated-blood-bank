<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Roboto Slab", serif;
}
        .navbar{
width: 100%;
/* margin:  auto; */
background-color:#cc1100;
padding: 0px 35px;
display: flex;
align-items: center;
justify-content: space-between;
}
.logo
{
    width: 70px;
    height: 70px;
    cursor: pointer;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a
{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}
.navbar ul li a.active
{
    background-color: aqua;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background:#fff;
    position: absolute;
    left: 0;
    bottom: -10px;
   transition: 0.5s;
}
.navbar ul li:hover::after
{
    width: 100%;
}
li img{
    height:20px;
    width:20px;
}
.admin
{
    background-color:#65a765;
    padding:5px;
    text-align:center;
    border-radius:5px;
}
    </style>
</head>

<body>
<div class="navbar">
       <a href="index.php" ><img  src="blood.png" class="logo"></a>
        <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="recipent.php">Recipient</a></li>
            <li class="admin"><img src="admin.png" alt="a"><a href="login.php" >Admin</a></li>
        </ul>
    </div>
</body>
<script src="header.js" defer>
</script>
</html>