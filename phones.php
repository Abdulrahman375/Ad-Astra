<!DOCTYPE html>
<html>
<head>
<title>phones</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("pagephoto/1.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>

<script src="nav.js"></script>


</head>
<body>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min">
  <div class="w3-display-left w3-text-white" id="home" >
<div class="w3-container" style="background-color: rgba(230, 227, 227, 0.685);">
    <span class="w3-jumbo " style=" color: black;">PHONES</span><br>
  </div>
    <!--<p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>-->
  </div> 
  
</header>
<!------------->

<div class="w3-container w3-padding-32">
  <ul class=" w3-left-align breadcrumb w3-large">
      <li><a href="home.html">Home</a></li>
      <span style=" font-size: 140%; font-weight: bolder;">&nbsp; > </span>
      <li> &nbsp; PHONES</li>
  </ul>
</div>


<br><br><br><br><br><br><br>





<!-- phones Section -->
<!-- big container -->
<div style='margin-left: auto;margin-right: auto;' class="w3-container" style="padding:128px 16px" id="team">
    <h1 class="w3-center">Phones</h1>
    <div  class="w3-row-padding " style="margin-top:64px">
  <!--First card or first phone -->
  <?php
include'db_connection.php';

$getquery="SELECT * FROM phones";
$result=$con->query($getquery);

if ($result->num_rows > 0){
 
  while($row = $result->fetch_assoc()){
    echo " 
    <form  action='addToCart.php' method='post'>
    <div class='w3-col l3 m6 w3-margin-bottom'>
    <div   class='w3-card'>

      <img  src='productImg/".$row['photoN']."' alt='".$row['photoN']."'   style='  height: 220px;  margin-right: auto; margin-left: auto;' >
      <input type='hidden' name='photoN' value='".$row["photoN"]."'>
      <div class='w3-container'>
      <input type='hidden' name='idd' value='".$row["id"]."'>

        <h3> <input type='hidden' name='pName' value='".$row["iName"]."'> ".$row["iName"]." </h3>
        <p >".$row['iInfo']."</p>
        <p><input type='hidden' name='pCost' value='".$row["iCost"]."'> <Strong>".$row["iCost"]." $ </Strong> </p>
       
        <p><button onclick='cartAdded();' type='submit' name='addCart' class='w3-button w3-light-grey w3-block'><i class='fa fa-shopping-cart'></i> Add to cart</button></p>
        </form>
      </div>
    </div>
  </div>   ";
}
}
$con->close();
?>    

    
</div>
  </div>


</div> <hr style="font-weight: 300;">
<br><br> 

<div class=" w3-container rev-box-container w3-center ">
<div class="rev-box">
<div class="box-top">
<form action="addReview.php" method="post">
  <h2>Write a review</h2>


  <p><input placeholder="Full name" name="rName" type="text" size="25" required></p>
  <select name="kind" required>
  <option value="">--Please choose a product--</option>
    <?php
  include'db_connection.php'; 

    $getquery="SELECT iName FROM phones";
    $result=$con->query($getquery);
    if ($result->num_rows > 0){
 
      while($row = $result->fetch_assoc()){
        echo "<option value='".$row["iName"]."'>". $row["iName"]. "</option>";
    }
    }
    
    $getquery="SELECT iName FROM accessories";
    $result=$con->query($getquery);
    if ($result->num_rows > 0){
 
      while($row = $result->fetch_assoc()){
        echo "<option value='".$row["iName"]."'>". $row["iName"]. "</option>";
    }
    }
    

    $con->close();

    ?>


</select>
  <p>Rating: <div class="rating-css">
    <div class="star-icon" >
      <input type="radio" name="rating1" id="rating1" value="1"  required>
      <label for="rating1" class="fa fa-star"></label  >
      <input type="radio" name="rating1" id="rating2"  value="2" required >
      <label for="rating2" class="fa fa-star"></label >
      <input type="radio" name="rating1" id="rating3" value="3" required>
      <label for="rating3" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating4" value="4" required >
      <label for="rating4" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating5" value="5" required>
      <label for="rating5" class="fa fa-star"></label>
    </div>
  </div></p> </div>

  <div class="client-comment">
  <textarea name="comment" id="1" cols="25" rows="3" placeholder="Type a review." required></textarea><br>
  <button class="w3-button w3-teal " type="submit" value="comment" name="submito">Submit </button><br><br>
  </div>

</form>
<?php

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
     echo " <h2>Review Successfully Created</h2>";
    }

    if ( isset($_GET['fail']) && $_GET['fail'] == 1 )
{
     // treat the succes case ex:
     echo "<h2>Review Successfully Created</h2>";
}

?>
</div>
</div>


<?php

include'db_connection.php';

$getquery="SELECT * FROM review ORDER BY Id asc";
$result=$con->query($getquery);

echo "<div class='w3-center'><br><br><h1>Reviews</h1><hr><br><br></div>";
echo "<div class='rev-box-container'>";
if ($result->num_rows > 0){
 
  while($row = $result->fetch_assoc()){
    echo "<div class='rev-box'>  
    <div class='box-top'>
    <p>Rating: <div class='rating-css'>
     ";

    for ($x = 1; $x <= $row["rating"]; $x++) {
        echo "<input type='radio' name='rating' id='rating$x' checked>
        <label for='rating$x' class='fa fa-star'></label>";}
       
      
    echo"  </div>
    <div class='name-user'> ".$row["rName"]."<span> <hr>  <h6>About: ". $row["kind"]. " </h6></div>
    <div class='client-comment'>
    <p> \"&nbsp;" . $row["comment"]. "&nbsp;\"</p>
    </div></div></div>";
}
}else {
  echo "0 results";
}
echo"</div>";
?>

<br><br><br><br><br><br><br><br><br><br>



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

function cartAdded(){
  alert("Added to cart successfully ");
  return false;
}
function reviewAdded(){
  alert("Review Added successfully ");
}
</script>


</body>
</html>
