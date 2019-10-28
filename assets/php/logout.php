<!-- logout -->
<?php
include './assets/php/config.php';
session_start();
if(session_destroy()){
    header("location:index.php");
}
mysqli_close($conn);
?>