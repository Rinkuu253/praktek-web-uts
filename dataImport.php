<?php
function uploadImage()
{
    $target_dir = "databaseFoto/";
    $target_file = $target_dir . basename($_FILES["inputFoto"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Maaf, File tidak bisa terunggah.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["inputFoto"]["tmp_name"], $target_file)) {
        } else {
            echo "Maaf, File tidak bisa terunggah.";
            $uploadOk = 0;
        }
    }
    return $uploadOk;
}

function removeFile($video_file)
{
    $target_dir = "video-database/";
    $target_file = trim($target_dir . basename($video_file));
    if (file_exists($target_file)) {
        unlink($target_file);
        return true;
    } else {
        return false;
    }
}
