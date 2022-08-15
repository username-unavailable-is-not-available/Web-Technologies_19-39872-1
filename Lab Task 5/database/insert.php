<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';

header("Location: ../index.html?insert=success");
$connection->close();