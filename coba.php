<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Kopi Wasa</title>
  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 300 18px/1.8 Lato, sans-serif;
    color: black;
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
      top: 250px;
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

<div class="container" style="position:relative;">
    <div class="relative">
        <img src="img/owner1.jpg" width="630" height="600">
        <div class="absolute center">
        <p>“At Kopi Kenangan, our dream is to serve high quality coffee, made with the freshest local ingredients to customers across Indonesia – and the rest of the world.”<p> <h5>— Edward Tirtanata, CEO and Founder<h5>
        </div>
    </div>
</div>



</body>
</html>