<!-- update data dbase -->
<?php
include ('./assets/php/config.php');

if(ISSET($_POST['update'])){

	$uid= mysqli_real_escape_string($conn, $_POST['uid']);
	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$paswd= mysqli_real_escape_string($conn, $_POST['password']);
	
	$password = md5($paswd);
	
	$conn->query("UPDATE `tbl_useraccount` SET `uname` = '$uname', `paswd` = '$password'  WHERE `a_id` = '$uid'") or die(mysqli_error());
		
	header("location: database.php");
	}
?>
