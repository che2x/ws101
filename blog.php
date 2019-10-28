<!-- login first session -->
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
<html>
<head>
<title> Blog</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
       body{
  background-size: 1700px;  
  background-position: top;
 
}
     #blog{
      text-align: center; margin-left: 130px; 
     }
     #AB{
      margin-left: 300px; 
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
                        <div class="card-panel #18ffff cyan accent-2" style="height: 510px">
                        <li><a class="waves-effect" href="index.php">Home</a></li>
                        <li><a class="waves-effect" href="about.php">Profile</a></li>
                        <li><a class="waves-effect" href="shop.php">Shop</a></li>
                        <li><a class="waves-effect" href="blog.php" id="active">Blog</a></li>
                        <li><a class="waves-effect" href="database.php">View DB Record</a></li>
                        <li><a class="waves-effect" href="index.php?logout='1'">Logout</a></li>
                        
                    </div>
                      </ul></div>
                      <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                    
                     <div id="container"> 
                     
                             <div id="header"></div>
                    
                <i id= "AB">ABOUT MYSELF</i>
                <h5 class="purple  accent-4" id="blog">
                My name is Cherehil B. Galamiton, Im 28 years of old, from Purok 1 Gingoog City Mis.Or. Im studying of Bachelor of Science in Information Technology at Gingoog City College.
                My Mother Name is Corazon B. Galamiton and she had a 3 siblings, but my Father was died, 11 years ago.
                </h5>
                <!-- display comment input -->
                <?php 
                include('./assets/php/config.php');
                $query=mysqli_query($conn,"SELECT * from `tbl_cmt_blog` ") or die(mysqli_error());
                while($row=mysqli_fetch_array($query)){
                $date = date ("M-d-Y", strtotime($row['date']));
                ?>
                <div class="card col s12">
                <div class="card-content">
                <span style="font-size:30px;"><?php echo $row['fname'];?></span>
                <span style="float:right;"><?php echo $date?></span>
                <br>
                <span><?php echo $row['msg'];?></span>
                </div>
                
                </div>
                <?php }?>
<!-- comment input -->
                <form action="assets/php/server.php" method="post" class="red lighten-5">   
                <div class="row">
                        <div class="input-field col s12">
                        <input id="last_name" type="text" class="validate" name="fname" required>
                        <label for="last_name" style="color:black;">Fullname</label>
                        </div>

                        <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="cmt" required></textarea>
                        <label for="textarea1" style="color:black;">Comment</label>
                        </div>

                        <button class="btn waves-effect waves-light" style="float:right;" type="submit" name="blog_comment">Submit
                        <i class="material-icons right">send</i>
                        </button>
                </div>
                </form> 

                 <i><b id="fol">Follow me on:<br>
                 <img src="./assets/img/fb_icon.png" id="fb">
                 <a href=""  id="info">Cherehil Badilla Galamiton</a>
                 <img src="./assets/img/email_icon.png" id="email">
                 <a href="" id="infos">cherehilgalamiton@gmail.com</a>
                </i></b>     
        </div>
</div>
<!-- script for sidenavbar -->
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