<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "php_project";
global $pdo;
try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    $pdo = new PDO("mysql:host=$servername;dbname=$dbName;", $username, $password, $options);
    return $pdo;
    echo "Connected successfully";
}catch (PDOException $e){
 echo 'error ' . $e->getMessage();
 exit();
};