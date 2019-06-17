<?php include_once 'connect.php'; ?>

<?php 
	
	$sql = "SELECT title, content FROM Blogs";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo
        	'<div class="card" style="margin-bottom: 10px;">
  				<div class="card-body">
    				<h5 class="card-title">' . $row["title"] . '</h5>
    				<p class="card-text">'. substr($row["content"],0, 100) . '...</p>
    				<form action="/php blog/readblog.php?title='.$row["title"].'" method="POST">
    					<button type="submit" class="btn btn-primary">read</button>
    				</form>
  				</div>
			</div>'
        	;
    	}
	} else {
    	echo "0 results";
	}
	
	$conn->close();