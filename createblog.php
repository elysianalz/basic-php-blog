<?php include_once 'connect.php'; ?>

<?php 

	$sql = "INSERT INTO Blogs (title, content) VALUES ('$_POST[title]' ,'$_POST[content]')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	header("Location: http://localhost/php%20blog/index.php");
	die();