<?php

error_reporting(0);
session_start();  

if(isset($_SESSION['MyValue'])){


$con=mysqli_connect("localhost","root","","blogappdb");
$id=$_GET['id'];
echo $id;
$sql="select * from post where id=".$id."";
$result=mysqli_query($con,$sql);

if($rowval = mysqli_fetch_array($result)){
$id=$rowval['id'];
$title=$rowval['title'];
$CATEGARY=$rowval['category'];


//$photo=$rowval['image'];
$decription=$rowval['decription'];
}
if(isset($_POST['btnupdate']))
{


$sql="update post set title='".$_POST['txtsr']."',category='".$_POST['txtcategory']."',decription='".$_POST['feed']."' where id=".$id."";
if(mysqli_query($con,$sql))
{
    echo '<script>alert("Connection")</script>';
//   // redirect(admin_view.php);
//windows.location.replace("C:/xampp/htdocs/blog/admin_view.php");
}

}
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
  location.replace("admin_view.php");

}
</script>
<form action="update.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
<body>
  
  <div class="limiter">
    <div class="container" >
      
         

<div class="container">
  <H3>UPDATE POST</H3>
  <BR>
  <div class="row">
    <div class="col-sm-2">Title:</div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
       <div class="row">
    <div class="col-sm-10">
      <input type="text" name="txtsr" value="<?php echo $title?>" style="width: 100%; border:solid; border-color:black;"placeholder="Title" >
    </div>
     <div class="col-sm-2"></div>
     
</div>
<br>

 <div class="row">
    <div class="col-sm-2">Category:</div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
       <div class="row">
    <div class="col-sm-10">
      <input type="text" name="txtcategory" value="<?php echo $CATEGARY; ?>" style="width: 100%; border:solid; border-color:black;"placeholder="Category" >
    </div>
     <div class="col-sm-2"></div>
     
</div>
<br>
 <div class="row">
    <div class="col-sm-2">Image:</div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
       <div class="row">
    <div class="col-sm-10">
      <input type="file" name="upload"  style="width: 50%; border:solid; border-color:black;" >
    </div>
     <div class="col-sm-2"></div>
     <br>
</div>
<br>

 <div class="row">
    <div class="col-sm-2">Description of post:</div>
     <div class="col-sm-8"></div>
      <div class="col-sm-2"></div>
</div>
       <div class="row">
    <div class="col-sm-10">
      <textarea type= "text" name="feed" cols="100" rows="3" name="Feedback" placeholder="" value="<?php echo $decription?>" style=" border:solid; border-color:black;"><?php echo $decription?></textarea>
    </div>
     <div class="col-sm-2"></div>
     
</div>
<br>
<div class="row">
    <div class="col-sm-2"><input type="submit" name="btnupdate" value="update" class="btn-info info" style="border-radius: 10px"></div>
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

  header('location:index.php');
}
///session_destroy();

?>