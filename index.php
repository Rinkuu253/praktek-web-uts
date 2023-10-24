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
      <img src="images/mascot.svg" alt="">
      <div class="text">
        <h1>Selamat datang kembali, Matthew~</h1>
        <p>Semoga kamu dalam keadaan sehat selalu, yuk cek laporan karyawan harini</p>
        <button type="button" class="btn btn-success btn-lg">Cek laporan keseluruhan</button>
      </div>
    </div>
    <h1>fakkkk</h1>

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