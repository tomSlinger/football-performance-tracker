<html>
	<head>
		<?php include('template/head.php'); ?>
		<!--Favicon-->
		<!--Title-->
	</head>
	<body>
		<?php require('controllers/MainController.php'); ?>
		<!--Content-->
		<?php include('template/header.php'); ?>
		<?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<h2>My Recent Performances <small>(0)</small></h2>
						<hr />
					</div>
					<div class="col-md-6 text-center">
						<h2>My Career</h2>
						<hr />
					</div>
					<div class="col-md-12 text-center">
						<h2>Actions</h2>
						<hr />
						<div class="row">
							<div class="col-md-3">
								<a href="/add" class="btn btn-primary" role="button">Add a Game</a>
							</div>
							<div class="col-md-3">
								<a href="#" class="btn btn-warning" role="button">Update a Game</a>
							</div>
							<div class="col-md-3">
								<a href="#" class="btn btn-danger" role="button">Delete a Game</a>
							</div>
							<div class="col-md-3">
								<a href="#" class="btn btn-info" role="button">View all Games</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>


		<!--Footer-->
		<footer>
			<?php include('template/footer.php'); ?>
		</footer>
	</body>
</html>
