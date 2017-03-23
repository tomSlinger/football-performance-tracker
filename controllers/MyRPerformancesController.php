<?php
require('MainController.php');

// Get number of recent games - max can be 4...
$sql_recent_games_played = "SELECT id FROM appdata LIMIT 4";
$result_recent_games_played = mysqli_query($conn, $sql_recent_games_played);

function display_recent_games_played(){
    global $result_recent_games_played;
    if(mysqli_num_rows($result_recent_games_played) === 0){
        return '0';
    }else{
        return mysqli_num_rows($result_recent_games_played);
    }
}

// Get info for cards view - last 4 games...
$sql_recent_performances = "SELECT * FROM appdata ORDER BY date_played DESC LIMIT 4";
$result_recent_performances = mysqli_query($conn, $sql_recent_performances);

function display_recent_performances(){
    global $result_recent_performances;
    if(mysqli_num_rows($result_recent_performances) > 0){
        while($row = mysqli_fetch_assoc($result_recent_performances)){
            // Convert mysql date to unix
            $date_played_unix = strtotime($row['date_played']);
            // Convert unix time to UK date
            $date_played_uk = date('d-m-Y', $date_played_unix);
            echo "<div class='col-md-6'>";
                echo "<div class='card'>";
                    // TO DO
                    echo "<h4 class='card-header'>". $row['opponent'] ."</h4>";
                    echo "<div class='card-block'>";
                        echo "<p class='card-text'>Date: ". $date_played_uk ."</p>";
                        echo "<p class='card-text'>Overall Rating ". $row['overall_rating'] ."</p>";
                        ?>
                        <a href="/update?id=<?php echo $row['id']; ?>" class="btn btn-warning" role="button">Update</a>
                        <a href="/delete?id=<?php echo $row['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                        <?php
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }else{
        // No games played
        echo "<div class='col-md-12'>";
            echo "<p>No Games Played...</p>";
            echo "<a href='/add' class='btn btn-primary' role='button'>Add a Game</a>";
        echo "</div>";
    }
}

?>