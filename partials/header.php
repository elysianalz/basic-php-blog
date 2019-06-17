<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--style sheets -->
	<link rel="stylesheet" type="text/css" href="./public/stylesheets/styles.css">

    <title>The Lazy Programmer</title>
  </head>
  <body>

  	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">

		<a class="navbar-brand" href="#">The Lazy Programmer</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav">
	    		<li class="nav-item active">
	        		<a class="nav-link" href="/php blog/index.php">Home <span class="sr-only">(current)</span></a>
	      		</li>
	      		<?php if(isset($_SESSION["isLoggedIn"])){
	      			echo '<li class="nav-item">
	        				<a class="nav-link" href="/php blog/create.php">Create</a>
	      				</li>';
	      			}
	      		?>
	    	</ul>
	  	</div>

	</nav>