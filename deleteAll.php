<?php
include'db_connection.php';
if(isset($_POST['deleted']))
{
 

   $dlq ="DELETE FROM cart";
   $deleteCart = $con->query($dlq);
   
  header("Location:cart.php");
 
  exit;
  }
 
?> 
