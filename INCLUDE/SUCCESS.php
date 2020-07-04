<?php
include ("COMMON.php");
if(!isset($_SESSION['email'])){
    header('location:INDEXX.php');
}
$user_id=$_SESSION['user_id'];

$query="UPDATE users_items SET status='Confirmed' WHERE user_id=".$user_id." and status='Added to cart' ";
mysqli_query($con,$query)or
die($mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success </title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
            .alert-success{
                height:150px;
                margin-top: 100px;
            }
            
             footer{
                 position:absolute;

             }
        </style>
    </head>
    <body>
       
          <br><br><br><br>
          <div class=" container text-center">
            <div class="alert alert-success" role="alert">
                <br> <br> 
               <h4> Success message: Your order is confirmed. Thank you for shopping with us. 
               <a href="PRODUCT.php"class="alert-link">Click here</a> to purchase any other item.</h4>
              </div>
      </div>
   </body>
</html>
