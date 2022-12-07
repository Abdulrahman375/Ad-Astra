<!DOCTYPE html>
<html>
<head>

<title>ADMIN Control Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Map API-->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" 
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
 crossorigin=""/>

<script
 src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" 
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" 
crossorigin=""></script>
<!-- Map API-->

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>

<script src="nav.js"></script> <br> <br>

</head>
<body>

  <div class="w3-container w3-padding-32"  id="home">
    <ul class=" w3-left-align breadcrumb w3-large">
        <li><a href="home.html">Home</a></li>
        <span style="font-size: 140%; font-weight: bolder;">&nbsp; > </span>

        <li><a href="login.php">Admin Login</a></li>

        <span style="font-size: 140%; font-weight: bolder;">&nbsp; > </span>
        <li> &nbsp; Admin Control Panel</li>
    </ul>
  </div>
<br><br>
<br>
<div class="w3-center">

    <h1 ><strong> Admin Control Panel</strong> </h1>

    <br><br><br><br>
</div>

<div class =" w3-justify w3-center log-box"  >

<div>

<h2 style="font-weight: bold;">Add an item :</h2>  

<form action="" class="w3-container" method="POST" id="FORM" enctype="multipart/form-data" >
          <div class="w3-section">
          
          <label for="items"> What is the item type</label>
          <select name="items" id="items">
            <option value="phones"> Phones</option>
            <option value="accessories"> Accessories</option>
          </select>
          </div>


       <hr>  <p> Photo selection <br> <input type="file" name="file" /> </p> <hr>
        
          <div class="w3-section">
            <label>Item Name</label>
            <input required class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required>
          </div>
      
          <div class="w3-section">
              <label>Item info </label>
              <input  required placeholder="" class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="info" required>
           </div>
          
      
          <div class="w3-section">
            <label>Item price Price </label>
            <input required placeholder="Enter Number only" type="text" class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="price" required>
          </div>

        
      
      
          <button  type="submit" name ="upload1" >Send</button>
<br><br>
        </form>
        <br><br>

  



</div>






<?php  


if(isset($_POST["upload1"])) {  

  include'db_connection.php';
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
    header("Location:admin.php?ss=1");
  
    } else {  
    echo "its already added or check the parameters";  
    }  
   
    

}  
?> 


<?php


   
if ( isset($_GET['ss']) && $_GET['ss'] == 1 )
{
     // treat the succes case ex:
     echo " <h3 style='color: black'> <strong >Item Successfully Added</strong></h3>";
    }

?>
</div>
 <br><br><br>

<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<!-------------------------NOW UPDATE AM ITEM --------------------------------------------------------------------->




<div class =" w3-justify w3-center log-box">
<div  class =" w3-justify w3-center log-box" >

<h1 style="font-weight: bold;"><strong> Update an item  </strong>:</h1>  

<h4> choose From below </h4>




<hr>
  <?php  
   
include'db_connection.php';
   
   
   $sql = "SELECT * FROM phones  ";
   $result = $con->query($sql);

   $sql2 = "SELECT * FROM accessories ";
   $result2 = $con->query($sql2);

   echo " <br> <h2 style='font-weight= bolder; ' >Phones :</h2> <br> " ;


   if ($result->num_rows>0) {
   while($row = $result->fetch_assoc()) {

      echo "<h6 style=' display: inline-block; border: 2px solid black;'' > <span> <strong>  
      - id: ". $row["id"]."
       <br>- Item Name: ". $row['iName']." 
       <br> - Item info: ". $row['iInfo']." 
       <br> - item Cost : ". $row['iCost']." $
       </strong> </span></h6> ";
   }
   } else {
   echo "0 results";
   }
echo"<hr>";

   echo " <br> <h2 style='font-weight= bolder; ' >Accessories :</h2> <br> " ;
   if ($result2->num_rows>0) {
    while($row = $result2->fetch_assoc()) {
 
       echo "<h6 style=' display: inline-block; border: 2px solid black;'> <span> <strong>   
       -id: ". $row["id"].", 
       <br> - Item Name: ". $row['iName'].", 
       <br> - Item info: ". $row['iInfo'].", 
       <br> - item Cost : ". $row['iCost']." $ 
       </strong> </span></h6> ";
    }
    } else {
    echo "0 results";
    }
    echo"<br>";


   
   $con->close();
                     ?>    </h4> 





</div>

<br>

