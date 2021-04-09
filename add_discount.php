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
  
  <body style="background-color:grey;">
  <?php include('includes/sqlconn.php');
  ?>

  <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dcode = $_POST['dcode'];
        $dname = $_POST['dname'];
        $dper =$_POST['Dper'];
        $expiry = $_POST['Expiry'];
        $sql = "INSERT INTO discount VALUES ('$dcode','$dname',".$dper.", '$expiry')";
        $result = mysqli_query($conn, $sql);
        
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>New dicount coupon has been added</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    else{
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>The record was not inserted successfully because of this error --->'. mysqli_error($conn).'</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
      // Submit these to a database
    }

    
?>



<div class="container mt-3">


<h1 style='text-align:center'> Add New Discount Coupon </h1>

<div class="container mt-5">


  <form action="/KASS/add_discount.php" method="POST">
  <div class="mb-5">
  <label for="dcode" class="form-label" ><strong>Discount Code</strong></label>
  <input type="text" class="form-control" name ='dcode' id="dcode" placeholder="Example Dicount Code" maxlength="10">
</div>
<div class="mb-5">
  <label for="dname" class="form-label" ><strong>Discount name </strong></label>
  <input type="text" class="form-control" name='dname' id="dname" placeholder="Enter Discount name" maxlength="20">
</div>
<div class="mb-5 text-center">
<label for="Dper"><strong>Discount Percentage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
<input type="number" id="Dper" name="Dper" min="0" max="100">
</div>
<div class="mb-5 text-center">
<label for="Expiry"><strong>Expiry:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
<input type="date" id="Expiry" name="Expiry">
</div>
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
</div>
</div>
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