<?php 
 include ("COMMON.php");

 //Getting the valuses from the signup page using $_POST[] and cleaning the data submitted by the user.

 $name=$_POST['name'];
 $name=mysqli_real_escape_string($con,$name);

 $name=$_POST['email'];
 $name=mysqli_real_escape_string($con,$email);

 $name=$_POST['password'];
 $name=mysqli_real_escape_string($con,$password);

 $name=$_POST['contact'];
 $name=mysqli_real_escape_string($con,$contact);

 $name=$_POST['city'];
 $name=mysqli_real_escape_string($con,$city);

 $name=$_POST['address'];
 $name=mysqli_real_escape_string($con,$address);

 $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{a-z})$/";
 $regex_num="/^[789] [0-9] {9}$/";

 $query="SELECT * FROM `users` WHERE `email`='$email'";
 $result=mysqli_query($con,$query) or
 die($mysqli_error($con));
   $num=mysqli_num_rows($result);

   if($num!=0){
       $m="<span class='red'>Email Already Exists</span>";
       header('location:SIGNUP.php?m1=' . $m);
   }
else{
    $query="INSERT INTO users(name,email,password,contact,city,address)VALUES('".$name."', '".$email."', 
    '".$password."', '".$contact."', '".$city."', '".$address."')";
    mysqli_query($con,$query) or
    die($mysqli_error($con));
          $user_id=mysqli_insert_id($con);
          $_SESSION['email']=$email;
          $_SESSION['userid']=$user_id;
          header('location:PRODUCT.php');
}