<div style=" display: inline-block; border: 2px solid black;" class =" w3-justify w3-center log-box"  >


  <form action="" class="w3-container" method="POST" id="FORM" enctype="multipart/form-data" >
          <div class="w3-section">
          
          <label for="items"> What is the item type</label>
          <select name="items" id="items">
            <option value="phones"> Phones</option>
            <option value="accessories"> Accessories</option>
          </select>
          </div>
          <br> <br>
  
  <h3 style="font-weight: bolder; color:black " >info to update :</h3>
  
  <div class="w3-section">
    <label>Item ID you want to update :</label>
    <input  class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="id" required>
  </div>
  

  <hr>  <p> Photo selection <br> <input type="file" name="file" > </p> <hr>


  <div class="w3-section">
    <label>Item Name</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required>
  </div>
  
  <div class="w3-section">
      <label>Item info </label>
      <input placeholder="" class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="info" required>
   </div>
  
  
  <div class="w3-section">
    <label>Item price Price </label>
    <input  placeholder="Enter Number only" type="text" class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="price" required>
  </div>
  
  
  
  
  <button  type="submit" name ="toto" >Send</button>
  <br><br>
  </form>
  
  <br> <br>
         
        
  <?php error_reporting(0); 
include'db_connection.php';
   if (isset($_POST['toto']) ) {
  if(!empty($_POST['id'])){
    
#photo 
$targetDir = "productImg/";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]['tmp_name'], $targetFilePath);
        ###################################


    $id =$_POST['id'];
    $table = $_POST['items'];
    $name=$_POST['name']; 
    $info=$_POST['info'];
    $price=$_POST['price'];

  
         
  $sql="UPDATE $table SET iName='$name', iInfo='$info',iCost='$price', photoN='$fileName' WHERE id=$id";  

      $result=$con->query($sql);
      
      if($result){  
        echo "<br> <h4>item Successfully Updated</h4>"; 
        header("Location:admin.php");
 
        } else {  
        echo " <h4>its already updated or check the parameters</h4>";  
        }  
    
    }  } else {
echo "Enter the info the click send  ";}
?>
        

</div>

</div>

<br><br><br>






<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<!----------------------------DELETE AN ITEM---------------------------------------------------->




<div class =" w3-justify w3-center log-box">
<div  class =" w3-justify w3-center log-box" >

<h1 style="font-weight: bold;"><strong> Delete an item  </strong>:</h1>  

<h4> choose From below </h4>

    

<hr>
<?php  
 include'db_connection.php';
   
   $sql = "SELECT * FROM phones ";
   $result = $con->query($sql);

   $sql2 = "SELECT * FROM accessories ";
   $result2 = $con->query($sql2);

   echo " <br> <h2 style='font-weight= bolder; ' >Phones :</h2> <br> " ;


   if ($result->num_rows>0) {
   while($row = $result->fetch_assoc()) {

      echo "<h6 style=' display: inline-block; border: 2px solid black;'' > <span> <strong>  
      - id: ". $row["id"]."
       <br>- Item Name: ". $row['iName']." 
       <br> - Item info: ". $row['iInfo']." 
       <br> - item Cost : ". $row['iCost']." $
       </strong> </span></h6> ";
   }
   } else {
   echo "0 results";
   }
   echo"<hr>";

   echo " <br> <h2 style='font-weight= bolder; ' >Accessories :</h2> <br> " ;
   if ($result2->num_rows>0) {
    while($row = $result2->fetch_assoc()) {
 
       echo "<h6 style=' display: inline-block; border: 2px solid black;'> <span> <strong>   
       -id: ". $row["id"].", 
       <br> - Item Name: ". $row['iName'].", 
       <br> - Item info: ". $row['iInfo'].", 
       <br> - item Cost : ". $row['iCost']." $
       </strong> </span></h6> ";
    }
    } else {
    echo "0 results";
    }
echo"<br>";

   
   $con->close();
                     ?>
<hr>



</div>

<br>

<div style=" display: inline-block; border: 2px solid black;" class ="  w3-justify w3-center log-box"  >
  <form action="" name="FORM" method ="POST" >

  <div class="w3-section">
          
          <label for="items"> What is the item type</label>
          <select name="items" id="items">
            <option value="phones"> Phones</option>
            <option value="accessories"> Accessories</option>
          </select>
          </div>

  <label>  Enter id that you want to delete <br> <input type="text" name="id" id="aio" required></label><br><br>
  <button  type="submit" name ="ide" >Send </button>
  </form>
</div>



</div>   


<?php   error_reporting(0); 
include'db_connection.php';
      if(isset($_POST["ide"]) ) {  
        if(!empty($_POST['id'])){

          $table = $_POST['items'];
          $id=$_POST['id']; 
 
         
      $sql="DELETE FROM $table WHERE id=$id";  

      $result=$con->query($sql);
      
      if($result ){  
        echo "<br> <h4>item Successfully Deleted</h4>"; 
        header("Location:admin.php");
 
        } else {  
        echo " <h4>its already Deleted or check the parameters</h4>";  
        }  
    }  
  }
   
      ?>


<br><br><br> <br><br><br>






<!----------------------------------------------- 

------------------------------------------------>



<!-- Footer -->
<script src="footer.js" ></script>





<script>


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>




</body>
</html>
