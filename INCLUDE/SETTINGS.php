<?php
include ("COMMON.php");
if(!isset($_SESSION['email'])){
    header('location:INDEXX.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
            form{
                margin-left:300px;
            }
            .footer{
                 position:absolute;
                  }
                .form-control{
                    width:500px;
                }
        </style>
    </head>
    <body>
    <?php
    include ("HEAD.php");
   ?>
          <br> <br> <br><br>
      
          <div class="container">
              <form>
                  <div class="form-group">
                      <h2><b>Change Password</b></h2>
                  </div>
                  <b class="red"> 
                  <?php
                   if(isset($_GET["error"])){
                       echo $_GET['error'];
                   }
                  ?>
                  </b>
                  <form action="SETTINGS-SCRIPT.php" method="POST">
                  <div class="form-group">   
                       <input type="password" class="form-control" placeholder="Old Password">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="New Password">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Re-type New Password">
                  </div>
                  <div class="form-group">
                      <div class="btn btn-primary" >Change</div>
                  </div>
                  </div>
              </form>
          </div>
          <div class="footer"> 
          <?php
          include ("FOOTER.php");
         ?>  
        
    </body>
</html>