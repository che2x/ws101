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
<title> Cart </title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
     .t{
      font-family: 'Times New Roman', Times, serif;
  border-collapse: collapse; margin-top: 30px;
  width: 700px; 
     }
.t td, .t th {
  border: 1px solid #ddd; 
  padding: 8px; background-color: coral;
}
.t tr:nth-child(even){background-color: #f2f2f2;}
.t tr:hover {background-color: darkturquoise;}
.t th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.col{
  margin-left: 100px;
}
#btnEmpty{
  font-family: 'Times New Roman', Times, serif; margin-left: 60px; 
}
#ar{
  margin-top: 20px; margin-left: 250px;
}
#emp{
  float:right; font-family: 'Times New Roman', Times, serif; margin-right: 200px;
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
                        <li><a class="waves-effect" href="about.php" id="active">Profile</a></li>
                        <li><a class="waves-effect" href="shop.php">Shop</a></li>
                        <li><a class="waves-effect" href="blog.php">Blog</a></li>
                        <li><a class="waves-effect" href="database.php">View DB Record</a></li>
                        <li><a class="waves-effect" href="index.php?logout='1'">Logout</a></li>
                           
                        </div>
                      </ul></div>
                      <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                      <a href="shop.php" type='btn' name='' class='waves-effect waves-light btn' id="ar">
              <i class="material-icons">arrow_back</i></a>                      
                     <div id="container"> 
                                      
                             <div id="header"></div>
                <i id= "AB" style="margin-left:300px;">Shopping Cart</i>
                <!-- clear all in the cart -->
                <form action="./assets/php/server.php" method="post" style="border:none;">
                <button type="submit" id="emp" name="emptycart" class="btn waves-effect waves-white red white-text">Empty Cart</button>
                </form>
                <br>
                <!-- display cart table -->
                <center class="t">
    <table class="col" class="responsive-table" class="highlight">
    <thead>
    <tr>      
    <th>Product Name</th>
    <th>Unit Price</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Remove</th>
    </tr>        
    </thead>
    <tbody>
      <!-- table content -->
         <?php 
         include('assets/php/config.php');
      $result = mysqli_query($conn,"SELECT * FROM tbl_cart inner join tbl_shop on tbl_shop.shop_id = tbl_cart.shop_id");
      while($row = mysqli_fetch_array($result)){ 
        echo" 
        <tr>     
        <td class='t'> ".$row['des']."</td>
        <td class='t'> ".$row['price']."</td>
        <td class='t'><input type='number' class='form control sample' id='quan".$row['cart_id']."' onkeyup='num(this,".$row['price'].",".$row['cart_id'].")'></td>
        <td class='t'><label style='color:black;font-size: 15px;' id='tprice".$row['cart_id']."'>".$row['price']."</label></td>
        <td>
        <button onclick='dlt(".$row['cart_id'].")' class='btn-floating btn-medium waves-effect waves-light red btn' type='button' ><i class='material-icons'>delete</i></button></td>
        
        ";     
}
     ?> 
         </tr>
         </tbody>
      </table>  
<!-- total price -->
                        <script src="./assets/js/materialize-css.min.js"></script>
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script>
          function num(e, price,id){
            var sum = parseInt(price) * parseInt(e.value);
            var toprice = "#tprice" + id;
            $(toprice).text(sum);
            if (e.value == '') {
              $(toprice).text(price);
            }
          }
          // delete cart
          function dlt(id){
            $.post('./assets/php/deletecart.php', {id : id, 
		          }, function(){
                        M.toast({html: 'Successfully delete'})
                        location.replace('cart.php');
	});
          }
        </script>
 <!-- script function for sidenavbar -->
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