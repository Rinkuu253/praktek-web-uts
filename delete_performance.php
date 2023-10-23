<?php

include "sqlConnect.php";
include "dataImport.php";

$nik = trim($_GET['nik']);
$img = trim($_GET['img']);

$sql = "DELETE FROM performance WHERE nik = '$nik'";

$result = mysqli_query($conn, $sql);

if ($result) {
    $removeok = removeFile($img);
    if ($removeok) {
        header("location:performance.php");
    }
} else {
    echo "Gagal Menghapus";
}

$conn->close();
