<?php
include "sqlConnect.php"
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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

        .btn-fungsi {
            height: 100%;
            width: 100%;
            border-width: 2px;
            border-color: #40916C;
        }
    </style>
    <title>Performance</title>
</head>

<body>
    <div class="container">
        <div class="content-body">
            <h1 class="PageTitle mt-3">Daftar Karyawan</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="table-title mt-1">Performa Karyawan</h2>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control mb-3" placeholder="Cari karyawan..." />
                        </div>
                        <div class="col-md-2">
                            <a href="tambah-performance.php" class="btn btn-primary btn-fungsi" style="background-color:white;color:black;border:1;border-color:#40916C">
                                Tambah Baru +
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Status Kerja</th>
                                <th>Posisi</th>
                                <th>Total</th>
                                <th>Grade</th>
                                <th style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ssql = "select * from performance";
                            $result = mysqli_query($conn, $ssql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["tgl_penilaian"] ?></td>
                                        <td><?php echo $row["nik"] ?></td>
                                        <td><?php echo $row["nama"] ?></td>
                                        <td><?php echo $row["status_kerja"] ?></td>
                                        <td><?php echo $row["position"] ?></td>
                                        <td><?php echo $row["total"] ?></td>
                                        <td><?php echo $row["grade"] ?></td>
                                        <td align="center">
                                            <a href="view_performance.php?nik=<?php echo $row['nik']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="edit_performance.php?nik=<?php echo $row['nik']; ?>" class="btn btn-info btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus">Delete</button>
                                            <div class="modal fade" id="modalHapus">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin menghapus data ini?
                                                            Data yang dihapus tidak dapat dikembalikan
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <a href="delete_performance.php?nik=<?php echo $row['nik']; ?>&img=<?php echo $row['foto'] ?>" class="btn btn-danger">Hapus</a>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>