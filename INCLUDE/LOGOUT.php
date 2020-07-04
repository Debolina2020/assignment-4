<?php
session_start();
if(isset($_SESSION['email'])){
    header('location:LOGIN.php');
}
session_destroy();
header('location:INDEXX.php');

?>