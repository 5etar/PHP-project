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

function updateTable()
{

    if (isset($_POST['submit'])) {

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        include 'db.php';

        $statement = $connection->prepare("UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'");

        print_r($connection->errorInfo());
        var_dump($statement->execute());

    }
}

function deleteRows()
{

    if (isset($_POST['submit'])) {

        global $connection;

        $id = $_POST['id'];

        include 'db.php';

        $statement = $connection->prepare("DELETE FROM users WHERE id = '$id'");

        print_r($connection->errorInfo());
        var_dump($statement->execute());

    }
}

function createRow()
{
    if (isset($_POST['submit'])) {

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        include 'db.php';

        $data = [
            ':username' => $username,
            ':password' => $password
        ];

        $statement = $connection->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

        var_dump($statement->execute($data));
    }
}

function loginRead() {

    global $connection;

    $statement = $connection->query("SELECT * FROM users");
    while ($row = $statement->fetch()) {
        echo "<br />\n";
        echo $row['username']." : ";
        echo $row['password']."<br />\n";
    }
}