<?php
include "sqlConnect.php";
include "dataImport.php";


$nik = trim($_POST['nik']);
$nama = trim($_POST['nama']);
$tglPenilaian = trim($_POST['tglPenilaian']);
$posisi = trim($_POST['posisi']);
$statusKerja = trim($_POST['statusKerja']);
$responsibility = trim($_POST['responsibility']);
$teamwork = trim($_POST['teamwork']);
$management = trim($_POST['management']);
$file_extension = pathinfo($_FILES["inputFoto"]["name"], PATHINFO_EXTENSION);
$foto = $nik . "." . $file_extension;

$total = ($responsibility * 30 / 100) + ($teamwork * 30 / 100) + ($management * 40 / 100);
$grade = "D";

if ($total >= 80) {
    $grade = "A";
} else if ($total >= 60) {
    $grade = "B";
} else if ($total >= 40) {
    $grade = "C";
} else {
    $grade = "D";
}


$sql = "INSERT INTO performance (nik, foto, nama, status_kerja, position, tgl_penilaian, responsibility, teamwork, management_time, total, grade)
VALUES ('$nik', '$foto' , '$nama', '$statusKerja', '$posisi', '$tglPenilaian', '$responsibility','$teamwork','$management','$total','$grade')";

$result = 0;
$ok = uploadImage($nik);
if ($ok) {
    $result = mysqli_query($conn, $sql);
} else {
    echo "failed to Upload";
}


if ($result) {
    header("location:performance.php");
} else {
    echo "failed to make record";
}

$conn->close();
