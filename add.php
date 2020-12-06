<?php
if(isset($_POST['btnsave'])){

$filename = $_FILES["upload"] ["name"];

$tempname = $_FILES["upload"] ["tmp_name"];
$f = "images/".$filename;
//echo "$f";
move_uploaded_file($tempname, $f);
echo "<img src='$f' height='100' width='100'>";

}

if($con=mysqli_connect("localhost","root","","blogappdb"))
{

   echo '<script>alert("Connection")</script>';
}
else{
   echo '<script>alert("Not connection")</script>';
}

$sql="insert into post(title,category,decription,image)values('".$_POST['txtsr']."','".$_POST['txtcategory']."','".$_POST['feed']."',('$f'))";
if(mysqli_query($con,$sql))
{
  echo '<script>alert("Record Insert")</script>';
}
?>