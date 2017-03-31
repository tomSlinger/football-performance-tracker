<html>
    <head>
        <?php include('../template/head.php'); ?>
        <!--Favicon-->
        <!--Title-->
    </head>
    <body>
        <?php require('../controllers/MainController.php'); ?>
        <?php require('../controllers/DeleteGameController.php'); ?>
        <!--Content-->
        <?php include('../template/header.php'); ?>
        <?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
            <?php if(isset($_GET['id'])){ ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Delete Game | ID: <?php echo $game_id; ?></h1>
                        </div>
                    </div>
                </div>
            <?php }else{
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="alert alert-danger" role="alert" id="result">
                                <strong>No Game ID Entered. Please try again.</strong>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        <?php } ?>
    </body>
</html>