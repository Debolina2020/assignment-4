<?php
//This page updates the user password
include("COMMON.php");
if(!isset($_SESSION['email'])){
    header('locaton:INDEXX.php');
}
$old_pass=$_POST['old_password'];
$old_pass=mysqli_real_escape_string($con,$old_pass);

$new_pass=$_POST['new_password'];
$new_pass=mysqli_real_escape_string($con,$new_pass);

$rep_pass=$_POST['rep_password'];
$rep_pass=mysqli_real_escape_string($con,$rep_pass);
$query="SELECT * FROM users WHERE `password`='$password' `email`=' " .$_SESSION['email']. "' ";
$result=mysqli_query($con,$query)or
die($mysqli_error($con));
$row=mysqli_fetch_array($result);

$orig_pass=$row['password'];

if($new_pass!=$rep_pass){
    header('location:SETTINGS.php?error=The two passwords do not match.');
}
else{
    if($old_pass==$orig_pass){
        $query="UPDATE `users ` SET `password`='$password'WHERE `email`='" .$_SESSION['email']. "'";
        mysqli_query($con,$query)or
        die($mysqli_error($con));
        header('location:SETTINGS.php?error=Password Updated Successfully');
    }else
    header('location:SETTINGS.php?error=Wrong Old Password.');
}
?>