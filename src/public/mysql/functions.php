<?php
include 'db.php';

function showAllData() {

    global $connection;

    $statement = $connection->query("SELECT * FROM users");

    while ($row = $statement->fetch()) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

