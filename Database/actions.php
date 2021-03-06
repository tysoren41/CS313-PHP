<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modify Database</title>
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
        <h1 id="title">User Actions</h1>
        <ul>
            <li><a href="gameForm.php">Play a new game</a></li>
            <li><a href="scoreTotals.php">View players score totals</a></li>
            <li><a href="addGame.html">Add a new game type</a></li>
            <li><a href="addUser.html">Add new users to the Database</a></li>
            <li><a href="databaseSearch.html">Search for available game types</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </body>
</html>