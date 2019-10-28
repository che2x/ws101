
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
        <title>Shop</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/materializecss.min.css">
            <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
             <link rel="stylesheet" href="./assets/css/material-font.css">
             <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
body{
  background-repeat: no-repeat;
  background-size: 1700px;  
  background-position: top;
  width: 1050px; height: 800px; 
 
}
.res{
 margin-left: 80px; margin-bottom: 120px; width: 110px; height: 100px;
background-color: white; margin-top: 35px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 float: left;
}
#IC{
        color:white; text-align: center;
}
#cont{
        margin-top:130px;  margin-left: 100px;
}
#cont img{
        background-color: white;
}
</style>
        </head>
        <body style="background-image: url(./assets/img/cs.jpg);">
        <?php 
                include('./assets/php/config.php');
                $query1=mysqli_query($conn,"SELECT * from `tbl_cart` ") or die(mysqli_error());
                $numrow = mysqli_num_rows($query1);
                ?>
               <a href="cart.php" class="btn btn-success btn-floating pulse btn-large" style="float:right; margin-top:50px;"><i class="material-icons">add_shopping_cart</i><span class="" style="position:absolute; top:-20px; color:red; font-weight:bold; font-size:20px;"><?php echo $numrow;?></span></a>
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
                                <li><a class="waves-effect" href="shop.php" id="active">Shop</a></li>
                                <li><a class="waves-effect" href="blog.php" >Blog</a></li>
                                <li><a class="waves-effect" href="database.php">View DB Record</a></li>
                                <li><a class="waves-effect" href="index.php?logout='1'">Logout</a></li>
                                
                            </div>
                              </ul></div>
                              
                              <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                             <div id="container"> 
                            
                <i id= "AB" style="margin-left:400px;">Shop Now</i>
                <p id="Ite">Items:</p>
                
                <?php 
                include('./assets/php/config.php');
                $query=mysqli_query($conn,"SELECT * from `tbl_shop` ") or die(mysqli_error());
                while($row=mysqli_fetch_array($query)){
                ?>
               
                <div class="res">
                        <a href="<?php echo $row['img'];?>">
                        <img src="<?php echo $row['img'];?>">
                        </a>
                        <div class="desc">PN: <?php echo $row['des'];?><br>Price:<?php echo $row['price'];?></div>
                        <button type="button" onclick="addcart(<?php echo $row['shop_id']?>)" name="add_cart" class="waves-effect waves-light btn purple accent-2"><i class="material-icons">add_shopping_cart</i></button>
                        
                        <button class='btn lime'><i class="material-icons">money</i></button>
                      
                </div>
                 
                <?php }?>
<!-- add button -->
                <div class="res waves-effect waves-light btn modal-trigger blue" href="#modal1" style="height:60px;border-radius: 20px">
                <i class="material-icons" style="font-size:60px; margin-top:10px;">add_circle_outline</i>
                </div> 
             <!-- Modal Structure -->
                <div id="modal1" class="modal">
                <div class="modal-content">
                <h4 class="" style="color:#424242;">Add new product</h4>
                <form method="POST" action="./assets/php/server.php" enctype="multipart/form-data">
                        <div class="file-field input-field">
                                <div class="btn">
                                <span>File</span>
                                <input type="file" name="upload">
                                </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                                </div>
                        </div>
                        
                        <div class="row">
                        <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="des"></textarea>
                                <label for="textarea1">Descriptions</label>
                        </div>
                        </div>
                        <div class="row">
                                <div class="input-field col s12">
                                <input id="price" type="number" class="validate" name="price">
                                <label for="price">Price</label>
                                </div>
                        </div>
                
                </div>
               

                <div class="modal-footer">
                <button type="submit" name="submit_product" class="btn btn-success">Submit</button>
                </form>
                <a class="modal-close btn btn-primary">Close</a>
                </div>
                </div>
                <!-- <div class="clearfix"></div> -->
               
                <div id="cont">
                        
                                <i>For your Order Contact me through:<br>Mobile Number: 09051557240<br> 
                                        <div class="clear"></div>      
                                <img src="./assets/img/fb_icon.png">
                                <a href="">Cherehil Badilla Galamiton</a></i>
                        </div>

        </div>
        <script src="./assets/js/materialize-css.min.js"></script>
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
<script>
M.AutoInit();

function addcart(subid) {
        $.post('assets/php/addcart.php', {subid : subid, 
		}, function(){
                        M.toast({html: 'Adding to cart'})
                        location.replace('shop.php');
	});
}

</script>

</body>
</html>