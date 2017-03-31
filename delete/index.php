<html>
    <head>
        <?php include('../template/head.php'); ?>
        <!--Favicon-->
        <!--Title-->
    </head>
    <body>
        <?php require('../controllers/MainController.php'); ?>
        <?php $game_id = $_GET['id']; ?>
        <!--Content-->
        <?php include('../template/header.php'); ?>
        <?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
            <?php if(isset($_GET['id'])){ ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Delete Game | ID: <?php echo $game_id; ?></h1>
                            <hr />
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <form class="" action="../controllers/DeleteGameController.php?id=<?php echo $game_id; ?>" method="post">
                                <h3>Are you sure you want to delete this game?</h3>
                                <p class="text-danger">Note: Once deleted, a game can NOT be restored.</p>
                                <input type="submit" value="Yes" class="btn btn-danger btn-lg" />
                                <a href="javascript:history.go(-1)" class="btn btn-success btn-lg">No</a>
                            </form>
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