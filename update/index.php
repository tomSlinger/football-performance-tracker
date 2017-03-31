<html>
    <head>
        <?php include('../template/head.php'); ?>
        <!--Favicon-->
        <!--Title-->
    </head>
    <body>
        <?php require('../controllers/MainController.php'); ?>
        <?php require('../controllers/UpdateGameController.php'); ?>
        <!--Content-->
        <?php include('../template/header.php'); ?>
        <?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Update Game | ID: <?php echo $game_id; ?></h1>
                    </div>
                </div>
            </div>
        <?php } ?>
    </body>
</html>