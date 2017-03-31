<?php
require('MainController.php');

$game_id = $_GET['id'];

$sql_delete_game = "DELETE FROM appData WHERE id='$game_id'";

if(mysqli_query($conn, $sql_delete_game)){
    header('Location: /?delete=success#result');
}else{
    header('Location: /?delete=error#result');
}

?>