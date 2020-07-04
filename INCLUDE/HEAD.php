<?php
include("COMMON.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>header</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
             footer{
                 position:absolute;

             }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span  class="icon-bar"></span>
                 <span  class="icon-bar"></span>
				<span  class="icon-bar"></span>
			</button>
                <a href="INDEX.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div>
		<div class="collapse navbar-collapse" id="myNavbar">
        <?php 
         if(isset($_SESSION["email"]))
        ?>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['email'])){
                            ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        ?>
                        <?php
                        }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                        <?php
                        }
                        ?>
                     </ul>
                </div>
            </div>
          </nav>
    </body>
</html>