<?php 
  include ("COMMON.php");

  if(isset($_SESSION['email'])){
    header('location:PRODUCT.php');
  }
  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
           .col-xs-5{
            margin-left:300px;
            width:1000px;
           
          }
        
        .footer{
                 position:absolute;
                  }
        </style>
    </head>
    <body>
    <?php  include ("HEAD.php");?>
       <br> <br> <br> <br>
       
          <div class="container">
            <div class="row row-style">
              <div class="col-xs-5">
         <h2><b> SIGN UP</b></h2>
                      <form action="SIGNUP-SCRIPT.php" method="POST">
                           <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" >
                          </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email" >
                          <?php 
                          if(isset($_GET["m1"])){
                          echo $_GET['m1'];
                          }
                          ?>

                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password" >
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="number" placeholder="Contact" maxlength="10" size="10" required>
                            <?php 
                          if(isset($_GET["m2"])){
                          echo $_GET['m2'];
                          }
                          ?>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                          </div>
                         <button class="btn btn-primary">Submit</button>
                      <br> <br> <br>
                     </form>
                  
                  </div>
              </div>
          </div>
        
          <div class="footer"> 
 <?php include ("FOOTER.php");?>
    </body>
</html>