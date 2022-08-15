<?php

if (isset($_GET['delete'])) {

    //require_once 'connect.php';

    $id = $_GET['delete'];

    $stmt = $connection->prepare("DELETE FROM sample_2 WHERE id=$id");

    $stmt->execute();
    $stmt->close();
}