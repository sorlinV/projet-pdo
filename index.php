<?php
//3306
function myLoader ($className) {
    $class = str_replace('\\', '/', $className);
    require ($class . ".php");
}
spl_autoload_register('myLoader');
use entities\SmallDoggo;
try {
    $db = new PDO('mysql:host=localhost;dbname=first_db', 'admin', 'wqaxszcde123');
    $pdoQuery = $db->query('SELECT * FROM small_doggo');
    $pdoQuery->execute();
    $dogs = [];
    while ($doggo = $pdoQuery->fetch()) {
        if ($doggo['good'] == 1) {
            $good = true;
        } else {
            $good = false;
        }
        $dogs[] = new Smalldoggo($doggo['name'], $doggo['race'], $good, $doggo['birth'], $doggo['id']);
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
?>