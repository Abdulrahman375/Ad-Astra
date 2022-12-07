
<?php  
include'db_connection.php';

if(isset($_POST["upload1"])) {  

#photo 
$targetDir = "productImg\\";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]['tmp_name'], $targetFilePath);
        ###################################


    $table = $_POST['items'];
    $name=$_POST['name']; 
    $info=$_POST['info'];
    $price=$_POST['price'];
    


  
   
      $sql="INSERT INTO $table VALUES('','$name','$info','$price','$fileName')";  

    $result1=$con->query($sql);
      
    
   
        if($result1){  
    echo "<h3 style='color: black'> <strong >Item Successfully Added</strong></h3>";  
    header("Location:admin.php");
  
    } else {  
    echo "its already added or check the parameters ";  
    }  
   
   
   


}  
?> 