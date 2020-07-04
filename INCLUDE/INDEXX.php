<?php
include("COMMON.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store </title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
           h3{
               font-family:'Times New Roman', Times, serif;
               font-size:32px;

           }
        </style>
    </head>
    <body>
        <?php include ("HEAD.php"); ?>
          <div class="banner-image">
             <div class="container">
                 <div class="banner-content">
                     <h3><b>We sell lifestyle.</b></h3>
                     <p>Flat 40% off on premium brands</p>
                     <a href="product.php" class="btn btn-danger btn-lg active">
                         
                    Shop Now</a>
                 </div>
             </div>
          </div>

          <div class="container">
            <div class="items">
            <a href="#">
            <img src="1.jpg" alt="" class="thumbnail">
            <div class="caption">
            <h2> Cameras</h2>
            <p>Choose among the best available in the world.</p>
            </div>
            </div>
            <div class="items">
            <img src="7.jpg" alt="" class="thumbnail">
            <div class="caption">
            <h2> Watches</h2>
            <p>Original watches from the best brands.</p>
            </div>
            </div>
            <div class="items">
            <img src="16.jpg" alt="" class="thumbnail">
            <div class="caption">
            <h2>Shirts</h2>
            <p>Our exquisite collection of shirts.</p>
            </div>
            </div>
            </a>
            </div>
            </div>
            <br>
            <?php 
            
            include ("FOOTER.php"); 
            ?>
    </body>
</html>




