<!DOCTYPE html>
<html lang="en">

<?php
include "sqlConnect.php";

$nik = $_GET['nik'];

$sql = "SELECT * FROM performance where nik = '$nik' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $nik = $row['nik'];
        $nama = $row['nama'];
        $foto = $row['foto'];
        $tglPenilaian = $row['tgl_penilaian'];
        $posisi = $row['position'];
        $statusKerja = $row['status_kerja'];
        $responsibility = $row['responsibility'];
        $teamwork = $row['teamwork'];
        $management = $row['management_time'];
        $total = $row['total'];
        $grade = $row['grade'];
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <title>Lihat Performance</title>

    <style>
        .navbar-nav>div>a {
            display: none;
        }

        .container {
            padding: 2rem;
        }

        .PageTitle {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 120%;
            /* or 38px */

            letter-spacing: -0.03em;
            margin-bottom: 25px;
        }

        .table-title {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            font-size: 28px;
            line-height: 120%;
            letter-spacing: -0.03em;
            color: #262626;
        }

        h2 {
            font-size: 1.875rem;
        }

        .btn-fungsi {
            height: 100%;
            width: 100%;
            border: 1;
            border-width: 2px;
            border-color: #40916C;
            background-color: white;
            color: black;
        }

        .view-title {
            font-family: "Inter";
            font-weight: 500;
            font-size: 20px;
            letter-spacing: +0.03em;
        }

        .view-value {
            font-size: 16px;
            line-height: 120%;
            letter-spacing: +0.03em;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img src="images/logo.svg"><img src="images/logoText.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div>
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="performance.php">Performance</a>
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar"></i>
                        <p id="tgl">tanggal</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content-body">
            <div class="content-fluid">
                <h1 class="PageTitle mt-3">Rincian Performa Karyawan</h1>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-4">Informasi Karyawan</h3>
                                <div class="col-12 form-input mt-2">
                                    <img src="databaseFoto/<?php echo ($foto) ?>" alt="No Image" id="previewFoto" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 form-input mt-2">
                                        <label class="view-title">
                                            NIK
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($nik) ?></label>
                                    </div>
                                    <div class="col-6 col-md-12 form-input mt-2">
                                        <label class="view-title">
                                            Nama
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($nama) ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h3>Informasi Performa</h3>
                                <div class="row mt-4">
                                    <div class="col-6 form-input mt-2">
                                        <label class="view-title">
                                            Posisi
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($posisi) ?></label>
                                    </div>
                                    <div class="col-12 col-sm-6 form-input mt-2">
                                        <label class="view-title">
                                            Tanggal Penilaian
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($tglPenilaian) ?></label>
                                    </div>
                                    <div class="col-12 form-input mt-2">
                                        <label class="view-title">
                                            Status Kerja
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($statusKerja) ?></label>
                                    </div>
                                    <hr style="margin-top: 32px;">
                                    <div class="col-12 col-xxl-4 col-sm-6 form-input mt-2">
                                        <label class="view-title">
                                            Responsibility
                                        </label>
                                        <br />
                                        <label><?php echo ($responsibility) ?> / 100.00</label>
                                    </div>
                                    <div class="col-12 col-xxl-4 col-sm-6 form-input mt-2">
                                        <label class="view-title">
                                            Teamwork
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($teamwork) ?> / 100.00</label>
                                    </div>
                                    <div class="col-12 col-xxl-4 col-sm-6 form-input mt-2">
                                        <label class="view-title">
                                            Management Time
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($management) ?> / 100.00</label>
                                    </div>
                                    <hr style="margin-top: 32px;">
                                    <div class="col-8 form-input mt-2">
                                        <label class="view-title">
                                            Total
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($total) ?></label>
                                    </div>
                                    <div class="col-4 form-input mt-2">
                                        <label class="view-title">
                                            Grade
                                        </label>
                                        <br />
                                        <label class="view-value"><?php echo ($grade) ?></label>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="edit_performance.php?nik=<?php echo ($nik) ?>" target="_self">
                                        <div class="btn btn-info" style="background-color:#40916C;max-width:250px;color:white">Edit</div>
                                    </a>
                                    <a href="performance.php" target="_self">
                                        <div class="btn btn-primary" style="background-color:white;max-width:250px;border:2;border-color:#40916C;color:black;">
                                            Kembali
                                        </div>
                                    </a>
                                    &nbsp;

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="previewModalLabel">Preview Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="" id="modalPreviewFoto" class="img-fluid" alt="Pratinjau Foto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const date = new Date();

        let day = date.getDate();
        let month = date.getMonth() + 1;
        let year = date.getFullYear();

        let currentDate = `${day}-${month}-${year}`;
        document.getElementById("tgl").innerHTML = currentDate;

        document.getElementById('previewFoto').addEventListener('click', function() {
            const modalPreviewFoto = document.getElementById('modalPreviewFoto');
            const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
            // Mengatur pratinjau di dalam modal sesuai dengan gambar pratinjau yang terlihat
            modalPreviewFoto.setAttribute('src', document.getElementById('previewFoto').getAttribute('src'));
            // Menampilkan modal
            previewModal.show();
        });
    </script>
</body>

</html>