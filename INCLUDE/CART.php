<?php
include ("COMMON.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link href="design.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
            table{
                margin-left:175px;
                width:700px;
            }
            th{
                text-align: center;
                padding-right: 10px;
            }
             th,td{
                 text-align: center;
                 padding: 15px;
             }
             .footer{
                 position:absolute;

             }
         </style>
    </head>
    <body>

    <?php
         include ("HEAD.php");
    ?>

          <br> <br> <br> <br>
    <div class="container">
        <table class="table-bordered table-striped table-hover table-responsive">
        <?php
        $sum=0;
        $user_id=$_SESSION['user_id']; 
        $query= "SELECT items.price AS price, items.id AS id, items.name AS name FROM users_items JOIN items ON
         users_items.item_id=items.id WHERE users_items.user_id='$user_id' and status='Added to cart' ";
        $result=mysqli_query($con,$query)or
        die(mysqli_error($con));
        if(mysqli_num_rows($result)>=1){
             ?>
             <thead>
             <tr> 
             <th> Item Number</th>
             <th> Item Name</th>
             <th> Price</th>
             <th>    </th>
             </tr>
             </thead>
             <tbody>
             <?php
             while($row=mysqli_fetch_array($result)){
                 $sum+=$row["price"];
                 $id=" ";
                 $id.=$row["id"]. ",";
                 echo"<tr>
                 <td>"." " .$row["id"]."</td>
                 <td>".$row["name"]."</td>
                 <td>Rs ".$row["price"]."</td>
                 <td><a href='CART-REMOVE.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                 </tr>";
                 }
                 $id=rtrim($id, ",");
                 echo"<tr>
                 <td> </td>
                 <td>Total</td>
                 <td>Rs".$sum."</td>
                 <td> <a href='SUCCESS.php?itemid=".$id."'class='btn btn-primary'>Confirm Order</a></td>
                 </tr>"; 
             ?>
             </tbody>
             <?php
         }else{
             echo"<center><h2><br>Add items to the cart first!</h2>
             <p><a href='PRODUCT.php'>click here</a> to explore products</p>
             </center>";
         }
        ?>
        <?php 

        ?>
        </table>
        </div>
        </div>
        </div>

          <?php
   include ("FOOTER.php");
  ?>
  </body>
</html>
   