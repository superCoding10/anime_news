<?php
echo "db";
$dsn = 'mysql:dbname=sql2357615;host=sql2.freemysqlhosting.net';
$user = "sql2357615";
$password = "aT3*xY8!";
try {
    //code...
    $mysqli = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    //throw $th;
    echo "failed: ";
 

    echo $e->getMessage();
}

