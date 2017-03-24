<?php
require('MainController.php');

$game_id = $_GET['id'];

// Global Variables to be used to display the values
$opponent;
$date_played;
$is_away;
$ht_score;
$ft_score;

$fh_saves;
$fh_catches;
$fh_distribution;
$fh_comments;

$sh_saves;
$sh_catches;
$sh_distribution;
$sh_comments;

$o_rating;
$o_comments;

$sql_view_game = "SELECT * FROM appData WHERE id = '$game_id'";
$result_view_game = mysqli_query($conn, $sql_view_game);

if(mysqli_num_rows($result_view_game) > 0){
    $invalidGameId = false;
    while($row = mysqli_fetch_assoc($result_view_game)){
    global $opponent;
    global $date_played;
    global $is_away;
    global $ht_score;
    global $ft_score;
    global $fh_saves;
    global $fh_catches;
    global $fh_distribution;
    global $fh_comments;
    global $sh_saves;
    global $sh_catches;
    global $sh_distribution;
    global $sh_comments;
    global $o_rating;
    global $o_comments;

    $opponent = $row['opponent'];
    $date_played = $row['date_played'];
    $is_away = $row['is_away'];
    $ht_score = $row['half_time_score'];
    $ft_score = $row['full_time_score'];
    $fh_saves = $row['saves_first_half'];
    $fh_catches = $row['catches_first_half'];
    $fh_distribution = $row['distribution_first_half'];
    $fh_comments = $row['first_half_comments'];
    $sh_saves = $row['saves_second_half'];
    $sh_catches = $row['catches_second_half'];
    $sh_distribution = $row['distribution_second_half'];
    $sh_comments = $row['second_half_comments'];
    $o_rating = $row['overall_rating'];
    $o_comments = $row['overall_comments'];
    }

}else{
    $invalidGameId = true;
}

?>