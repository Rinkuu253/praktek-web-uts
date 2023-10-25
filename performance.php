<?php
include "sqlConnect.php"
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/498aef9535.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

        .btn-top {
            margin-left: 1em;
            margin-right: 1em;
        }
    </style>

    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <title>Healthy Food Dashboard : Performance</title>
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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                <a class="nav-link active" href="performance.php">Performance</a>
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
            <h1 class="PageTitle mt-3">Daftar Karyawan</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card-title">
                                <h2 class="table-title mt-1">Performa Karyawan</h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-end">
                            <div class="col-12 col-xl-9 col-lg-6 col-sm-12 btn-top">
                                <input type="text" class="form-control" placeholder="Cari karyawan..." />
                            </div>
                            <div class="col-12 col-xl-3 col-lg-6 col-sm-12 btn-top">
                                <a href="tambah-performance.php" class="btn btn-primary" style="background-color:white;color:black;border:1;border-color:#40916C;width:100%">
                                    Tambah Baru +
                                </a>
                            </div>
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

    <script>
      const date = new Date();

      let day = date.getDate();
      let month = date.getMonth() + 1;
      let year = date.getFullYear();

      let currentDate = `${day}-${month}-${year}`;
      document.getElementById("tgl").innerHTML = currentDate;
    </script>
</body>

</html>