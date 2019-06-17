<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>
<?php

	$sql = 'SELECT username, password 
	FROM admin 
	WHERE username="'.$_POST["username"].'" 
	AND password="'.$_POST["password"].'"';

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	$_SESSION["isLoggedIn"] = true;
    	$conn->close();
    	header("Location: http://localhost/php%20blog/index.php");
		die();
	} else {
    	echo "0 results";
	}

	$conn->close();

 ?>

<?php include_once './partials/footer.php'; ?>