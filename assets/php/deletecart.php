<!-- delete cart on tbl_cart -->
<?php
include('config.php');

$id = filter_input(INPUT_POST, 'id');
    
$query = "DELETE FROM `tbl_cart` WHERE cart_id = '$id'";
        mysqli_query($conn, $query) or die(mysqli_error());
?>