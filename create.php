<?php include_once './partials/header.php' ?>

	<section class="container">

		<h1>Create new blog</h1>

		<form action="createblog.php" method="POST">
  			<div class="form-group">
    			<label for="blogTitle">Title</label>
    			<input name="title" type="text" class="form-control" id="blogTitle" placeholder="blog title...">
  			</div>

  			<div class="form-group">
    			<label for="blogContent">Content:</label>
    			<textarea name="content" class="form-control" id="blogContent" rows="10"></textarea>
  			</div>

  			<button type="submit" class="btn btn-primary mb-2">create blog</button>
		</form>

	</section>

<?php include_once './partials/footer.php' ?>