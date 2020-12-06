<?php
session_start();
if(isset($_POST['vv'])){
$_SESSION['MyValue']=3;

 header('location:S2.php');
        
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		h
	</title>
</head>
<form action="s1.php" method="post">
<body>
<input type="submit" name="vv">
</body>
</form>
</html>>