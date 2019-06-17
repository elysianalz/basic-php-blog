<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>

	<?php 
	$sql = "SELECT title, content, id FROM Blogs WHERE title = '$_GET[title]'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo 
        	'
        	<section class="container">

				<form action="editblog.php" method="POST">

					 <div class="form-group">
    					<label for="blogTitle">Title</label>
    					<input name="title" type="text" class="form-control" id="blogTitle" value="'.$row['title'].'">
  					</div>

  					<div class="form-group">
    					<label for="blogContent">Content:</label>
    					<textarea name="content" class="form-control" id="blogContent" rows="10">'.$row["content"].'</textarea>
  					</div>

  					<div class="form-group">
  						<input name="id" class="form-control" type="hidden" value="'.$row['id'].'" readonly>
  					</div>
  					
  					<button type="submit" class="btn btn-primary mb-2">update blog</button>

				</form>

			</section>

        	';
    	}
	} else {
    	echo "0 results";
	}

		$conn->close();
 	?>
	
	

<?php include_once './partials/footer.php'; ?>