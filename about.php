
<!DOCTYPE html>
<html>
<head>
<title> Profile </title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
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
                        <div class="card-panel #18ffff cyan accent-2" style="height: 510px">
                        <li><a class="waves-effect" href="index.php">Home</a></li>
                        <li><a class="waves-effect" href="about.php" id="active">Profile</a></li>
                        <li><a class="waves-effect" href="shop.php">Shop</a></li>
                        <li><a class="waves-effect" href="blog.php">Blog</a></li>
                        <li><a class="waves-effect" href="database.php">View DB Record</a></li>
                        <li><a class="waves-effect" href="index.php?logout='1'">Logout</a></li>
                           
                        </div>
                      </ul></div>
                      <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                    
                     <div id="container"> 
                     
                             <div id="header"></div>

            <img id="in" src="./assets/img/c.jpeg">
  <!-- profile content   -->
                <i id= "AB" style="margin-left:100px;">My Profile Information</i>
                        <p id="Info"><i>Complete Name: Cherehil B. Galamiton<br> NickName: Che<br> Age: 28 years old 
                                <br> Address: P1, Brgy23, Gingoog City <br>Course: BSIT IV <br> Gender: Female <br> Marital Status : Single
                                <br> Religion: Roman Catholic
                                <br>Favorite Color:Pink <br> Favorite Food: Chicken & Pork Adobo<br></i>
                                	
                        </p>
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