<?php
require('MainController.php');
require('../models/CreateTableModel.php');

if(mysqli_num_rows($result_check_tbl) <= 0){
    mysqli_query($conn, $sql_create_tbl);
    header('Location: /?error=success');
}else{
    header('Location: /?error=dbexists');
}


?>