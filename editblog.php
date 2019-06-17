<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>

<?php

	$sql = 'UPDATE Blogs SET title="'.$_POST["title"].'", content="'.$_POST["content"].'" WHERE id='.$_POST['id'].'';

	if ($conn->query($sql) === TRUE) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . $conn->error;
	}

	$conn->close();

	header("Location: http://localhost/php%20blog/index.php");
	die();

?>

<?php include_once './partials/footer.php'; ?>