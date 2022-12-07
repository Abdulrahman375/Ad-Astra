
<?php
include'db_connection.php';

if(isset($_POST['addCart']))
{
 
  $photo = $_POST['photoN'];
  $name = $_POST['pName'];  
  $cost = $_POST['pCost'];  
  $id = $_POST['idd'];  

  #checking same name
  $sqlCheck ="SELECT * FROM cart";
  $checko = $con->query($sqlCheck);
  $check = mysqli_fetch_array($checko);
  ##############


  if( $check["id"] == $id ){
    $incremeant = "UPDATE cart  SET quantity = quantity +1  WHERE id = $id ";

     $con->query($incremeant);

   } else{
    $sqlInsert ="INSERT Into cart(id,cName,cost,photoN) values($id,'$name','$cost','$photo')";

   $con->query($sqlInsert);

      }



      header("Location:phones.php");
 
      exit;

  }





  
?> 

<?php

if(isset($_POST['addCarto']))
{
  include'db_connection.php';

  $photo = $_POST['photoN'];
  $name = $_POST['pName'];  
  $cost = $_POST['pCost'];  
  $id = $_POST['idd'];  

  
  #checking same name
  $sqlCheck ="SELECT * FROM cart";
  $checko = $con->query($sqlCheck);
  $check = mysqli_fetch_array($checko);
  ##############
  
  if( $check["id"] == $id ){
    $incremeant = "UPDATE cart  SET quantity = quantity +1  WHERE id = $id ";

     $con->query($incremeant);

   } else{
    $sqlInsert ="INSERT Into cart(id,cName,cost,photoN) values($id,'$name','$cost','$photo')";

   $con->query($sqlInsert);

      }

      
  header("Location:accessories.php");
 
  exit;
  }
?> 