<?php
require('MainController.php');

// Saves Made
$sql_saves_made = "SELECT (SUM(saves_first_half)+SUM(saves_second_half)) FROM appdata LIMIT 1";
$result_saves_made = mysqli_query($conn, $sql_saves_made);
function display_saves_made(){
    global $result_saves_made;
    if(mysqli_num_rows($result_saves_made) > 0){
        while($row = mysqli_fetch_assoc($result_saves_made)){
            return $row['(SUM(saves_first_half)+SUM(saves_second_half))'];
        }
    }else{
        return '0';
    }
}
// Catches Made
$sql_catches_made = "SELECT (SUM(catches_first_half)+SUM(catches_second_half)) FROM appdata LIMIT 1";
$result_catches_made = mysqli_query($conn, $sql_catches_made);
function display_catches_made(){
    global $result_catches_made;
    if(mysqli_num_rows($result_catches_made) > 0){
        while($row = mysqli_fetch_assoc($result_catches_made)){
            return $row['(SUM(catches_first_half)+SUM(catches_second_half))'];
        }
    }else{
        return '0';
    }
}
// Away Games Played
$sql_away_games = "SELECT id FROM `appdata` WHERE is_away = '0'";
$result_away_games = mysqli_query($conn, $sql_away_games);
function display_away_games(){
    global $result_away_games;
    if(mysqli_num_rows($result_away_games) > 1){
        return mysqli_num_rows($result_away_games) . ' Away Games Played';
    }else if(mysqli_num_rows($result_away_games) === 1){
        return '1 Away Game Played';
    }else{
        return '0 Away Games Played';
    }
}
// Home Games Played
$sql_home_games = "SELECT id FROM `appdata` WHERE is_away = '1'";
$result_home_games = mysqli_query($conn, $sql_home_games);
function display_home_games(){
    global $result_home_games;
    if(mysqli_num_rows($result_home_games) > 1){
        return mysqli_num_rows($result_home_games) . ' Home Games Played';
    }else if(mysqli_num_rows($result_home_games) === 1){
        return '1 Home Game Played';
    }else{
        return '0 Home Games Played';
    }
}
?>