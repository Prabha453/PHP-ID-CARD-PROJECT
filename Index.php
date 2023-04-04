<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>ID Card System</title>
</head>
<body >
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 95%;
    height: 90%;
  }
  .head{
    padding: 40px;
}
.header-1
{
color: #ffffff;
padding: 100px;
}

img:hover{
          padding:20px;
          background-color:white;
        }
.card:hover{
padding:10px;
}
@media only screen and (max-width:700px)
{
   .head,.header-1{
        padding:20px;
    }
}
@media only screen and (max-width:700px)
{
   .end-img img{ 
    width: 100%;
    height: 100%;
    }
}

  </style>

<!-------------------------NAV BAR----------------------->
<?php include 'navbar.php' ?>

    <!--------------------------HEADER----------------------->
<div class="header-1 text-dark text-center"> 
    <div class="container-fluid">
                <h1>IDENTY CARD SYSTEM</h1>
                <h5>This Site Use For Schools And Colleges</h5>
        </div>
    </div>
<!-- -------------------Slider---------------------- -->

<div id="demo" class="carousel slide text-center" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMAGES\slide-1.jpg" alt="Los Angeles" width="1000" height="500">  
    </div>
    <div class="carousel-item">
      <img src="IMAGES\slide-2.jpg" alt="Chicago" width="1000" height="500"> 
    </div>
    <div class="carousel-item">
      <img src="IMAGES\slide-3.jpg" alt="New York" width="1000" height="500">  
    </div>
    <div class="carousel-item">
      <img src="IMAGES\slide-5.jpg" alt="New York" width="1000" height="500">  
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    <div class="head mt-4 text-dark">
      <div class="text-center">
      <h1 style="font-family:Roboto"><u>OUR IDENTY CARDS</u></h1>
      </div>
</div>
   <!--------------------------BACKROUNDS----------------------->
<div class="container mt-3">
<div class="card-group">
  <div class="card m-1">
    <img class="card-img-top" src="IMAGES\school.jpg" alt="Card image cap" width="300" height="300">
    <div class="card-body">
      <h3 class="card-title">Schools Identy Card</h3>
      <p class="card-text">1. All Schools Use This Website To Make Student Identy Card Simply And Easyly.
        You have Enter Details And Get Identy Card For defined Designs Or Models Only. </p>
        <p class="card-text">2. Click ->CREATE Button To Create Your ID Card</p>
  
    </div>
  </div>  
  <div class="card m-1">
    <img class="card-img-top" src="IMAGES\college.jpg" alt="Card image cap" width="300" height="300">
    <div class="card-body">
      <h3 class="card-title">College Identy Card</h3>
      <p class="card-text">1. All Colleges Use This Website To Make Student Identy Card Simply And Easyly.
        You have Enter Details And Get Identy Card For defined Designs Or Models Only. </p>
        <p class="card-text">2. Click ->CREATE Button To Create Your ID Card</p>
    </div>
  </div>
</div>
</div>

<div class="create text-center mt-4">
<a  href="IDForm.php" class="btn bg-primary p-4 w-50 text-white border">CREATE</a>
  </div>
  <div class="end-img mt-3">
  <img src="IMAGES/head.jpg" alt="head" width="100%" height="400px" class="responsive">
  </div>
<!--------------------------FOOTER----------------------->

   <?php include 'footer.php' ?>

</body>
 
</html>