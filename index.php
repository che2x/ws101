<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");


  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<!-- sidenavbar -->
<body style="background-image: url(./assets/img/cs.jpg);">
  <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
    <li><div class="user-view">
      <div class="background">
        <div class="card-panel #e040fb purple accent-2" style="height: 200px"></div>
      </div>
      <a href="#user"><img class="circle" src="./assets/img/c.jpeg "></a>
      <a href="#name"><span class="white-text name">Cherehil B. Galamiton</span></a>
      <a href="#email"><span class="white-text email">cherehilgalamiton@gmail.com</span></a>
    </div></li>
    <div class="card-panel #18ffff cyan accent-2" style="height: 510px; ">
    <li><a class="waves-effect" href="index.php" id="active">Home</a></li>
    <li><a class="waves-effect" href="about.php">Profile</a></li>
    <li><a class="waves-effect" href="shop.php">Shop</a></li>
    <li><a class="waves-effect" href="blog.php">Blog</a></li>
    <li><a class="waves-effect" href="database.php">View DB Record</a></li>
    <li><a class="waves-effect" href="index.php?logout='1'">Logout</a></li>
      
    </div>
  </ul></div>
  <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px;"><i class="material-icons">menu</i></a> 
 <div id="container"> 
         <div id="header"></div>

        <h1>WELCOME TO MY PAGE</h1>
        <img  id="c" src="./assets/img/c.jpeg ">
        
        <b><p> Sometimes you WIN, Sometimes you LEARN.<br>
            Be STRONG, because things will get BETTER. It may be STORMY now,<br>
            but it NEVER rains FOREVER.<br>
            Push YOURSELF, because no one ELSE is <br>going to do it for YOU.
    </p></b>  
 </div>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        var elems = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(elems);
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
</body>
</html>