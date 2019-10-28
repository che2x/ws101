<?php
 include('./assets/php/server.php'); 
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
.header {
  width: 30%; 
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 40%; margin-left: 300px; 
  padding: 20px;  font-family: 'Times New Roman', Times, serif;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
  font-family: 'Times New Roman', Times, serif;
}
.input-group label {
  display: block; font-family: 'Times New Roman', Times, serif;
  text-align: left; color: black;
  margin: 3px;
}
.input-group input {
  height: 30px; font-family: 'Times New Roman', Times, serif;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
/* .btns {
  padding: 10px; font-family: 'Times New Roman', Times, serif;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
} */
.error {
  width: 50%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
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
  <div id="container" style="margin-top:30px;">   
 <!-- reg form -->
 <div id="header"></div>
        <h1>REGISTRATION</h1>
  <form method="post" action="reg.php" style="margin-top: 40px;">
  	<?php include('./assets/php/error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
      <button type="submit" class="btn waves-effect waves-light light-blue" name="reg_user">Register</button>
      <a href="login.php" class="btn btn-primary">Cancel</a>
  	</div>
    
  	<p4>
  		Already a member? <a href="login.php">Sign in</a>
  	</p4>
  </form>
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