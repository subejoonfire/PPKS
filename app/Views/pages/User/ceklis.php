<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fade In from Bottom with Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .row {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .col-md-9 {
      text-align: center;
      animation: fadeInBottom 2s ease-in-out forwards;
    }

    .fade-in-bottom {
      opacity: 0;
      transform: translateY(50vh);
      animation: fadeInBottom 2s ease-in-out forwards;
    }

    @keyframes fadeInBottom {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .content {
      text-align: center;
      margin-top: 50vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-9 text-center fade-in-bottom" id="content">
        <img src="/img/path-to-icon-checklist.png" alt="Your Image" class="img-fluid" width="275" height="275" />
        <h3>
          Terima Kasih Telah Melakukan Pelaporan Kepada Tim Satgas PPKS
          Politala
        </h3>
        <h3>Aduan Anda Telah Terkirim dan Akan Segera Kami Tindaklanjuti</h3>
        <h5>Kode permohonan Anda adalah : (<?= $kodemumaniezz ?>)</h5>
        <h5>Mohon untuk mencatat kode tersebut.</h5>
        <a href="/" class="btn btn-secondary">
          Kembali Ke Halaman Depan
        </a>
        <a href="tracking laporan" class="btn btn-warning">
          Pergi Ke Tracking Aduan
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMEn1RzCGZL8Qv8U6DWhWEy4pUOp/+lJSq1l5FUClWwBd+XUUn+h63vcl2E+75e" crossorigin="anonymous"></script>
</body>

</html>