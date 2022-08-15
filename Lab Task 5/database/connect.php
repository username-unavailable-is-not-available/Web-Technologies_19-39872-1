<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'LabTask';

$connection = new mysqli($servername, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Connection Failed" . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into sample_2(username, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();
}
