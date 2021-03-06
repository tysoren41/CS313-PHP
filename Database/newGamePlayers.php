<!DOCTYPE html>
<html>
    <head>
        <title>New Game</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
        <script type="text/javascript" src="newGamePlayers.js"></script>
    </head>
    <body>
        <div id="header">
            <h1 id="name">Tyler Sorenson</h1>
            <nav id="navigation">
                <ul>
                    <li><a href="http://php-tsorenson.rhcloud.com/projects.html">Projects</a></li>
                    <li><a href="https://www.byui.edu">BYU - Idaho</a></li>
                    <li><a href="http://php-tsorenson.rhcloud.com/index.html">About</a></li>
                </ul>
            </nav>
        </div>
        <a id="results_button" href="actions.php">Click to return to actions</a>
        <?php 
            require 'connectDB.php';
            $game = $_POST['game_type'];
            $stmt = $db->prepare('SELECT * FROM game_type WHERE name=:name');
            $stmt->execute(array(':name' => $game));
            $rows = $stmt->fetchAll();
        ?>
        <h1 id="title">Start a new game</h1>
        <form method="post" action="addGame.php" id="searchForm">
            <input id="players" type="number" name="num_players" placeholder="Number of Players" min="<?= $rows[0]['number_players_min'] ?>" max="<?= $rows[0]['number_players_max'] ?>" onkeyup="addPlayers('players')">
            <div id="container"></div>
            <input type="submit" name="submit" value="Next">
        </form>
    </body>
</html>