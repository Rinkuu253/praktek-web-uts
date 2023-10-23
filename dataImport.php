<?php
function uploadImage($nik, $nama)
{
    // Mendapatkan ekstensi file
    $file_extension = pathinfo($_FILES["inputFoto"]["name"], PATHINFO_EXTENSION);

    // Menyusun nama file baru dengan format nik_nama.ekstensi
    $new_filename = $nik . "_" . $nama . "." . $file_extension;

    $target_dir = "databaseFoto/";
    $target_file = $target_dir . basename($new_filename);
    $uploadOk = 1;

    if ($uploadOk == 0) {
        echo "Maaf, File tidak bisa terunggah.";
    } else {
        // Jika semuanya baik-baik saja, coba unggah file
        if (move_uploaded_file($_FILES["inputFoto"]["tmp_name"], $target_file)) {
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
