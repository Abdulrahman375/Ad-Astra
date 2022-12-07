<!DOCTYPE html>
<html>
<head>

<title>AD ASTRA</title>
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

<script src="nav.js"></script>

</head>
<body>


  
    <h1 class="w3-center"> <strong>Cart</strong> </h1> 

<br><br>
    


<br> <br> <br> <br><br><br>

<?php include'db_connection.php';  error_reporting(0); 
   
 
# data from cart to display
$sql = "SELECT * FROM cart";
$result = $con->query($sql);

################################

#----------------------------------------------------#


#TOTAL COST CALCULATION
$sum ="SELECT SUM(total) FROM cart";
$result3 = $con -> query($sum);
$sum1 = mysqli_fetch_array($result3);
$sum2= $sum1["SUM(total)"];
##########################################

#----------------------------------------------------#

#TOTAL ITEMS COSTS 
$sum3 ="SELECT COUNT(cName) FROM cart";
$result4 = $con -> query($sum3);
$sum4 = mysqli_fetch_array($result4);
$sum5= $sum4["COUNT(cName)"];



#########################################################################
echo "<div class='CartContainer '>
<div class='Header'>
    <h3 class=' Heading'>Shopping Cart</h3>
    <form  action='deleteAll.php' method='post'>
    <button class'  Action' type='submit' name='deleted' value='Deleted'>Delete All items</button>
    </form>


</div>";

if ($result->num_rows>0) {
// output data of each row
while($row = $result->fetch_assoc() ) {
   echo "<div class='CartContainer '>
   

   <div class='Cart-Items'>
         <div >
             <img src='productImg/".$row['photoN']."'  style='height: 100px;' />
         </div>

         <div class='about'>
             <h2 class='title'>".$row["cName"]."</h2>
         </div>
         <div class='counter'>
           <input style='margin-left: 12px' readonly type='number' id='points' name='points' step='' value='".$row["quantity"]."'>

         </div>
         <div class='prices'>
             <div class='amount'>".$row["cost"]."$</div>

             <div class='remove'>
             <form  action='deleteSingle.php' method='post'>
             
             <input type='hidden' name='dltsingle' value='".$row['id']."'>

       <button class=' w3-round-large Action' type='submit' name='delete1'>Delete this item</button>
       </form>
             
             </div>
         </div>
   </div>


 <hr>
 
</div>";


}
} else {
echo "<h2 class='w3-center'>No Items</h2>";
}

$con->close();

echo"<div class=' w3-hide-large w3-left checkout'>
<div class='total'>
    <div>
        <div class='Subtotal'>  Sub-Total:&nbsp;&nbsp;&nbsp;</div><br>
        <div class='items'>  ".$sum5." items</div>
    </div>
    <div class='total-amount'>  ".$sum2."$</div>
</div>
<a href='checkout.html'>
<br>
<button2 class='button2'><span>Checkout </span></button2>
</a>
</div>
<!----------->
<div class=' w3-hide-small w3-hide-medium checkout'>
<div class='total'>
    <div>
        <div class='Subtotal'>  Sub-Total:&nbsp;&nbsp;&nbsp;</div><br>
        <div class='items'>  ".$sum5." items</div>
    </div>
    <div class='total-amount'>  ".$sum2."$</div>
</div>
<a href='checkout.html'>
<br>
<button2 class='button2'><span>Checkout </span></button2>
</a>
</div>";



                  ?>    






<br><br><br> <br><br><br>

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
