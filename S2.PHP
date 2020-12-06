<?php
session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>jj</title>
</head>
<body>
<?php
 if(isset($_SESSION['MyValue'])){
echo $_SESSION['MyValue'];
}
?>
</body>
</html>