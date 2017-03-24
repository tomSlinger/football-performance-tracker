<?php
require('MainController.php');

$game_id = $_GET['id'];

$sql_view_game = "SELECT * FROM appData WHERE id = '$game_id'";
$result_view_game = mysqli_query($conn, $sql_view_game);

if(mysqli_num_rows($result_view_game) > 0){
    $invalidGameId = false;

}else{
    $invalidGameId = true;
}

?>