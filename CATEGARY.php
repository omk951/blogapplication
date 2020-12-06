<?php
error_reporting(0);
session_start();  

if(isset($_SESSION['MyValue'])){

 
 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>post</title>
  <meta charset="UTF-8">
 
  <meta name="keywords" content="event, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/themify-icons.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
 <div class=" container" style="border-left: 80px" align="left">
            <input type="submit" name="" onclick="myFunction()" value="BACK" class="btn-info info" style="border-radius: 10px">
        </div>
        <script>
function myFunction() {
  location.replace("admin_view.php")
}
</script>
        <br>       
<form action="cat.php" method="POST" enctype="multipart/form-data">
<body>
  
  <div class="limiter">
    <div class="container" >
      
         <form action="add.php" method="POST" enctype="multipart/form-data">

<div class="container">
  <H3>ADD POST</H3>
  <BR>
  <div class="row">
    <div class="col-sm-2">CATEGARY:</div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
       <div class="row">
    <div class="col-sm-10">
      <input type="text" name="txtcat"  style="width: 100%; border:solid; border-color:black;"placeholder="CATEGARY" >
    </div>
     <div class="col-sm-2"></div>
     
</div>
<br>

 
<br>
<div class="row">
    <div class="col-sm-2"><input type="submit" name="btnsave"  class="btn-info info" style="border-radius: 10px"></div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
        
</div>
  </form>
          <div class="text-center w-full">
            <a class="txt1" href="#">
             
              
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html><?php
}
else
{

  header('location:guestlogin.php');
}
///session_destroy();

?>