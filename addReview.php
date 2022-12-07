
<?php
include'db_connection.php';

if(isset($_POST["submito"])){  
  if(!empty($_POST['rName']) && !empty($_POST['kind']) && !empty($_POST['rating1']) && !empty($_POST['comment']) ) {  
      $rName=$_POST['rName'];  
      $kind=$_POST['kind']; 
      $comment=$_POST['comment']; 
      $rating=$_POST['rating1']; 
  
        
      
      $sql="INSERT INTO review(rName,kind,rating,comment) VALUES('$rName','$kind','$rating','$comment')";  
  
      $result=$con->query($sql);
          if($result){  
           echo "<h2>Review Successfully Created</h2>";
           
  header("Location:phones.php?success=1");
 
  exit;
  
           } 
  } else {  
      echo "<h2>All fields are required!</h2>";  
       
  header("Location:phones.php?fail=1");
 
  exit;
  
  }
  
 
}

?>
