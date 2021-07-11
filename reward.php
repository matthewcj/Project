<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Wasa Kopi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
  body {
    font: 400 18px/1.8 Lato, sans-serif;
    color: black;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    font-size: 20px;
    color: #111;
  }
  h1 {
      font-size: 40px;
  }
  h2 {
      font-size: 30px;
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
  .carousel-inner img {
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
    color: #fff !important;
    background-color: #29292c !important;
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
  img {
    margin-bottom: 10px;
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
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>   
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index1.php"><img src="img/gambar1.png" alt="logo" style="width:30px;"></a>
      <ul class="nav navbar-nav">
        <li><a>Wasa Kopi</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index1.php #menu">Menu</a></li>
        <li><a href="outlet1.php">Outlets</a></li>
        <li><a href="index1.php #news">News</a></li>
        <a href="logout.php"><button class="btn navbar-btn">Logout</button></a>
      </ul>
    </div>
  </div>
</nav>

<div class="w-3container">
  <h1 class="w3-hide">L</h1><br>
  <h1 class="w3-hide">L</h1>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-5">
        <h2>Here is your reward.<br>Thank you for trusting us!</h2>
        <br>
        <p>Click our logo to visit our website</p>
    </div>
    <div class="col-sm-6">
        <div class="row">
          <img src="img/Coupon_1.png">
          <img src="img/Coupon_2.png">
          <br><br>
          <h5>Note: Don't forget to screenshot and show it to cashier</h5>
        </div>
      <div class="row">
        <div class="col-sm-12 form-group">
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>