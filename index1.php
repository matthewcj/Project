<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Wasa Kopi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .mySlides {display:none;}
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;    
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    /* opacity: 0.7; */
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .w3-content img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-2{background-color: black;}
  .bg-2 p{color:white;}
  .bg-2 h5{color:white;}
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }
  .btn{
    border-radius:15px; 
    background-color:black; 
    font-family: Montserrat, sans-serif; 
    margin-bottom: 0; 
    border: 10; 
    font-size: 11px !important; 
    letter-spacing: 4px;
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: white;
    border: 10;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
    border-radius: 15px;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: black !important;
  }
  .navbar-nav li a:hover {
    color: black !important;
  }
  .navbar-nav li.active a {
    color: white !important;
    background-color: black !important;
    border-radius: 20px;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: black;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  div.relative{
      position: relative;
      width: 1000px;
      height: 500px;
  }
  div.absolute{
      position: absolute;
      top: 195px;
      right: 40px;
      width: 500px;
      height: 220px;
      background-color: #DCDCDC;
  }
  .center{
      position: absolute;
      top: 50%;
      width: 100%;
      margin: 12px;
      padding: 30px;
      font-size: 18.5px;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage"><img src="img/gambar1.png" alt="logo" style="width:30px;"></a>
          <ul class="nav navbar-nav">
            <li><a>Wasa Kopi</a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#menu">Menu</a></li>
            <li><a href="outlet1.php">Outlets</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#about">About</a></li>
            <?php echo "<li><a>Welcome " . $_SESSION['username'] . "</a></li>"; ?>
            <a href="logout.php"><button class="btn navbar-btn">Log Out</button></a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- 
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>   
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="gambar1.png" alt="logo" style="width:30px;"></a>
      <ul class="nav navbar-nav">
        <li><a>Wasa Kopi</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#menu">Menu</a></li>
        <li><a href="outlet.php">Outlets</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#about">About</a></li>
        <a href="signup.php"><button class="btn navbar-btn" type="submit" style="">Sign Up</button></a>
        <li class="dropdown">
      </ul>
    </div>
  </div>
</nav>
-->

<div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="img/gambar1.jpg" style="width:100%">
  <img class="mySlides" src="img/gambar2.jpg" style="width:100%">
  <img class="mySlides" src="img/gambar1.jpg" style="width:100%">
</div>

<!-- container about --> 

  <div id="about">   
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/owner1.jpg" width="630" height="600">
          <div class="absolute center col-sm-offset-2">
            <p><strong>“At Kopi Wasa, our dream is to serve high quality coffee, made with the freshest local ingredients to customers across Indonesia – and the rest of the world.”</strong><p> <h5>— Edward Tirtanata, CEO and Founder<h5>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Container (The News Section) -->
<div id="news">
  <div class="container text-center">
    <div class="row">
      <h2>NEWS</h2>
      <br><br>
      <div class="container-fluid">
        <div class="col-sm-4">
          <h3>HALAL CERTIFICATION</h3>
          <br><br>
          <p>Grab-and-go coffee chain Kopi Kenangan strengten its commitment to serve the best quality product and become the first Kopi Susu Kekinian to obtain Halal Certification from Majelis Ulama Indonesia.</p>
        </div>
        <div class="col-sm-4">
          <h3>WORLD BEST BRAND WINNER 2020</h3>
          <br><br>
          <p>Kopi Kenangan has been appointed as the only Brand of The Year winner in the Café Chain category from Indonesia by The World Branding Awards.</p>
        </div>
        <div class="col-sm-4">
          <h3>COFFEE JOURNEY</h3>
          <br><br>
          <p>At Kopi Kenangan, we make sure you have the best coffee experience. We work relentlessly to guarantee we deliver on our promise. From harvest, tasting, roasting and working together with the producers in Indonesia to produce the best crop to our customers.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div id ="menu">
  <div class="container">
    <h2 class="text-center">MENU</h2>
    <div class="row">
      <div class="col-sm-8">
        <h3><b>&nbsp;&nbsp;Kopi Wasa</b></h3>
      </div>
      <div class="col-sm-8">
        <img src="img/menu1.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <img src="img/menu2.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <img src="img/menu3.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <br>
      </div>
      <div class="col-sm-8">
        <h3><b>&nbsp;&nbsp;Susu Wasa</b></h3>
      </div>
      <div class="col-sm-8">
        <img src="img/menu4.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <br>
      </div>
      <div class="col-sm-8">
        <h3><b>&nbsp;&nbsp;Yogurt Variant</b></h3>
      </div>
      <div class="col-sm-8">
        <img src="img/menu5.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <br>
      </div>
      <div class="col-sm-8">
        <h3><b>&nbsp;&nbsp;Soda Variant</b></h3>
      </div>
      <div class="col-sm-8">
        <img src="img/menu6.jpeg" width="150%"></img>
      </div>
      <div class="col-sm-8">
        <br>
      </div>
      <div class="col-sm-8">
        <h3><b>&nbsp;&nbsp;Chocolate Variant</b></h3>
      </div>
      <div class="col-sm-8">
        <img src="img/menu7.jpeg" width="150%"></img>
      </div>
    </div>
  </div>
</div>


<!-- Container (Promo Section)
<div id ="promo">
  <div class="container">
    <div class="row content">
      <div class="col-sm-4">
        <h3>WEEKLY PROMO!</h3>
      </div>
      <div class="col-sm-4">
        <a href="https://www.instagram.com/kopiwasa/?hl=id"><img src="awa.jpg" width="300" lenght="200"></img></a>
      </div>
      <div class="col-sm-4">
        <a href="https://www.instagram.com/kopiwasa/?hl=id"><img src="awa.jpg" width="300" lenght="200"></img></a>
      </div>
    </div>
  </div>
</div>
-->

<!-- Cntainer (IG Section) -->
<div id="ig">
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CJdxIWYpqxT/"><img src="img/aw1.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CNR1nW-pbam/"><img src="img/gambar1.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CLeXmIJJylN/"><img src="img/aw3.jpg" width="285" height="300"></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CIk0FLLJvvi/"><img src="img/aw2.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CKYD1tSpyKy/"><img src="img/gambar3.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CJdxIWYpqxT/"><img src="img/aw1.jpg" width="285" height="300"></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CLeXmIJJylN/"><img src="img/aw3.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CIk0FLLJvvi/"><img src="img/aw2.jpg" width="285" height="300"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.instagram.com/p/CImqITlJDae/"><img src="img/gambar2.jpg" width="285" height="300"></a>
        </div>
      </div>
      <br>
      <a href="https://www.instagram.com/kopiwasa/?hl=id"><h3 class="text-center"><u>FOLLOW US @KOPIWASA</u></h3></a>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id ="contact" class="bg-2">
  <div class="container">
    <div class="row content">
    <!-- <p class="text-center"><em>keep in touch with us!</em></p> -->
      <div class="col-sm-6">
        <br><br>
        <a><img src="img/gambar1.png" width="150" lenght="100"></a>
        <br><br><br><br>
        <p><span class="glyphicon glyphicon-phone"></span>Phone: +62812-9103-5080</p>  
        <a href="https://www.instagram.com/kopiwasa/?hl=id" data-toggle="tooltip" title="Visit our Instagram"><img src="img/instagram.png" width="25" height="25"></a> &nbsp;&nbsp;&nbsp;
        <a href="https://www.tokopedia.com/kopiwasa" data-toggle="tooltip" title="Check us on Tokopedia"><img src="img/tokopedia.png" width="25" height="25"></a> &nbsp;&nbsp;&nbsp;
        <a href="https://gofood.co.id/jakarta/restaurant/kopi-wasa-e6042715-d67a-457e-b754-4630291110fd" data-toggle="tooltip" title="Order us on GoFood"><img src="img/gofood.png" width="25" height="25"></a>
      </div>
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
        <p><strong><u>OUR LOCATION</u></strong></p>
        <h5><span class="glyphicon glyphicon-map-marker"></span>Jl. Raden Saleh No.37 A, RT.06/RW 06, Sukmajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412</h5><br>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.90867344135!2d106.83834961431198!3d-6.4057659644311675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb525766b71d%3A0x43784e080984c0c0!2sKopi%20wasa!5e0!3m2!1sid!2sid!4v1619410217780!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made by RedlineTech<a href="" data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
