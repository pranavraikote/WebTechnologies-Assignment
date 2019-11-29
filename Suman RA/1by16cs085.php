<!DOCTYPE html>
<html>
<title>Restaurant_Table Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none}
</style>
<body class="w3-content w3-border-left w3-border-right">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3>BUFFET STARTING</h3>
    <h3>from Rs 599 only</h3>
    <h6>per person</h6>
    <hr>
    <form action="/action_page.php" target="_blank">
      <p><label><i class="fa fa-calendar-check-o"></i> Check In Date</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-o"></i> Arrival Time</label></p>
      <input class="w3-input w3-border" type="text" placeholder="HH MM SS" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Adults</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><label><i class="fa fa-child"></i> Kids</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
      <p>
          <button class="w3-button w3-block w3-green w3-left-align" type="submit" value="book" ><a href="https://www.barbequenation.com"><i class="fa fa-search w3-margin-right"></i>Book</a></button></p>
    </form>
  </div>
  <div class="w3-bar-block">
    <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i> Restaurant Branch</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display='block';"><i class="fa fa-rss"></i> Subscribe</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i> Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green">The Barbeque Nation</h2>
    <div class="w3-display-container mySlides">
    <img src="bbq1.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>The New Look</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="bbq2.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Exclusive Barbecue</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="bbq3.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p></p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="bbq4.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Eat Happy</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="bbq1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="The new look">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="bbq2.jpg" style="width:100%; height:100px; cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="bbq3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" >
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="bbq4.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)">
    </div>
  </div>

  <div class="w3-container">
    <h4><strong>The space</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people per table: 10</p>
        <p><i class="fa fa-cutlery"></i> Rs 599 for Veg/ Rs 749 for Non-Veg</p>
        <p><i class="fa fa-birthday-cake"></i> Party hall for people>10 </p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i>Lunch Timings: 11.30 a.m To 3.30 p.m</p>
        <p><i class="fa fa-fw fa-clock-o"></i>Dinner Timings: 6.30 p.m To 11.30 p.m</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-birthday-cake"></i> Party Hall</p>
        <p><i class="fa fa-fw fa-wifi"></i> TV/Free WiFi</p>
        <p><i class="fa fa-gamepad"></i> Sports Arcade</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-music"></i> DJ/Dance floor/Live Music</p>
        <p><i class="fa fa-check"></i> Valet parking</p>
        <p><i class="fa fa-glass"></i> MicroBrewery</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Extra Info</strong></h4>
    <p>The best chain of grill Restaurants are now near you. Enjoy the exclusive and authentic Barbeques and wide range of cuisines with BarbequeNation with exciting offers.Celebrate occasions like Birthdays,Anniversaries and team outings with us. </p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    <hr>
    
    <h4><strong>Reviews</strong></h4>
    <p>Miele Guide has listed Barbeque Nation as one among the top 100 restaurants in Asia. 
    Among the top 20 restaurants in India..</p>
    <p>Subscribe to receive updates on available dates and special offers.</p>
    <p><button class="w3-button w3-green w3-third" onclick="document.getElementById('subscribe').style.display='block'">Subscribe</button></p>
  </div>
  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Bangalore, India<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +080 23634446<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: barbequenation@gmail.com<br>
    <p>Questions? Go ahead, ask them:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
    <button type="submit" class="w3-button w3-green w3-third" >Send a Message</button>
    </form>
  </div>
  
  <footer class="w3-container w3-padding-16" style="margin-top:32px">Eat Good! <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></footer>

<!-- End page content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none';alert('You have successfully subscribed to our channel')">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
