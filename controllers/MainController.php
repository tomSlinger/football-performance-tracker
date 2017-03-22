<?php

// On page load, check to see if there is a database created.
// (By default, this program will look for a locally hosted MySQL database - login credidentials will need to be changed...)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appDb";

// Set global error block message
$error_block_message = "Online & Ready";

// Set global status
$connected;

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check if a database is found
$db_select = mysqli_select_db($conn, $dbname);
if(!$db_select){
    $error_block_message = "ERROR: Database not found";
}else{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check if the table is found
    $sql_check_tbl = "SHOW TABLES FROM $dbname LIKE 'appData'";
    $result_check_tbl = mysqli_query($conn, $sql_check_tbl);
    if(mysqli_num_rows($result_check_tbl) <= 0){
        $error_block_message ="ERROR: Table not found";
    }else{
        // PROCEED WITH EVERYTHING ELSE...
        // At this point, the database has been checked and the table has been checked...
    }
}

// TO DO
//2) GIT



?>