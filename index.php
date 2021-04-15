<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Welcome</title>
  </head>
  <style>
      body{
        margin:0px;
        padding:0px;
        background-color:black;
      }
      .carousel-item{
    height: 400px;
} 
.carousel-item img{
    height: 400px;
    display: block;
  margin-left: auto;
  margin-right: auto;
  object-fit:cover;
  opacity: 75%;
}
.carousel-caption{
  font-size:2em;
  position:absolute;
  left:100px;
  justify-content:center;
  align-items:center;
  background-color:rgba(0,0,0,0.4);
  width:35%;
}
</style>
  <body>
  <?php include('includes/header.php');?>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="static/img/carousel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>What is KASS?</h5>
        <p>KASS is a car rental organization that allows you to rent cars for all travel needs.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="static/img/carousel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>You wish we deliver!</h5>
        <p>Get a car at your doorstep. All models and sizes of cars available.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="static/img/carousel3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Want to travel but have no car?We are here for you.</h5>
        <p>Register yourself at KASS <a href="signup.php" style="text-decoration:none;color:white;"><strong>|Sign-Up|<strong></a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="content"><img src="static/img/logo.png" alt="" style="width:100%;object-fit:cover;"></div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <?php include('includes/footer.php');?>
  </body>
  
</html>