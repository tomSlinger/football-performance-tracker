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
					<!--PUT FEEDBACK FROM DELETE SUCCESS HERE-->
					<?php
					if(isset($_GET['delete'])){
						if($_GET['delete'] === 'success'){
							?>
							<div class="col-md-12">
								<div class="alert alert-success" role="alert" id="result">
                                	<strong>Successfully deleted game!</strong>
                            	</div>
							</div>
						<?php
						}else if($_GET['delete'] === 'error'){
							?>
							<div class="col-md-12">
								<div class="alert alert-danger" role="alert" id="result">
									<strong>Error deleting game, please try again!</strong>
								</div>
							</div>
						<?php
						}else{
							?>
							<div class="col-md-12">
								<div class="alert alert-danger" role="alert" id="result">
									<strong>Error deleting game, an unknown error occurred.</strong>
								</div>
							</div>
						<?php
						}
					}
					?>
					<div class="col-md-6 text-center">
						<?php require('controllers/MyRPerformancesController.php'); ?>
						<h2>My Recent Performances <small>(<?php echo display_recent_games_played(); ?>)</small></h2>
						<hr />
						<div class="row">
							<?php display_recent_performances(); ?>
						</div>
					</div>
					<div class="col-md-6 text-center">
						<?php require('controllers/MyCareerController.php'); ?>
						<h2>My Career</h2>
						<hr />
						<div class="row">
							<div class="col-md-6">
								<div class="card card-outline-info mb-3 text=center">
									<div class="card-block">
										<h5><?php echo display_saves_made(); ?> Saves Made</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-outline-info mb-3 text=center">
									<div class="card-block">
										<h5><?php echo display_catches_made(); ?> Catches Made</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-outline-info mb-3 text=center">
									<div class="card-block">
										<h5><?php echo display_away_games(); ?></h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-outline-info mb-3 text=center">
									<div class="card-block">
										<h5><?php echo display_home_games(); ?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<h2>Actions</h2>
						<hr />
						<div class="row">
							<div class="col-md-3">
								<a href="/add" class="btn btn-primary" role="button">Add a Game</a>
							</div>
							<div class="col-md-3">
								<a href="/view/all" class="btn btn-warning" role="button">Update a Game</a>
							</div>
							<div class="col-md-3">
								<a href="/view/all" class="btn btn-danger" role="button">Delete a Game</a>
							</div>
							<div class="col-md-3">
								<a href="/view/all" class="btn btn-info" role="button">View all Games</a>
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
