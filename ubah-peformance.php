<?php
include "sqlConnect.php";
include "dataImport.php";

$foto = $_FILES["inputFoto"]["name"];
$nik = trim($_POST['nik']);
$nama = trim($_POST['nama']);
$tglPenilaian = trim($_POST['tglPenilaian']);
$posisi = trim($_POST['posisi']);
$statusKerja = trim($_POST['statusKerja']);
$responsibility = trim($_POST['responsibility']);
$teamwork = trim($_POST['teamwork']);
$management = trim($_POST['management']);

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

$sql = "UPDATE `performance` SET `nama` = '$nama', `status_kerja` = '$statusKerja', `position` = '$posisi', `tgl_penilaian` = '$tglPenilaian', `responsibility` = '$responsibility', `teamwork` = '$teamwork', `management_time` = '$management', `total` = '$total', `grade` = '$grade'";

if ($foto) {
    $file_extension = pathinfo($_FILES["inputFoto"]["name"], PATHINFO_EXTENSION);
    $foto = $nik . "." . $file_extension;
    $sql .= ", `foto` = '$foto'";
}
$sql .= "WHERE `performance`.`nik` = '$nik'";

$result = mysqli_query($conn, $sql);

if ($result) {
    if (!$foto) {
        header("location:peformance.php");
    } else {
        $upload = uploadImage($nik);
        if ($upload) {
            header("location:peformance.php");
        } else {
            echo "gagal aplod";
        }
    }
} else {
    echo "failed to make record";
}

$conn->close();
