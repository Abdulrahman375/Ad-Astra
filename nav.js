//<!-- Navbar (sit on top) -->
window.onload = function() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      var x =this.responseText;
      document.getElementById("ddd").innerHTML =x; 
      document.getElementById("ggg").innerHTML =x; 

    }
    xhttp.open("GET", "getItemCount.php?q=");
    xhttp.send();
};



document.writeln("<div  class='w3-top'>");
document.writeln("<div class=' w3-bar w3-white w3-card' id='myNavbar'>");
document.writeln("<a href='home.html'> <img style='padding:0px 0px; float:left; ' class=' w3-bar-item  w3-hide-small w3-hide-medium '  src='homeimg/logo.png'  height=50px width=50px></a> ");
document.writeln("<a href='home.html' class=' w3-bar-item  w3-hide-large w3-hide-small  '> <img src='homeimg/logo.png' width='10%'></a>");
document.writeln("<a href='home.html' class=' w3-bar-item  w3-hide-medium w3-hide-large '> <img src='homeimg/logo.png' width='25%'></a>");


//    <!-- Right-sided navbar links -->

document.writeln("<div class='w3-right w3-hide-small'>");
document.writeln("<a href='cart.php' class='w3-bar-item w3-button'><i class='fa fa-shopping-cart'></i> <span id=ddd><h6> Cart</h6> </span>   </a>");
document.writeln("<a href='login.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i> Admin Login</a>");
document.writeln("</div>");

document.writeln(" <div class='w3-left w3-hide-small'> <a class=' w3-bar-item '> </a> <a href='home.html' class=' w3-bar-item w3-button'><i class='fa fa-home'></i>Home</a>");
document.writeln("<div class='dropdown ' > <a href='#' class='w3-bar-item w3-button'><i class='fa fa-mobile'></i> Products </a>");
document.writeln("<div class='dropdown-content'> <a href='phones.php'class='w3-bar-item w3-button'>Smart Phones</a>")
document.writeln(" <a href='accessories.php'class='w3-bar-item w3-button'>Accessories </a> </div></div>")
document.writeln("<a href='faq.html' class='w3-bar-item w3-button'><i class='fa fa-question-circle'></i> FAQ</a>");
document.writeln("<a href='contact.php' class='w3-bar-item w3-button'><i class='fa fa-phone-square'></i> Contact</a>");
document.writeln("<a href='about.html' class='w3-bar-item w3-button'><i class='fa fa-address-card'></i> About us</a> </div>");

////

// Hide right-floated links on small screens and replace them with a menu icon

document.writeln("<a href='javascript:void(0)' class='w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium' onclick='w3_open()'>");
document.writeln("<i class='fa fa-bars'></i> </a> </div> </div>");
document.writeln("<nav class='w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large' style='display:none' id='mySidebar'>");
document.writeln("<a href='javascript:void(0)' onclick='w3_close()' class='w3-bar-item w3-button w3-large w3-padding-16'>Close </a>");
document.writeln("<a href='home.html' onclick='w3_close()' class='w3-bar-item w3-button'>Home</a>");
document.writeln("<div class='dropdown w3-bar-item' > <a href='' onclick='w3_close()' class='w3-button'>Products</a> <div class='dropdown-contentt'>");
document.writeln(" <a href='phones.php' onclick='w3_close()' class='w3-bar-item w3-button'>Smart Phones</a> ");
document.writeln(" <a href='accessories.php' onclick='w3_close()' class='w3-bar-item w3-button'>Accessories</a> </div> </div>");
document.writeln("<a href='faq.html' onclick='w3_close()' class='w3-bar-item w3-button'>FAQ</a>");
document.writeln("<a href='contact.php' onclick='w3_close()' class='w3-bar-item w3-button'>Contact</a>");
document.writeln("<a href='about.html' onclick='w3_close()' class='w3-bar-item w3-button'>About us</a>");
document.writeln("<a href='cart.php' onclick='w3_close()' class='w3-bar-item w3-button'> <span style='color: white;' id=ggg><h6> Cart</h6> </span></a>");
document.writeln("<a href='login.php' onclick='w3_close()' class='w3-bar-item w3-button'>Admin Login</a> </nav> ");

