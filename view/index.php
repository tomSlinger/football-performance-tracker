<?php

?>
<html>
    <head>
        <?php include('../template/head.php'); ?>
        <!--Favicon-->
        <!--Title-->
    </head>
    <body>
        <?php require('../controllers/MainController.php'); ?>
        <?php require('../controllers/ViewGameController.php'); ?>
        <!--Content-->
        <?php include('../template/header.php'); ?>
        <?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>View Game | ID: <?php echo $game_id; ?></h1>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <?php // Display function here ?>
                </div>
			</div>
		<?php } ?>


		<!--Footer-->
		<footer>
			<?php include('../template/footer.php'); ?>
		</footer>
    </body>
</html>