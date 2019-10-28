<!-- insert into tbl_cart database -->
<?php
include('config.php');

$subids = filter_input(INPUT_POST, 'subid');
    
$query = "INSERT INTO tbl_cart (shop_id) 
                  VALUES('$subids')";
        mysqli_query($conn, $query) or die(mysqli_error());
?>