<html>
	<head>
		<?php include('../template/head.php'); ?>
		<!--Favicon-->
		<!--Title-->
	</head>
	<body>
		<?php require('../controllers/MainController.php'); ?>
		<!--Content-->
		<?php include('../template/header.php'); ?>
		<?php if($db_select && mysqli_num_rows($result_check_tbl) > 0){ ?>
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Add a Game</h1>
                        <hr />
                        <div class="alert alert-success" role="alert">
                            <strong>Successfully added Game!</strong>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <strong>Oops! Something went wrong, please try again!</strong>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <form action="../controllers/InsertGameController.php" method="post">
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
                                                <input type="text" class="form-control" id="opponent" name="opponent" placeholder="e.g. Red Lion FC" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_played">Date Played</label>
                                                <input type="date" class="form-control" id="date_played" name="date_played" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="is_away">Home or Away?</label>
                                                <select class="form-control" id="is_away" name="is_away">
                                                    <option value="1">Home Game</option>
                                                    <option value="0">Away Game</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="half_time_score">Half Time Score</label>
                                                <input type="text" class="form-control" id="half_time_score" name="half_time_score" placeholder="e.g. 3 - 0" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="full_time_score">Full Time Score</label>
                                                <input type="text" class="form-control" id="full_time_score" name="full_time_score" placeholder="e.g. 5 - 2" />
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
                                        <input type="number" class="form-control" id="saves_first_half" name="saves_first_half" />
                                    </div>
                                    <div class="form-group">
                                        <label for="catches_first_half">Catches Made</label>
                                        <input type="number" class="form-control" id="catches_first_half" name="catches_first_half" />
                                    </div>
                                    <div class="form-group">
                                        <label for="distribution_first_half">Distribution Rating</label>
                                        <input type="text" class="form-control" id="distribution_first_half" name="distribution_first_half" placeholder="e.g. 6/10" />
                                    </div>
                                    <div class="form-group">
                                        <label for="first_half_comments">Comments</label>
                                        <textarea class="form-control" id="first_half_comments" name="first_half_comments" rows="5"></textarea>
                                    </div>
                                </div>
                                <!--Second Half-->
                                <div class="col-md-6">
                                    <h3>Second Half</h3>
                                    <hr />
                                    <div class="form-group">
                                        <label for="saves_second_half">Saves Made</label>
                                        <input type="number" class="form-control" id="saves_second_half" name="saves_second_half" />
                                    </div>
                                    <div class="form-group">
                                        <label for="catches_second_half">Catches Made</label>
                                        <input type="number" class="form-control" id="catches_second_half" name="catches_second_half" />
                                    </div>
                                    <div class="form-group">
                                        <label for="distribution_second_half">Distribution Rating</label>
                                        <input type="text" class="form-control" id="distribution_second_half" name="distribution_second_half" placeholder="e.g. 6/10" />
                                    </div>
                                    <div class="form-group">
                                        <label for="second_half_comments">Comments</label>
                                        <textarea class="form-control" id="second_half_comments" name="second_half_comments" rows="5"></textarea>
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
                                                <input type="text" class="form-control" id="overall_rating" name="overall_rating" placeholder="e.g. 8/10" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="overall_comments">Overall Comments</label>
                                                <textarea class="form-control" id="overall_comments" name="overall_comments" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Submit-->
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
			</div>
		<?php } ?>
		<!--Footer-->
		<footer>
			<?php include('../template/footer.php'); ?>
		</footer>
	</body>
</html>
