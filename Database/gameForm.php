<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/login.php");
        exit;
    }
    
    require 'connectDB.php';
    $users = $db->query("SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Current Game</title>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
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
        <h1 id="title">Play Game</h1>
        <form action="playGame.php" method="post">
            <table>
                <?php
                    foreach ($users as $user) {
                        echo <<<HTML
                        <tr>
                            <td>{$user['name']}</td>
                            <td><input name="points[]" type="number" placeholder="Score"></td>
                        </tr>
HTML;
                        
                    }
                ?>
            </table>
            <input type="submit" name="nextButton" value="Next Round">
            <input type="submit" name="nextButton" value="End Game">
        </form>
    </body>
</html>