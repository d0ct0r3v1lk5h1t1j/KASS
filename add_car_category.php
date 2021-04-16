<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Add new car Category</title>
  </head>
    <style>
      body{
        margin:0px;
        padding:0px;
        background:url("static/img/image.jpg");
        background-size :cover;
      }
      label{
  color:white !important;
}

form{
  background-color:rgba(0,0,0,0.75);
  margin:10px!important;
  padding:30px 30px 10px 30px;
}

#submit-btn{
  position:relative;
  bottom:30%;
  background-color:#ffee01;
  color:black;
  border:black;
  margin-top:5px;
}
#submit-btn:hover{
        background-color:#4e5357;
        cursor: pointer;
        color:white;
      } 
.form-control{
  color:#ffffff;
  background-color:#f6f6f600;
  border-radius:1.25rem;
} 
</style>
  <Body>   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/KASS/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/KASS/add_discount.php">DISCOUNT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/KASS/add_car.php">ADD CAR</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ADD NEW
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/KASS/add_car.php">car</a></li>
            <li><a class="dropdown-item" href="/KASS/add_car_category.php">car category</a></li>
            <li><a class="dropdown-item" href="/KASS/add_discount.php">discount coupon</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </div>
    </div>
  </div>
</nav>
<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
        $car_category=$_POST['car_cat'];
        $pcap =$_POST['pcap'];
        $lug_cap =$_POST['lug_cap'];
        $cost_pd =$_POST['cost_pd'];
        $lph =$_POST['lph'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "KASS";
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        $sql ="INSERT INTO car_cat VALUES ('$car_category', $pcap, $lug_cap, $cost_pd, $lph)";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<div class="alert success alert-success alert-dismissible fade show" role="alert">
            <strong>Category registered!</strong>. your car category has been registered successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else{
           // echo "The car was not inserted successfully because of this error ---> ". mysqli_error($conn);
           echo '<div class="alert success alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> Due to some technical issues your request can not be processed.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
          
     }
?>
<div class="container mt-3">
    <form action="add_car_Category.php" method="POST">
    <h1 style="color:#ffee01;text-align:center;margin:0px;padding:0px;">ADD CAR CATEGORY</h1>
        <div style="color:white" class="mb-3">
        <label for="car_cat" class="form-label" ><strong>CAR CATEGORY</strong></label>
        <input type="text" class="form-control" name ='car_cat' id="car_cat" placeholder="Enter car category" maxlength="15">
        </div>
        <div style="color:white" class="mb-3">
        <label for="pcap" class="form-label" ><strong>PESSENGER CAPACITY</strong></label>
        <input type="number" class="form-control" name='pcap' id="pcap" placeholder="Enter pessenger capacity" min="0" max="25">
        </div>
        <div style="color:white" class="mb-3">
        <label for="lug_cap" class="form-label"><strong>LUGGAGE CAPACITY(litre)</strong></label>
        <input type="number" class="form-control" id="lug_cap" name="lug_cap" placeholder="Enter Luggage Capacity" min="0" max="10000">
        </div>
        <div style="color:white" class="mb-3">
        <label for="cost_pd" class="form-label" ><strong>COST PER DAY(Rs)</strong></label>
        <input type="number" class="form-control" name='cost_pd' id="cost_pd" placeholder="Enter cost per day" min="0" max="1000000">
        </div>
        <div style="color:white" class="mb-3">
        <label for="lph" class="form-label" ><strong>LATE FEE PER HOUR(Rs)</strong></label>
        <input type="number" class="form-control" name='lph' id="lph" placeholder="Enter late fee per hour" min="0" max="10000">
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg" id="submit-btn">Submit</button>
        </div>
    </form>
</div>
<?php include('includes/footer.php');?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>