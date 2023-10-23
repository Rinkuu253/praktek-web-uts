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
    <title>Edit Peforma</title>

    <style>
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
    </script>
</head>

<body>
    <div class="container">
        <div class="content-body">
            <div class="content-fluid">
                <h1 class="PageTitle mt-3">Edit Karyawan</h1>
                <form action="ubah-peformance.php" method="POST" enctype="multipart/form-data" onsubmit="return simpan()">
                    <div class="card">
                        <div class="card-body">
                            <h3>Informasi dan Performa Karyawan</h3>
                            <div class="row mt-4">
                                <div class="col-6 form-input mt-2">
                                    <img src="dataBaseFoto/<?php echo ($foto) ?>" alt="No Image" id="previewFoto" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                                    <input type="hidden" id="fotoOld" name="fotoOld" value="<?php echo $fotoOld; ?>">
                                    <div class="mt-3">
                                        <input class="form-control inputForm" type="file" placeholder="Pilih Foto" id="inputFoto" name="inputFoto" accept="image/*" value="<?php echo $foto; ?>">
                                    </div>

                                </div>
                                <div class=" col-6 form-input mt-2">

                                </div>
                                <div class="col-6 form-input mt-2">
                                    <label>
                                        NIK
                                    </label>
                                    <input class="form-control inputForm mt-2" name="nik" id="nik" placeholder="Masukan NIK" type="number" readonly value="<?php echo ($nik) ?>" />
                                </div>
                                <div class="col-6 form-input mt-2">
                                    <label>
                                        Nama
                                    </label>
                                    <input class="form-control inputForm mt-2" name="nama" id="nama" placeholder="Masukan Nama" type="text" required value="<?php echo ($nama) ?>" />
                                </div>
                                <div class="col-6 form-input mt-2">
                                    <label>
                                        Posisi
                                    </label>
                                    <input class="form-control inputForm mt-2" name="posisi" id="posisi" placeholder="Masukan Posisi" type="text" required value="<?php echo ($posisi) ?>" />
                                </div>
                                <div class="col-6 form-input mt-2">
                                    <label>
                                        Tanggal Penilaian
                                    </label>
                                    <input class="form-control inputForm mt-2" name="tglPenilaian" id="tglPenilaian" placeholder="Masukan Tanggal" type="date" required value="<?php echo ($tglPenilaian) ?>" />
                                </div>
                                <div class="col-6 form-input mt-2">
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
                                <div class="col-2 form-input mt-2">
                                    <label>
                                        Responsibility (30%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="responsibility" id="responsibility" placeholder="(0-100)" type="number" required value="<?php echo ($responsibility) ?>" />
                                </div>
                                <div class="col-2 form-input mt-2">
                                    <label>
                                        Teamwork (30%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="teamwork" id="teamwork" placeholder="(0-100)" type="number" required value="<?php echo ($teamwork) ?>" />
                                </div>
                                <div class="col-2 form-input mt-2">
                                    <label>
                                        Management Time (40%)
                                    </label>
                                    <input class="form-control inputForm mt-2" name="management" id="management" placeholder="(0-100)" type="number" required value="<?php echo ($management) ?>" />
                                </div>
                            </div>
                            <div class="tab mt-4">
                                <div class="btn btn-primary" style="background-color:#40916C;width:10%;" data-bs-toggle="modal" data-bs-target="#modalSimpan">
                                    Simpan
                                </div>
                                <a href="peformance.php" target="_self">
                                    <div class="btn btn-primary" style="background-color:white;width:10%;border:2;border-color:#40916C;color:black;">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputFoto = document.getElementById('inputFoto');
            const modalPreviewFoto = document.getElementById('modalPreviewFoto');
            const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));

            // Set nilai atribut src saat halaman dimuat
            document.getElementById('previewFoto').setAttribute('src', 'dataBaseFoto/<?php echo ($foto) ?>');

            inputFoto.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imageUrl = e.target.result;
                        document.getElementById('previewFoto').setAttribute('src', imageUrl);
                        modalPreviewFoto.setAttribute('src', imageUrl); // Set pratinjau di dalam modal
                    };
                    reader.readAsDataURL(file);
                } else {
                    document.getElementById('previewFoto').setAttribute('src', 'dataBaseFoto/<?php echo ($foto) ?>');
                    modalPreviewFoto.setAttribute('src', ''); // Menghapus pratinjau di dalam modal
                }
            });

            // Menampilkan modal saat pratinjau ditekan
            document.getElementById('previewFoto').addEventListener('click', function() {
                modalPreviewFoto.setAttribute('src', document.getElementById('previewFoto').getAttribute('src'));
                // Menampilkan modal
                previewModal.show();
            });
        });
    </script>
</body>

</html>