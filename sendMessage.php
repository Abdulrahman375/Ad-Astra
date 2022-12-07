<?php  
include'db_connection.php';

if(isset($_POST["submit"]) ) {  
  
  $name=$_POST['Name'];  
  $email=$_POST['email']; 
  $subject=$_POST['subject'];
  $cMessage=$_POST['message'];
 
  



  $query = $con->query("SELECT * FROM contact");  


    $sql="INSERT INTO contact(cName,email,cSubject, cMessage) VALUES('$name','$email','$subject','$cMessage')";  

  $result=$con->query($sql);
    
  
 
      if($result){  
  echo "<h1>your message Sent successfully</h1> ";  
  
 
  header("Location:contact.php?ss=1");
 
  exit;

  } else {  
  echo "<h1>its already added or check the parameters</h1>";  
   
  header("Location:contact.php?ff=1");
 
  exit;
  }  
 

} 
  ?> 