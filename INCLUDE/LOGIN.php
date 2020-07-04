<?php 
  include ("COMMON.php");

  if(isset($_SESSION['email'])){
    header('location:PRODUCT.php');
  }
  ?>
<!DOCTYPE html>
<html>
<head><title> Login</title>
<link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
          .row{
              
           margin-left:320px;
           width:1200px;
          }
        .panel{
            margin-top:75px;
            margin-left:320px;
            width:500px;
        }
        .footer{
            position:absolute;
        }
       </style>
</head>
<body>
<?php  include ("HEAD.php");?>
 
 <br><br> <br><br>
 <div class="container">
            <div class="row row-style">
              <div class="col-xs-5">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    LOGIN
                  </div><br>
                  <div class=" container text-warning"><i>Login to make a purchase</i></div><br>
<?php 
if(isset($_GET["error"])){
  echo $_GET['error'];
}
?>
                    <div class="panel-body">
                      <form action="LOGIN-SUBMIT.php" method="POST"> 
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-primary">Login</button>
                      <br> <br> <br>
                      <div class="panel-footer">Don't have an account?<a href="SIGNUP.php">Register</a>

                      </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
<div class="footer"> 
 <?php include ("FOOTER.php");?>
    </div>     
 </body>
 </html>