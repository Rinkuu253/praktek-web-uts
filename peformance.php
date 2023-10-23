<?php
include "sqlConnect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Peformance</title>
</head>

<body>
    <div class="container">
        <div class="content-body">
            <div class="content-fluid">
                <h1 class="PageTitle mt-3">Daftar Karyawan</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h2 class="table-title mt-1">Peforma Karyawan</h2>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <input type="text" class="form-control inputForm" placeholder="Cari karyawan..." />
                            </div>
                            <div class="col-2">
                                <a href="tambah-peformance.php">
                                    <button type="button" class="btn btn-primary btn-fungsi">
                                        Tambah Baru +
                                    </button>
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
                                                <a href="view_performance.php?nik=<?php echo $row['nik']; ?>"><button type="button" class="btn btn-info" style="width:75pxs">View</button></a>
                                                <a href="edit_performance.php?nik=<?php echo $row['nik']; ?>"><button type="button" class="btn btn-info" style="width:75pxs">Edit</button></a>
                                                <a href="delete_peformance.php?id=<?php echo $row['nik']; ?>" onclick="return hapus()"><button type="button" class="btn btn-danger" style="width:75px">Delete</button></a>
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
    </div>
    </div>

</body>

</html>