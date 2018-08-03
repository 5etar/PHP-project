<?php

$connection = new PDO("mysql:host=mysqldb;dbname=loginapp;charset=UTF8", 'root', '123456');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);