<html>
    <head>
        <?php include('../../template/head.php'); ?>
        <!--Favicon-->
        <!--Title-->
    </head>
    <body>
        <?php require('../../controllers/MainController.php'); ?>
        <!--Content-->
        <?php include('../../template/header.php'); ?>
        <?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php require('../../controllers/ViewAllGamesController.php'); ?>
                        <h1>View all Games</h1>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date Played</th>
                                    <th>Opponent</th>
                                    <th>Final Score</th>
                                    <th>Overall Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php display_all_games(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		<?php } ?>


		<!--Footer-->
		<footer>
			<?php include('../../template/footer.php'); ?>
		</footer>
    </body>
</html>