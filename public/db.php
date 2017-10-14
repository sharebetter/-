<?php
$dsn="mysql:host=localhost;dbname=blog";
$pdo=new PDO($dsn,"root","");
$pdo->exec("SET NAMES UTF8mb4");
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
// var_dump($pdo);

?>