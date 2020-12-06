

<?php

$con=mysqli_connect("localhost","root","","blogappdb");
$id=$_GET['no'];
$sql="delete from categary where no ='$id'";
if(mysqli_query($con,$sql)){

	echo '<script>alert("Record Delete")</script>';

	
}

?>
<?php
 header('location:viewcat.php');?>
  
