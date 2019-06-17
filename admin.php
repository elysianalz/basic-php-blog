<?php include_once './connect.php'; ?>	
<?php include_once './partials/header.php'; ?>

	<section class="container">
		<?php 
			if(isset($_SESSION['isLoggedIn'])) {
				echo '
					logged in
					<form method="GET" action="logout.php">
						<button type="submit">logout</button>
					</form>
				'
				;
			} else {
				echo '<form action="admin-login.php" method="POST">
					<div class="form-group">
	    				<label for="username">username</label>
	    				<input type="text" name="username" class="form-control" id="username"/>
	  				</div>

	  				<div class="form-group">
	    				<label for="password">password</label>
	    				<input type="password" name="password" class="form-control" id="password"/>
	  				</div>

	  				<button type="submit" class="btn btn-primary">Login</button>
				</form>';
			}
		?>
	</section>

<?php include_once './partials/footer.php'; ?>