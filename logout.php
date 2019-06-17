<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>
<?php
	session_unset(); 
	session_destroy(); 
	$conn->close();
	header("Location: http://localhost/php%20blog/admin.php");
	die();
 ?>
<?php include_once './partials/footer.php'; ?>