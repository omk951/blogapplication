
<?php

$con=mysqli_connect("localhost","root","","blogappdb");
$id=$_GET['id'];
$sql="delete from post where id ='$id'";
if(mysqli_query($con,$sql)){

	echo '<script>alert("Record Delete")</script>';

	
}

?>
<?php
 header('location:admin_view.php');?>
  
