<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';

header("Location: ../login.php?user?added?successful");

$connection->close();