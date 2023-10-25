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
        $fotoOld = $row['foto'];
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
    <title>Edit Performance</title>

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
    </style>
    <script>
        function simpan(event) {
            event.preventDefault();
            return true;
        }

        function hapus() {
            var nama = "<?php echo $nama; ?>";
            var tglPenilaian = "<?php echo $tglPenilaian; ?>";
            var posisi = "<?php echo $posisi; ?>";
            var statusKerja = "<?php echo $statusKerja; ?>";
            var responsibility = "<?php echo $responsibility; ?>";
            var teamwork = "<?php echo $teamwork; ?>";
            var management = "<?php echo $management; ?>";
            var foto = "<?php echo $foto; ?>";
            // Mengambil elemen-elemen input dengan id yang sesuai
            var namaInput = document.getElementById('nama');
            var tglPenilaianInput = document.getElementById('tglPenilaian');
            var posisiInput = document.getElementById('posisi');
            var statusKerjaInput = document.getElementById('statusKerja');
            var responsibilityInput = document.getElementById('responsibility');
            var teamworkInput = document.getElementById('teamwork');
            var managementInput = document.getElementById('management');
            var inputFoto = document.getElementById('inputFoto');
            // Mengatur nilai elemen-elemen input menjadi kosong
            namaInput.value = nama;
            tglPenilaianInput.value = tglPenilaian;
            posisiInput.value = posisi;
            statusKerjaInput.value = statusKerja;
            responsibilityInput.value = responsibility;
            teamworkInput.value = teamwork;
            managementInput.value = management;
            inputFoto.value = '';

            // Menghapus pratinjau foto
            document.getElementById('previewFoto').setAttribute('src', 'databaseFoto/' + foto);

            // Mengembalikan nilai false agar form tidak disubmit setelah membersihkan input
            return false;

        }
    </script>
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
                <h1 class="PageTitle mt-3">Edit Karyawan</h1>
                <form action="ubah-performance.php" method="POST" enctype="multipart/form-data" onsubmit="return simpan()">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h3>Informasi dan Performa Karyawan</h3>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-end">
                                        <div class="btn btn-danger" style="width:100%; max-width:150px" data-bs-toggle="modal" data-bs-target="#modalClear">
                                            Clear
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 form-input mt-2">
                                    <img src="dataBaseFoto/<?php echo ($foto) ?>" alt="No Image" id="previewFoto" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                                    <div class="mt-3">
                                        <input class="form-control inputForm" type="file" placeholder="Pilih Foto" id="inputFoto" name="inputFoto" accept="image/*" value="<?php echo $foto; ?>" style="max-width:50%">
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6  form-input mt-2">
                                    <label>
                                        NIK
                                    </label>
                                    <input class="form-control inputForm mt-2" name="nik" id="nik" placeholder="Masukan NIK" type="number" readonly value="<?php echo ($nik) ?>" />
                                </div>
                                <div class="col-12 col-sm-6  form-input mt-2">
                                    <label>
                                        Nama
                                    </label>
                                    <input class="form-control inputForm mt-2" name="nama" id="nama" placeholder="Masukan Nama" type="text" required value="<?php echo ($nama) ?>" />
                                </div>
                                <div class="col-12 col-sm-6  form-input mt-2">
                                    <label>
                                        Posisi
                                    </label>
                                    <input class="form-control inputForm mt-2" name="posisi" id="posisi" placeholder="Masukan Posisi" type="text" required value="<?php echo ($posisi) ?>" />
                                </div>
                                <div class="col-12 col-sm-6  form-input mt-2">
                                    <label>
                                        Tanggal Penilaian
                                    </label>
                                    <input class="form-control inputForm mt-2" name="tglPenilaian" id="tglPenilaian" placeholder="Masukan Tanggal" type="date" required value="<?php echo ($tglPenilaian) ?>" />
                                </div>
                                <div class="col-12 col-sm-6  form-input mt-2">
                                    <label>
                                        Status Kerja
                                    </label>
                                    <select class="form-control inputForm mt-2" name="statusKerja" id="statusKerja" required>
                                        <option value="" hidden>
                                            Pilih
                                        </option>
                                        <option value="Tetap" <?php echo ($statusKerja === 'Tetap') ? 'selected' : ''; ?>>
                                            Tetap
                                        </option>
                                        <option value="Tidak Tetap" <?php echo ($statusKerja === 'Tidak Tetap') ? 'selected' : ''; ?>>
                                            Tidak Tetap
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-xxl-2 col-sm-6 form-input mt-2">
                                    <label>
                                        Responsibility (30%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="responsibility" id="responsibility" placeholder="(0-100)" type="number" required value="<?php echo ($responsibility) ?>" />
                                </div>
                                <div class="col-12 col-xxl-2 col-sm-6 form-input mt-2">
                                    <label>
                                        Teamwork (30%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="teamwork" id="teamwork" placeholder="(0-100)" type="number" required value="<?php echo ($teamwork) ?>" />
                                </div>
                                <div class="col-12 col-xxl-2 col-sm-6 form-input mt-2">
                                    <label>
                                        Management Time (40%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="management" id="management" placeholder="(0-100)" type="number" required value="<?php echo ($management) ?>" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="btn btn-primary" style="background-color:#40916C;" data-bs-toggle="modal" data-bs-target="#modalSimpan">
                                    Simpan
                                </div>
                                <a href="performance.php" target="_self">
                                    <div class="btn btn-primary" style="background-color:white;border:2;border-color:#40916C;color:black;">
                                        Batal
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalSimpan">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Menyimpan Data</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Apakah data yang anda ingin simpan sudah benar?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal" style="width:20%;">Simpan</button>
                                    <div class="btn btn-danger" data-bs-dismiss="modal">Tidak</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalClear">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Clear Field</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Apakah anda ingin mengembalikan data yang anda Ubah?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <div class="btn btn-success" style="width:20%;" data-bs-dismiss="modal" onclick="hapus()">Ya</div>
                                    <div class="btn btn-danger" data-bs-dismiss="modal">Tidak</div>
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
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>