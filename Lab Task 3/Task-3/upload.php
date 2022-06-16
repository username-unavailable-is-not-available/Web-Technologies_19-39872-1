<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["file"];

    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpeg", "jpg", "png");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 4000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "Uploads/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.html?uploadsuccess");
            } else {
                echo "File size is too big";
            }
        } else {
            echo "There was an error uploading";
        }
    } else {
        echo "File format not supported";
    }
}
