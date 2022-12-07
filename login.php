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

<script src="nav.js"></script> <br>

</head>
<body>
  
  <div class="w3-container w3-padding-32"  id="home">
    <ul class=" w3-left-align breadcrumb w3-large">
        <li><a href="home.html">Home</a></li>
      

        <span style="font-size: 140%; font-weight: bolder;">&nbsp; > </span>
        <li> &nbsp; Admin Login</li>
    </ul>
  </div>
<br><br>
<br>
    <div style="margin-left: auto; margin-right: auto;" class ="w3-center  rev-box "  >

    
    
   
        <h3 style="font-weight: bold;">ADMIN CONTROL PANEL <br> Login</h3>  
        
        <form  method="POST">  
        <h5 style="color : black" ><strong>Username :</strong> <br> <input type="text" name="user"></h5>  
        <h5 style="color : black"  ><strong>Password :</strong> <br> <input type="password" name="pass"></h5>  
        <input type="submit" value="Login" name="submit" />  

        </form>  
        
        <?php include'db_connection.php';
        if(isset($_POST["submit"])){  
  
  if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
      $user=$_POST['user'];  
      $pass=$_POST['pass'];  
    
     
      $query=$con->query("SELECT * FROM admin_login WHERE username='".$user."' AND password='".$pass."'"); 
      
      $numrows =$query->num_rows;
  
      if($numrows!=0)  
      {  
      while($row=$query->fetch_assoc())  
      {  
      $dbusername=$row['username'];  
      $dbpassword=$row['password'];  
      }  
    
      if($user == $dbusername && $pass == $dbpassword)  
      {  
      session_start();  
      $_SESSION['sess_user']=$user;  
    
      /* Redirect browser */  
      header("Location: admin.php");  
      }  
      } else {  
      echo "<h3>Invalid username or password!</h3>";  
      }  
    
  } else {  
      echo "<h3>All fields are required!</h3>";  
  }  
  }  
  ?>  
  


    </div>        



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
