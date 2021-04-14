<!DOCTYPE html>
<html lang="en">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>Smooth navigation</title>

  <!--  Styles  -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="main.js"></script>
  <style>
       

.button {
  display: inline-block;
  background: #00f078;
  color: #fff;
  font-size: 12px;
  text-transform: uppercase;
  padding: 20px 30px;
  border-radius: 5px;
  margin-top:-15px;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
  cursor: pointer;
  -webkit-transition: all ease-in-out 300ms;
  transition: all ease-in-out 300ms;
}
.button:hover {
  box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translate(0px, -10px) scale(1.2);
          transform: translate(0px, -10px) scale(1.2);
}
.button_1 {
  display: inline-block;
  background: #FCD12A;
  color: #fff;
  font-size: 15px;
  text-transform: uppercase;
  padding: 20px 30px;
  border-radius: 5px;
  position:absolute;
  left: 45%;
    top: 50%;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
  cursor: pointer;
  -webkit-transition: all ease-in-out 300ms;
  transition: all ease-in-out 300ms;
}
.button_1:hover {
  box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translate(0px, -10px) scale(1.2);
          transform: translate(0px, -10px) scale(1.2);
}
h1{
      text-align: center;
    margin-bottom: 45px;
    color:white;
    font-size: 50px;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    left:15%;
    top:35%;
}

</style>
</head>

<body>

<?php
include("include/header.php");

?>

<div class="button_1" >book now</div>

     <h1 > Enjoy your holidays with our wheels</h1>

  
  <!--

    Wow! What do you want to build?

    You have so many possibilities right now... Looking for something to kick off?
    How about a simple folio page to show off everything you're going to make!
   
  -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="scripts/index.js"></script>

</body>

</html>