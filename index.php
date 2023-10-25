<?php
include "sqlConnect.php"
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <link rel="icon" type="image/x-icon" href="images/logo.ico">

  <title>Healthy Food Dashboard : Menu</title>
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

  <div class="all">

    <div class="welcome">
      <img src="images/mascot.svg">
      <div class="text">
        <h1>Selamat datang kembali, Matthew~</h1>
        <p>Semoga kamu dalam keadaan sehat selalu, yuk cek laporan karyawan harini</p>
        <button type="button" class="btn btn-success btn-lg"><i class="fa-solid fa-angles-down"></i> Cek laporan keseluruhan</button>
      </div>
    </div>

    <div class="jumlah-karyawan">
      <div class="titel">
        <h2>Jumlah Karyawan</h2>
        <a href="">Lihat selengkapnya</a>
      </div>

      <div class="cards">
        <div class="card">
          <div class="card-body">
            <div class="atas">
              <div class="ic"><i class="fa-solid fa-users fa-2xl"></i></div>
              <div class="isi">
                <div>
                  <h1>25</h1>
                  <p>orang</p>
                </div>
                <p>Seluruh Karyawan</p>
              </div>
            </div>
            <div class="bawah">
              <div class="stat">+3% dibanding bulan lalu</div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="atas">
              <div class="ic"><i class="fa-solid fa-user-group fa-2xl"></i></div>
              <div class="isi">
                <div>
                  <h1>25</h1>
                  <p>orang</p>
                </div>
                <p>Karyawan Tetap</p>
              </div>
            </div>
            <div class="bawah">
              <div class="stat">+3% dibanding bulan lalu</div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="atas">
              <div class="ic"><i class="fa-solid fa-user fa-2xl"></i></div>
              <div class="isi">
                <div>
                  <h1>25</h1>
                  <p>orang</p>
                </div>
                <p>Karyawan Tidak Tetap</p>
              </div>
            </div>
            <div class="bawah">
              <div class="stat">+3% dibanding bulan lalu</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="performa-karyawan">
      <div class="titel">
        <h2>Performa Karyawan</h2>
        <a href="">Lihat selengkapnya</a>
      </div>

      <div class="cards">
        <div class="card">
          <div class="card-body">
            <div class="desc">
              <p>Performa Karyawan Tetap</p>
              <p>2023</p>
            </div>

            <div class="rates">
              <?php
              $sSQL = "SELECT grade, COUNT(*) AS count FROM performance WHERE status_kerja = 'Tetap' AND grade IN ('A', 'B', 'C', 'D') GROUP BY grade";
              $result = mysqli_query($conn, $sSQL);
              $gradeCounts = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0);
              while ($row = mysqli_fetch_assoc($result)) {
                $gradeCounts[$row['grade']] = $row['count'];
              }
              ?>
              <div class="rate">
                <img src="images/emojiA.svg" class="ori">
                <img src="images/emojiAC.svg" class="hov">
                <p>A</p>
                <h1><?php echo $gradeCounts['A']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiB.svg" class="ori">
                <img src="images/emojiBC.svg" class="hov">
                <p>B</p>
                <h1><?php echo $gradeCounts['B']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiC.svg" class="ori">
                <img src="images/emojiCC.svg" class="hov">
                <p>C</p>
                <h1><?php echo $gradeCounts['C']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiD.svg" class="ori">
                <img src="images/emojiDC.svg" class="hov">
                <p>D</p>
                <h1><?php echo $gradeCounts['D']; ?></h1>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="desc">
              <p>Performa Karyawan Tidak Tetap</p>
              <p>2023</p>
            </div>

            <div class="rates">
              <?php
              $sSQL = "SELECT grade, COUNT(*) AS count FROM performance WHERE status_kerja = 'Tidak Tetap' AND grade IN ('A', 'B', 'C', 'D') GROUP BY grade";
              $result = mysqli_query($conn, $sSQL);
              $gradeCounts = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0);
              while ($row = mysqli_fetch_assoc($result)) {
                $gradeCounts[$row['grade']] = $row['count'];
              }
              ?>
              <div class="rate">
                <img src="images/emojiA.svg" class="ori">
                <img src="images/emojiAC.svg" class="hov">
                <p>A</p>
                <h1><?php echo $gradeCounts['A']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiB.svg" class="ori">
                <img src="images/emojiBC.svg" class="hov">
                <p>B</p>
                <h1><?php echo $gradeCounts['B']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiC.svg" class="ori">
                <img src="images/emojiCC.svg" class="hov">
                <p>C</p>
                <h1><?php echo $gradeCounts['C']; ?></h1>
              </div>

              <div class="rate">
                <img src="images/emojiD.svg" class="ori">
                <img src="images/emojiDC.svg" class="hov">
                <p>D</p>
                <h1><?php echo $gradeCounts['D']; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-5">
        <div class="card-body">
          <div class="col-12">
            <div class="card-title">
              <h4 class="table-title mt-1">Karyawan Tetap dengan Performance C dan D</h4>
            </div>
          </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Posisi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sSQL = "";
              $sSQL = " select * from performance where status_kerja = 'Tetap' and (grade = 'C' OR grade = 'D')";
              $result = mysqli_query($conn, $sSQL);
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
              ?>
                  <tr>
                    <td>
                      <img class="img-fluid rounded-circle" src="
                  <?php if ($row['foto']) {
                    echo "databaseFoto/" . $row['foto'];
                  } else {
                    echo "images/defaultProfile.jpg";
                  } ?>" style="width:50px;height:50px;">
                      &nbsp;<?php echo $row['nik']; ?>
                    </td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td>


                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card mt-5">
        <div class="card-body">
          <div class="col-12 ">
            <div class="card-title">
              <h4 class="table-title mt-1">Karyawan Tidak Tetap dengan Performance C dan D</h4>
            </div>
          </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Posisi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sSQL = "";
              $sSQL = " select * from performance where status_kerja = 'Tidak Tetap' and (grade = 'C' OR grade = 'D')";
              $result = mysqli_query($conn, $sSQL);
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
              ?>
                  <tr>
                    <td>
                      <img class="img-fluid rounded-circle" src="
                  <?php if ($row['foto']) {
                    echo "databaseFoto/" . $row['foto'];
                  } else {
                    echo "images/defaultProfile.jpg";
                  } ?>" style="width:50px;height:50px;">
                      &nbsp;<?php echo $row['nik']; ?>
                    </td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td>


                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
</body>

</html>