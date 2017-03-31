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
                        <h1>Update Game | ID: <?php echo $game_id; ?></h1>
                        <hr />
                        <?php
                        if(isset($_GET['result'])){
                            if($_GET['result'] === 'success'){
                                ?>
                                <div class="alert alert-success" role="alert" id="result">
                                    <strong>Successfully updated Game!</strong>
                                </div>
                            <?php
                            }else if($_GET['result'] === 'error'){
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
                <div class="row text-center">
                    <div class="col-md-12">
                        <form action="../controllers/UpdateGameController.php?id=<?php echo $game_id; ?>" method="post">
                            <div class="row">
                                <!--Game Information-->
                                <div class="col-md-12">
                                    <h3>Game Information</h3>
                                    <small>Note: When entering scores, enter home team score first, then away team.</small>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="opponent">Opponent</label>
                                                <input type="text" class="form-control" id="opponent" name="opponent" value="<?php echo $opponent; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_played">Date Played</label>
                                                <input type="date" class="form-control" id="date_played" name="date_played" value="<?php echo $date_played; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="is_away">Home or Away?</label>
                                                <select class="form-control" id="is_away" name="is_away">
                                                    <option value="1" <?php if($is_away === '1'){ ?> selected="selected"  <?php } ?>>Home Game</option>
                                                    <option value="0" <?php if($is_away === '0'){ ?> selected="selected"  <?php } ?>>Away Game</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="half_time_score">Half Time Score</label>
                                                <input type="text" class="form-control" id="half_time_score" name="half_time_score" value="<?php echo $ht_score; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="full_time_score">Full Time Score</label>
                                                <input type="text" class="form-control" id="full_time_score" name="full_time_score" value="<?php echo $ft_score; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--First Half-->
                                <div class="col-md-6">
                                    <h3>First Half</h3>
                                    <hr />
                                    <div class="form-group">
                                        <label for="saves_first_half">Saves Made</label>
                                        <input type="number" class="form-control" id="saves_first_half" name="saves_first_half" value="<?php echo $fh_saves; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="catches_first_half">Catches Made</label>
                                        <input type="number" class="form-control" id="catches_first_half" name="catches_first_half" value="<?php echo $fh_catches; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="distribution_first_half">Distribution Rating</label>
                                        <input type="text" class="form-control" id="distribution_first_half" name="distribution_first_half" value="<?php echo $fh_distribution; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="first_half_comments">Comments</label>
                                        <textarea class="form-control" id="first_half_comments" name="first_half_comments" rows="5"><?php echo $fh_comments; ?></textarea>
                                    </div>
                                </div>
                                <!--Second Half-->
                                <div class="col-md-6">
                                    <h3>Second Half</h3>
                                    <hr />
                                    <div class="form-group">
                                        <label for="saves_second_half">Saves Made</label>
                                        <input type="number" class="form-control" id="saves_second_half" name="saves_second_half" value="<?php echo $sh_saves; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="catches_second_half">Catches Made</label>
                                        <input type="number" class="form-control" id="catches_second_half" name="catches_second_half" value="<?php echo $sh_catches; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="distribution_second_half">Distribution Rating</label>
                                        <input type="text" class="form-control" id="distribution_second_half" name="distribution_second_half" value="<?php echo $sh_distribution; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="second_half_comments">Comments</label>
                                        <textarea class="form-control" id="second_half_comments" name="second_half_comments" rows="5"><?php echo $sh_comments; ?></textarea>
                                    </div>
                                </div>
                                <!--Overall-->
                                <div class="col-md-12">
                                    <h3>Overall</h3>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="overall_rating">Overall Rating</label>
                                                <input type="text" class="form-control" id="overall_rating" name="overall_rating" value="<?php echo $o_rating; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="overall_comments">Overall Comments</label>
                                                <textarea class="form-control" id="overall_comments" name="overall_comments" rows="5"><?php echo $o_comments; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Submit-->
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-primary  btn-lg" />
                                    <a href="/delete?id=<?php echo $game_id; ?>" class="btn btn-danger btn-lg" role="button">Delete Game</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </body>
</html>