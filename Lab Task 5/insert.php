<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';
$connection->close();