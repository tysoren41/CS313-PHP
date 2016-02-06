<!DOCTYPE html>
<?php
    $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
    $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
    $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    $dbName = 'php';
    echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br />\n";

    try
    {
        $db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die(); 
    }
    $name = "Monopoly";
    $stmt = $db->prepare('SELECT * FROM game_type WHERE name=:name');
    $stmt->execute(array(':name' => $name));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo 'Name: ' . $row['name'] . 'Minnimum players: ' . $row['number_players_min']; 
?>