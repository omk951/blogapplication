

<?php

session_start();
$conn=mysqli_connect("localhost","root","","blogappdb");

if(isset($_POST['btnsub'])){
  $sql="select * from login  where  user ='".$_POST['txtname']."'and PASSWORD='".$_POST['txtpaass']."'";
$result=mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);


  if($row["user"]==$_POST['txtname'] && $row["PASSWORD"]==$_POST['txtpaass']){
  
 //  < meta http-equiv="Location" content="admin.php">

  	$name=$row['user'];
  	$_SESSION['MyValue']=$name;;
        header('location:admin_view.php');
}
        else
        {
         

      echo "<script> alert('Insert Invalid ')</script>";
        }
         
    
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
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
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
 


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
	<div class="box" style="background-color:">
			<!-- logo -->
			
			</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<form action="index.php" method="POST">
	<nav class="nav-section">
		<div class="container">
			
			
		</div>
	</nav>
		<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
		
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad ">
		<div class="container" style="width: 50%">
	
			
				<div class="section-title text-center">
					<h3>User Login</h3>
					
				</div>
				<form class="comment-form --contact">
					 <div class="row"  >
                <div class="col-sm-2"></div>
                 <div class="col-sm-3">
                     <label>Name</label>
                 </div>
                  <div class="col-sm-5">
                     <input type="text" name="txtname"  required="name" style="width: 100%"></div>
                   <div class="col-sm-2"></div>
                </div>
                <br>
 <div class="row"  >
                <div class="col-sm-2"></div>
                 <div class="col-sm-3">
                     <label>Passwoed</label>
                 </div>
                  <div class="col-sm-5">
                     <input type="Password" name="txtpaass"  required="Password" style="width: 100%"></div>
                   <div class="col-sm-2"></div>
                </div>
        <br>
        
                   <div class="row">
                <div class="col-sm-2"></div>
                
<div class="col-sm-8">
                     <input type="Submit" name="btnsub" value="LOGIN" class="btn btn-info" style="width: 100%; border-radius: 10px;background-color:lightcoral "></div>
                  <div class="col-sm-2"></div>
                 </div>
                	</div>
					</div>
				</form>
			</div>
			<br><br><br>
		<div class=" container"  style="border-left: 80px" align="left">
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-5">
					<h4> If You Guest</h4><br><input type="submit" name="" onclick="myFunction()" value="GUEST" class="btn-info info" style="border-radius: 10px;width: 20%"></div>
				<div class="col-sm-5"></div>
			</div>
            
        </div>
        <script>
function myFunction() {
  location.replace("guestlogin.php");

}
</script><
			</div>
			<br><br>
					<!-- Header section end -->

	


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>