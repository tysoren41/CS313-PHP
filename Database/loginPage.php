<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            if(isset($_SESSION["user"]))
            {
                header("Location: http://php-tsorenson.rhcloud.com/Database/actions.php");
                exit;
            }
        ?>
        <title>Login</title>
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
        <h1 id="title">Login</h1>
        <form method="post" action="login.php" id="addForm">
            <input type="text" name="name" placeholder="User Name"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <h1 id="newLogin">New User</h1>
        <a href="addUser.html">Click here to add a new user</a>
    </body>
</html>