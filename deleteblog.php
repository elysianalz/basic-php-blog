<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>
<?php

	$sql = 'DELETE FROM Blogs WHERE id='.$_GET['id'].'';

	if ($conn->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

?>
<?php include_once './partials/footer.php'; ?>