<!DOCTYPE html>
<html>
<head>
<title>contact</title>
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
  background-image: url("pagephoto/contact.jpg");
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
  <div class="w3-display-left w3-text-white" style="padding:48px"id="home">
    <span class="w3-jumbo w3-hide-small" style="color: black;">Contact Us</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium " style=" color: black;">Contact Us</span><br>

    <span class="w3-large" style="color: black;"><strong></strong></span>
  
  </div> 
  
</header>
<!------------->



<div class="w3-container w3-padding-32"  id="home">
  <ul class=" w3-left-align breadcrumb w3-large">
      <li><a href="home.html">Home</a></li>
      <span style="font-size: 140%; font-weight: bolder;">&nbsp; > </span>
      <li> &nbsp; CONTACT</li>
  </ul>
</div>

<br><br><br><br><br><br><br>
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px; padding-left: 2%;" >
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Riyadh, SA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +966 554914903 &nbsp; - &nbsp; +966 555403362</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: AdAstra@shmngaH7bsh.com</p>
    <br>

    <form action="sendMessage.php" method="post">
      <div style="width: 20%;">
        
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="email" required name="email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="subject" required name="subject"></p>
      
      <p><textarea class="w3-input w3-border" rows="9" cols="51" required placeholder="message" name="message"></textarea></p>
      <p>

      </div>
        <button class="w3-button w3-teal" type="submit" name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
      </p>
    </form>
  
    
   <?php
       if ( isset($_GET['ss']) && $_GET['ss'] == 1 )
       {
            echo " <h3 style='color: black'> <strong >your message Sent successfully</strong></h3>";
           }
   
           if ( isset($_GET['ff']) && $_GET['ff'] == 1 )
           {
                  echo "<h1>its already added or check the parameters</h1>";  
                }
       

   ?>


  </div>
</div>

 

<br><br><br><br><br><br><br><br><br><br><br>




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
