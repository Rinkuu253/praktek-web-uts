<?php
function uploadImage($nik)
{
    $target_dir = "databaseFoto/";
    $target_file = $target_dir . $nik;
    $uploadOk = 1;
    if ($uploadOk == 0) {
        echo "Maaf, File tidak bisa terunggah.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($nik, $target_file)) {
        } else {
            echo "Maaf, File tidak bisa terunggah.";
            $uploadOk = 0;
        }
    }
    return $uploadOk;
}

function removeFile($imgName)
{
    $target_dir = "databaseFoto/";
    $target_file = trim($target_dir . basename($imgName));
    if (file_exists($target_file)) {
        unlink($target_file);
        return true;
    } else {
        return false;
    }
}
