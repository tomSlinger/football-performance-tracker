<?php
require('MainController.php');

// Saves Made
$sql_saves_made = "SELECT (SUM(saves_first_half)+SUM(saves_second_half)) FROM appdata";
$result_saves_made = mysqli_query($conn, $sql_saves_made);
// Catches Made

// Away Games Played

// Home Games Played

?>