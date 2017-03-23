<?php

require('MainController.php');

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

$sql_add_game = "INSERT INTO appData (date_played, opponent, half_time_score, full_time_score, is_away, saves_first_half, catches_first_half, distribution_first_half, first_half_comments, saves_second_half, catches_second_half, distribution_second_half, second_half_comments, overall_rating, overall_comments)
                VALUES ('$date_played', '$opponent', '$ht_score', '$ft_score', '$is_away', '$fh_saves', '$fh_catches', '$fh_distribution', '$fh_comments', '$sh_saves', '$sh_catches', '$sh_distribution', '$sh_comments', '$o_rating', '$o_comments')";

if(mysqli_query($conn, $sql_add_game)){
    header('Location: /add/?result=success#result');
}else{
    header('Location: /add/?result=error#result');
}

?>