<?php 
include('./assets/php/server.php');
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
       #s{
         color: black; font-size: 18px;
     }
     </style>
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
    <li><a class="waves-effect" href="index.php">Home</a></li>
    <li><a class="waves-effect" href="about.php">Profile</a></li>
    <li><a class="waves-effect" href="shop.php">Shop</a></li>
    <li><a class="waves-effect" href="blog.php">Blog</a></li>
    <li><a class="waves-effect" href="database.php">View DB Record</a></li>
      <li id="dropdown"><a class="waves-effect" id="dropbtn" href="login.php"><b>Log In</b>&nbsp;
        </a>
  <div id="dropdown-content">
    <a href="login.php">Sign In</a>
    <a href="reg.php">Sign Up</a></li>
</div>
  </ul></div>
    <div id="container">   
 <div id="header"></div>
        <h1>LOGIN PAGE</h1>
        <!-- login form -->
<form method="post" style="background-color: aqua; width: 550px; margin-left: 200px; margin-top: 50px;" action="login.php"> 
<?php include('./assets/php/error.php'); ?>
<div class="imgcontainer">
          <img src="./assets/img/img_avatar2.png" alt="Avatar" class="avatar">
      </div>
      <div class="container">
      <div class="input-field col s6">       
      <label><b>Username</b></label>
              <input type="text" name="username" required>
            </div>
            <div class="input-field col s6">
                <label><b>Password</b></label>
                <input type="Password" name="password" required>
              </div>
         <button type="submit" name="login_user" class="btn btn-success">Login</button>
          <button class="btn btn-primary">Cancel</button>
  </form>
  <br>
  <p2>
  		Not yet a member? <a href="reg.php">Register</a>
  	</p2><br>
   <?php
   include('./assets/php/config.php');
   if($conn->connect_error){
    die("Connection failed, due to: ".$conn->connect_error);
}else{
    echo "Connected to the Database!";
}
   ?>
   
        <!-- script function for sidenavbar --> 
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