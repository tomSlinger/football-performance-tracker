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
                        <small>Sorted by: Date Played</small>
                        <hr />
                        <?php
                        if(isset($_GET['result']) || $_GET['delete']){
                            if($_GET['result'] === 'success' || $_GET['delete'] === 'success'){
                                ?>
                                <div class="alert alert-success" role="alert" id="result">
                                    <?php if($_GET['result'] === 'success'){
                                        ?>
                                        <strong>Successfully added Game!</strong>
                                    <?php
                                    }else{
                                        ?>
                                        <strong>Successfully deleted Game!</strong>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }else if($_GET['result'] === 'error' || $_GET['delete'] === 'error'){
                                ?>
                                <div class="alert alert-danger" role="alert" id="result">
                                    <strong>Oops! Something went wrong, please try again!</strong>
                                </div>
                            <?php
                            }else{
                                ?>
                                <div class="alert alert-danger" role="alert" id="result">
                                    <strong>Oops! Something went wrong, an unknown error occurred.</strong>
                                </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Date Played</th>
                                    <th class="text-center">Opponent</th>
                                    <th class="text-center">Final Score</th>
                                    <th class="text-center">Overall Rating</th>
                                    <th class="text-center">Actions</th>
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