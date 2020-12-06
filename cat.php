<?php

$con=mysqli_connect("localhost","root","","blogappdb");

$sql="insert into CATEGARY(CATEGARY)values('".$_POST['txtcat']."')";
if(mysqli_query($con,$sql))
{
  echo '<script>alert("Record Insert")</script>';
  header('location:CATEGARY.php');
}

?>