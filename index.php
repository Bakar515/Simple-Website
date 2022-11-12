<?php 
session_start();
echo

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	
	<!-- <?php header("Location: Gallery-page/index.html"); ?> -->

	Hye, <?php echo $user_data['user_name']; ?>

</body>
</html>