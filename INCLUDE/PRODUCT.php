<?php
include ("COMMON.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
              body{
                  height:100%;
                  width:100%;
                  margin:0;
              }
              .jumbotron{
                  text-align:center;
              }
              .thumbnail{
                  max-width:100%;
                  height:auto;
              }
         </style>
    </head>
    <body>
        <?php
         include ("HEAD.php");
         include ("CHECK-IF ADDED.php");
        ?>
          <br> <br> <br> <br>
     <div class="container">

            <div class="jumbotron">
                <h1> Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </div>
          </div>
          <div class=container>
          <div class="row text-center">
              <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="5.jpg" class="img-responsive" alt="cameras">
                      <div class="caption"></div>
                      <h3><b>Cannon EOS</b></h3>
                      <p>Price:Rs.36000.00</p>
        <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(1)){
                //This is same as if(check_if_added_to cart !=0)
                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=1" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
               </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="2.jpg" class="img-responsive" alt="cameras">
                       <div class="caption"></div>
                       <h3><b>Sony DSLR</b></h3>
                       <p>Price:Rs.40000.00</p>
         <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(2)){
                //This is same as if(check_if_added_to cart !=0)
                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=2" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
         </div>
       </div>
       <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
             <img src="3.jpg" class="img-responsive" alt="cameras">
                <div class="caption"></div>
                <h3><b>Sony DSLR</b></h3>
                <p>Price:Rs.50000.00</p>
                <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(3)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=3" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
          
        </div>
    </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
               <img src="4.jpg" class="img-responsive" alt="cameras">
                    <div class="caption"></div>
                    <h3><b>Olympus DSLR</b></h3>
                    <p>Price:Rs.80000.00</p>
                    <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(4)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=5" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
     </div>
       </div>
     </div>
     </div>
 </div>



  <div class=container>
  <div class="row text-center">
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="9.jpg" class="img-responsive" alt="watches">
              <div class="caption"></div>
              <h3><b>Titan Model #301</b></h3>
              <p>Price:Rs.13000.00</p>
              <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(5)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=5" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
       </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="10.jpg" class="img-responsive" alt="watchess">
               <div class="caption"></div>
               <h3><b>Titan Model #201</b></h3>
               <p>Price:Rs.3000.00</p>
               <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(6)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=6" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
           </div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
     <img src="11.jpg" class="img-responsive" alt="watches">
        <div class="caption"></div>
        <h3><b>HMT Milan</b></h3>
        <p>Price:Rs.8000.00</p>
        <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(7)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=7" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
  
</div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
       <img src="4.jpg" class="img-responsive" alt="watches">
            <div class="caption"></div>
            <h3><b>Faber Luba #111</b></h3>
            <p>Price:Rs.18000.00</p>
            <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(8)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=8" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
</div>
</div>
</div>
</div>
</div>


<div class=container>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="8.jpg" class="img-responsive" alt="shirts"><br>
                <div class="caption"></div>
                <h3><b>H&W</b></h3>
                <p>Price:Rs.800.00</p>
                <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(9)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=9" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
         </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="6.jpg" class="img-responsive" alt="shirts">
                 <div class="caption"></div>
                 <h3><b>Luis Phil</b></h3>
                 <p>Price:Rs.1000.00</p>
                 <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(10)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=10" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
             </div>
  </div>
  <div class="col-md-3 col-sm-6">
  <div class="thumbnail">
       <img src="13.jpg" class="img-responsive" alt="shirts">
          <div class="caption"></div>
          <h3><b>John Zok</b></h3>
          <p>Price:Rs.1500.00</p>
         
          <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(11)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=11" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
  </div>
  </div>
  <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
         <img src="14.jpg" class="img-responsive" alt="shirts">
              <div class="caption"></div>
              <h3><b>Jhalsani</b></h3>
              <p>Price:Rs.1300.00</p>
              <?php 
        if(!isset($_SESSION['email'])) {
        ?>
                     <p><a href="LOGIN.php" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
        <?php 
        } else{
            //we have created a function to check whether this particular product is added to cart or not.
            if(check_if_added_to_cart(12)){
                //This is same as if(check_if_added_to cart !=0)
                echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
            }else{
                ?>
                <a href="CART-ADD.php?id=12" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
                <?php
            }
        }
        ?>
  </div>
  </div>
  </div>
  </div>
  </div>
<?php
   include ("FOOTER.php");
  ?>  
            
    </body>
</html>
 