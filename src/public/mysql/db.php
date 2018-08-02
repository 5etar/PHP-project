<?php

$connection = new PDO("mysql:host=mysqldb;dbname=loginapp;charset=UTF8", 'root', '123456');

if (!$connection) {
    die('Database connection failed ');
}

?>