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
    }
}
// Away Games Played

// Home Games Played

?>