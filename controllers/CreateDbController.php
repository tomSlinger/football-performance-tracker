<?php
require('MainController.php');

if(!$db_select){
    $sql_create_db = "CREATE DATABASE appDb";
    if(mysqli_query($conn, $sql_create_db)){
        // create the table,then redirect
        require('../models/CreateTableModel.php');
        if(mysqli_query($conn, $sql_create_tbl)){
            header('Location: /?error=success');
        }
        else{
            header('Location: /?error=error');
        }
    }else{
        header('Location: /?error=error');
    }
}else{
    header('Location: /?error=dbexists');
}

?>