<?php
include('config.php');
// include('./assets/php/config.php');
session_start();
$errors = array(); 
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    
    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $username_check_query = "SELECT * FROM tbl_useraccount WHERE uname='$username' LIMIT 1";
    $result = mysqli_query($conn, $username_check_query);
    $username1 = mysqli_fetch_array($result);
    
    if ($username1) { // if user exists
      if ($username1['uname'] === $username) {
        array_push($errors, "Username already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
  
        $query = mysqli_query($conn,"INSERT INTO tbl_useraccount (uname,paswd,a_id) values ('$username','$password','')");
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
  }
 
// LOGIN USER

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM `tbl_useraccount` WHERE uname='$username' AND paswd='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
      // array_push($errors, "Wrong username/password combination");
      echo("<h4>"."Wrong username/password combination"."</h4>");
  	}
  }
}

// input comment server
if (isset($_POST['blog_comment'])) {
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $cmt = mysqli_real_escape_string($conn, $_POST['cmt']);
  if (empty($fname)) {
  	array_push($errors, "Fullname is required");
  }
  if (empty($cmt)) {
  	array_push($errors, "Comments is required");
  }
  if (count($errors) == 0) {
    $query = mysqli_query($conn,"INSERT INTO `tbl_cmt_blog` (fname,msg) values ('$fname','$cmt')");
    header('location: ../../blog.php');
  }
}

// add shop button

if(ISSET($_POST['submit_product'])){
  $des= mysqli_real_escape_string($conn, $_POST['des']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);

  if($_FILES['upload']['name'] != "") {
    $file = $_FILES['upload'];
    
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $name = explode('.', $file_name);
    $path = "assets/img/".$file_name;
    $path2 = "../img/".$file_name;
    $conn->query("INSERT INTO `tbl_shop` VALUES('', '$path','$des','$price')") or die(mysqli_error());
    
    move_uploaded_file($file_temp, $path2);
    echo "<script>window.location='../../shop.php'</script>";
    
  }else{
    echo "<script>alert('Required Field!')</script>";
    echo "<script>window.location='../../shop.php'</script>";
  }
}

// empty cart button
if (isset($_POST['emptycart'])) {
 
    $query = mysqli_query($conn,"DELETE FROM `tbl_cart`");
    header('location: ../../cart.php');
  
}
?>