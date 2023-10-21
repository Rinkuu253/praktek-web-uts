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

        h2 {
            font-size: 1.875rem;
        }
    </style>
    <title>Peformance</title>
</head>

<body>
    <div class="container">
        <div class="content-body ">
            <div class="content-fluid">
                <h1 class="PageTitle">Daftar Karyawan</h1>
                <div class="card">
                    <div class="card-body">
                        <h2>Peforma Karyawan</h2>
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
                                    <th>Aksi</th>
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
                                            <td>
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

</body>

</html>