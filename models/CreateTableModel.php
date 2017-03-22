<?php
$sql_create_tbl = "CREATE TABLE appDb.appData (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    date_played DATE,
    opponent VARCHAR(20),
    half_time_score VARCHAR(10),
    full_time_score VARCHAR(10),
    is_away BOOLEAN,
    saves_first_half INT(6),
    catches_first_half INT(6),
    distribution_first_half VARCHAR(10),
    first_half_comments VARCHAR(50),
    saves_second_half INT(6),
    catches_second_half INT(6),
    distribution_second_half VARCHAR(10),
    second_half_comments VARCHAR(50),
    overall_rating VARCHAR(10),
    overall_comments VARCHAR(100)
)";
?>