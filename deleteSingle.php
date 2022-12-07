
<?php
include'db_connection.php';
if(isset($_POST['delete1']))
{
 


  $dodo = $_POST['dltsingle'];  
   $dlq2 ="DELETE FROM cart where id ='$dodo'";
   $deleteCart = $con->query($dlq2);
   
  header("Location:cart.php");
 
  exit;
  }


?> 