<?php

  //This code checks if the product is added to the cart. 
  function check_if_added_to_cart($item_id){
      //We'll get the user_id from the sessiion
      $user_id=$_SESSION['user_id'];
        include ("COMMON.php");

  /* We will select all the entries from the user-item table where the item_id is equal to the 
  item_id we passed to the function, user_id is equal to the user_id in the session status is 'Added to cart'*/

     $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' and status='Added to cart' ";
     $result=mysqli_query($con,$query) or
     die(mysqli_error($con));

  

  /* We will check if the number of rows in the result and number of rows returned by the mysqli_num_rows($result) 
  is true. If yes return 1 else it returns 0  */
  if(mysqli_num_rows($result)>=1){
      return 1;
  }
  else{
      return 0;
  }
}

?>