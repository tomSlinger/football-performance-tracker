<?php
require('MainController.php');
require('ViewGameController.php');

$game_id = $_GET['id'];

// Game Info
$date_played = mysqli_real_escape_string($conn, $_REQUEST['date_played']);
$opponent = mysqli_real_escape_string($conn, $_REQUEST['opponent']);
$is_away = mysqli_real_escape_string($conn, $_REQUEST['is_away']);
$ht_score = mysqli_real_escape_string($conn, $_REQUEST['half_time_score']);
$ft_score = mysqli_real_escape_string($conn, $_REQUEST['full_time_score']);

// First half
$fh_saves = mysqli_real_escape_string($conn, $_REQUEST['saves_first_half']);
$fh_catches = mysqli_real_escape_string($conn, $_REQUEST['catches_first_half']);
$fh_distribution = mysqli_real_escape_string($conn, $_REQUEST['distribution_first_half']);
$fh_comments = mysqli_real_escape_string($conn, $_REQUEST['first_half_comments']);

// Second Half
$sh_saves = mysqli_real_escape_string($conn, $_REQUEST['saves_second_half']);
$sh_catches = mysqli_real_escape_string($conn, $_REQUEST['catches_second_half']);
$sh_distribution = mysqli_real_escape_string($conn, $_REQUEST['distribution_second_half']);
$sh_comments = mysqli_real_escape_string($conn, $_REQUEST['second_half_comments']);

// Overall
$o_rating = mysqli_real_escape_string($conn, $_REQUEST['overall_rating']);
$o_comments = mysqli_real_escape_string($conn, $_REQUEST['overall_comments']);

// Test getting the results...

// echo '<h1>Game Information</h1>';
// echo 'Date Played: ' . $date_played . '<br />';
// echo 'Opponent Name: ' . $opponent . '<br />';
// echo 'Home(1) or Away(0): ' . $is_away . '<br />';
// echo 'Half Time Score: ' . $ht_score . '<br />';
// echo 'Full Time Score: ' . $ft_score . '<br />';

// echo '<h1>First Half</h1>';
// echo 'Saves Made: ' . $fh_saves . '<br />';
// echo 'Catches Made: ' . $fh_catches . '<br />';
// echo 'Distribution: ' . $fh_distribution . '<br />';
// echo 'Comments: ' . $fh_comments . '<br />';

// echo '<h1>Second Half</h1>';
// echo 'Saves Made: ' . $sh_saves . '<br />';
// echo 'Catches Made: ' . $sh_catches . '<br />';
// echo 'Distribution: ' . $sh_distribution . '<br />';
// echo 'Comments: ' . $sh_comments . '<br />';

// echo '<h1>Overall</h1>';
// echo 'Overall Rating: ' . $o_rating . '<br />';
// echo 'Overall Comments: ' . $o_comments . '<br />';

$sql_update_game = "UPDATE appData SET date_played='$date_played', opponent='$opponent', half_time_score='$ht_score', full_time_score='$ft_score', is_away='$is_away', saves_first_half='$fh_saves', catches_first_half='$fh_catches', distribution_first_half='$fh_distribution', first_half_comments='$fh_comments', saves_second_half='$sh_saves', catches_second_half='$sh_catches', distribution_second_half='$sh_distribution', second_half_comments='$sh_comments', overall_rating='$o_rating', overall_comments='$o_comments' WHERE id='$game_id'";

if(mysqli_query($conn, $sql_update_game)){
    header('Location: /update?id='.$game_id.'&result=success#result');
}else{
    header('Location: /update?id='.$game_id.'&result=error#result');
}

?>