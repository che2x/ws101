<!-- delete user account -->
<?php
include ('./assets/php/config.php');

if(ISSET($_POST['delete'])){

	$uid= mysqli_real_escape_string($conn, $_POST['uid']);
	
	$conn->query("DELETE FROM `tbl_useraccount`  WHERE `a_id` = '$uid'") or die(mysqli_error());
		
	header("location: database.php");
	}
?>
   