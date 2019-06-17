<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>

<section class="container">

<?php 
	$sql = "SELECT title, content, id FROM Blogs WHERE title = '$_GET[title]'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo
        	'
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">'.$row["title"].'</h5>
    				<p class="card-text">'.$row["content"].'</p>
  				</div>
			</div>
			
        	'
        	;
    	}
	} else {
    	echo "0 results";
	}

    if(isset($_SESSION['isLoggedIn'])){
        echo '<a class="btn btn-warning" href="/php blog/edit.php?title='.$row["title"].'">edit</a>
            <a class="btn btn-danger" href="/php blog/deleteblog.php?id='.$row["id"].'">delete</a>';
    }

	$conn->close();
 ?>

</section>

<?php include_once './partials/footer.php'; ?>