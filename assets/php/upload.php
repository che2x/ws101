<!-- upload photo to insert shop -->
<?php
	require_once './assets/php/config.php';
	
	if(ISSET($_POST['submit_product'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
			
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
			
			$conn->query("INSERT INTO `tbl_shop` VALUES('', '$path','','')") or die(mysqli_error());
			
			move_uploaded_file($file_temp, $path);
			echo "<script>window.location='shop.php'</script>";
			
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='.../index.php'</script>";
		}
	}
?>