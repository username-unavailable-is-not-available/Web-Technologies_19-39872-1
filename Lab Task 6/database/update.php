<?php

if (isset($_GET['edit'])) {

    //require_once 'connect.php';

    $id = $_GET['edit'];

    $stmt = $connection->query("select * from sample_2 where id=$id");

    if (count($stmt) == 1){
        $row = $stmt->fetch_array();
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
    }

    if (isset($_POST['update'])) {
        
        $id = $_POST['id'];

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connection->query("UPDATE sample_1 SET username='$username', email='$email', `password`='$password' WHERE id=$id");
    }
}