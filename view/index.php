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
                <?php if(!$invalidGameId){ ?>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="row">
                            <!--Game Information-->
                            <div class="col-md-12">
                                <h3>Game Information</h3>
                                <small>Note: First Score is Home Team, Second Score is Away Team.</small>
                                <hr />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="opponent">Opponent</label>
                                            <input type="text" class="form-control" id="opponent" name="opponent" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_played">Date Played</label>
                                            <input type="date" class="form-control" id="date_played" name="date_played" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="is_away">Home or Away?</label>
                                            <select class="form-control" id="is_away" name="is_away" disabled>
                                                <option value="1">Home Game</option>
                                                <option value="0">Away Game</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="half_time_score">Half Time Score</label>
                                            <input type="text" class="form-control" id="half_time_score" name="half_time_score" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="full_time_score">Full Time Score</label>
                                            <input type="text" class="form-control" id="full_time_score" name="full_time_score" disabled />
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
                                    <input type="number" class="form-control" id="saves_first_half" name="saves_first_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="catches_first_half">Catches Made</label>
                                    <input type="number" class="form-control" id="catches_first_half" name="catches_first_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="distribution_first_half">Distribution Rating</label>
                                    <input type="text" class="form-control" id="distribution_first_half" name="distribution_first_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="first_half_comments">Comments</label>
                                    <textarea class="form-control" id="first_half_comments" name="first_half_comments" rows="5" disabled></textarea>
                                </div>
                            </div>
                            <!--Second Half-->
                            <div class="col-md-6">
                                <h3>Second Half</h3>
                                <hr />
                                <div class="form-group">
                                    <label for="saves_second_half">Saves Made</label>
                                    <input type="number" class="form-control" id="saves_second_half" name="saves_second_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="catches_second_half">Catches Made</label>
                                    <input type="number" class="form-control" id="catches_second_half" name="catches_second_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="distribution_second_half">Distribution Rating</label>
                                    <input type="text" class="form-control" id="distribution_second_half" name="distribution_second_half" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="second_half_comments">Comments</label>
                                    <textarea class="form-control" id="second_half_comments" name="second_half_comments" rows="5" disabled></textarea>
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
                                            <input type="text" class="form-control" id="overall_rating" name="overall_rating" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="overall_comments">Overall Comments</label>
                                            <textarea class="form-control" id="overall_comments" name="overall_comments" rows="5" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
			</div>
            <?php }else{ ?>
            <div class="row text-center">
                <div class="col-md-12">
                    <h3>Invalid Game ID, please try again.</h3>
                </div>
            </div>
            <?php } ?>
		<?php } ?>
    </div>


		<!--Footer-->
		<footer>
			<?php include('../template/footer.php'); ?>
		</footer>
    </body>
</html>