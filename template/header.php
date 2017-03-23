<header>
    <div class="container-fluid text-center">
        <!--Navigation-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">FPT</a>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add">Add a Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/update">Update a Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/delete">Delete a Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view">View all Games</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Error Block Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <p>Welcome to the Football Performance Tracker!</p>
                    <strong>Status: 
                        <?php 
                        if(isset($_GET['error'])){
                            if($_GET['error'] === 'error'){
                                echo 'ERROR: Error creating Database / Table. Please try again.';
                            }else if($_GET['error'] === 'dbexists'){
                                echo 'ERROR: Database / Table already exists.';
                            }else if($_GET['error'] === 'success'){
                                echo 'SUCCESS: Database / Table successfully created!';
                            }else{
                                echo 'ERROR: Unknown error. Please try again.';
                            }
                        }else{
                            echo $error_block_message;
                        }
                        ?>
                    </strong>
                </div>
            </div>
            
        </div>
        <!--Top Section Row-->
        <?php
        if(!$db_select){
            // If no database is found...
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <p class="lead">It appears you don't have a database setup for this application...</p>
                        <p class="lead">
                            <form action="../controllers/CreateDbController.php" method="post">
                                <input type="submit" class="btn btn-primary btn-lg" role="button" value="Create Database" />
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        <?php
        }else{
            // If the database is found...
            // Check if the table is created...
            if(mysqli_num_rows($result_check_tbl) <= 0){
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <p class="lead">It appears you don't have a table setup in your database...</p>
                            <p class="lead">
                                <form action="../controllers/CreateTblController.php" method="post">
                                    <input type="submit" class="btn btn-primary btn-lg" role="button" value="Create Table" />
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }else{
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1 class="text-center">Football Performance Tracker</h1>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                <p class="text-success">Successfully connected to Database and Table!</p>
                                <p>This application will allow you to track and review your football performances.</p>
                                <p>All information entered on this site is stored locally, on your own PC.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p style="margin-bottom:0;">
                                        <a href="#" class="btn btn-danger" role="button">Click here to delete ALL data</a>
                                    </p>
                                    <small>
                                        Be aware, this will delete the entire application database and table...
                                    </small>
                                    <p style="margin-top:10px;">
                                        <a href="https://github.com/tomSlinger" class="btn btn-success" role="button"><i class="fa fa-github fa-lg" aria-hidden="true"></i> View Source</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
</header>