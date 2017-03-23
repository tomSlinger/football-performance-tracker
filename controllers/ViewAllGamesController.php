<?php
require('MainController.php');

$sql_view_all = "SELECT * FROM appdata ORDER BY date_played DESC";
$result_view_all = mysqli_query($conn, $sql_view_all);

function display_all_games(){
    global $result_view_all;
    if(mysqli_num_rows($result_view_all) > 0){
        while($row = mysqli_fetch_assoc($result_view_all)){
            // Convert mysql date to unix
            $date_played_unix = strtotime($row['date_played']);
            // Convert unix time to UK date
            $date_played_uk = date('d-m-Y', $date_played_unix);
            // Check if Away or Home Game
            if($row['is_away'] === '1'){
                $is_away = "H";
            }else{
                $is_away = "A";
            }
            echo "<tr>";
                echo "<th scope='row'>". $row['id'] . "</th>";
                echo "<td>". $date_played_uk . "</td>";
                echo "<td>". $row['opponent'] . " " . "(". $is_away .")" .  "</td>";
                echo "<td>". $row['full_time_score'] . "</td>";
                echo "<td>". $row['overall_rating'] . "</td>";
                ?>
                <td>
                    <a href="/view?id=<?php echo $row['id']; ?>" class="btn btn-info" role="button">View</a>
                    <a href="/update?id=<?php echo $row['id']; ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="/delete?id=<?php echo $row['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
                <?php
            echo "</tr>";
        }
    }
}

?>