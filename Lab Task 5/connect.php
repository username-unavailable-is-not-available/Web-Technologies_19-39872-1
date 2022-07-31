<?php

//$servername = "localhost"
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$connection = new mysqli('localhost', 'root', '', 'LabTask');

if (!$connection->connect_error) {
    die("Connection Failed" . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into sample_2(username, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    echo "Added Successfully...";
    $stmt->close();
    $connection->close();
}
