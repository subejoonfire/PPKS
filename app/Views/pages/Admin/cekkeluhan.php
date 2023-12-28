<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion di dalam Tabel dengan PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Manajemen
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="beranda-admin">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manajemen-artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manajemen-profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manajemen-galeri">Galeri</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn" type="submit">Account</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Info Keluhan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Info Keluhan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $model = new \App\Models\PengaduanModel();
                $data = $model->get()->getResult();
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?php echo $row->id_pengaduan; ?></td>
                        <td>
                            <div class="accordion" id="accordionExample<?php echo $row->id_pengaduan; ?>">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne<?php echo $row->id_pengaduan; ?>">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $row->id_pengaduan; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $row->id_pengaduan; ?>">
                                            Detail
                                        </button>
                                    </h2>
                                    <div id="collapseOne<?php echo $row->id_pengaduan; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?php echo $row->id_pengaduan; ?>" data-bs-parent="#accordionExample<?php echo $row->id_pengaduan; ?>">
                                        <div class="accordion-body">
                                        <p>ID Pengaduan: <?php echo !empty($row->id_pengaduan) ? $row->id_pengaduan : 'Belum diisi'; ?></p>
                                        <p>Keluhan: <?php echo !empty($row->keluhan) ? $row->keluhan : 'Belum diisi'; ?></p>
                                        <p>Siapa: <?php echo !empty($row->siapa) ? $row->siapa : 'Belum diisi'; ?></p>
                                        <p>Korban: <?php echo !empty($row->korban) ? $row->korban : 'Belum diisi'; ?></p>
                                        <p>Sila: <?php echo !empty($row->sila) ? $row->sila : 'Belum diisi'; ?></p>
                                        <p>Masih: <?php echo !empty($row->masih) ? $row->masih : 'Belum diisi'; ?></p>
                                        <p>Tanggung: <?php echo !empty($row->tanggung) ? $row->tanggung : 'Belum diisi'; ?></p>
                                        <p>Apa: <?php echo !empty($row->apa) ? $row->apa : 'Belum diisi'; ?></p>
                                        <p>Pilih: <?php echo !empty($row->pilih) ? $row->pilih : 'Belum diisi'; ?></p>
                                        <p>Kapan: <?php echo !empty($row->kapan) ? $row->kapan : 'Belum diisi'; ?></p>
                                        <p>Kejadian: <?php echo !empty($row->kejadian) ? $row->kejadian : 'Belum diisi'; ?></p>
                                        <p>Lokasi: <?php echo !empty($row->lokasi) ? $row->lokasi : 'Belum diisi'; ?></p>
                                        <p>Detail: <?php echo !empty($row->detail) ? $row->detail : 'Belum diisi'; ?></p>
                                        <p>Pelaku: <?php echo !empty($row->pelaku) ? $row->pelaku : 'Belum diisi'; ?></p>
                                        <p>Kontak: <?php echo !empty($row->kontak) ? $row->kontak : 'Belum diisi'; ?></p>
                                        <p>Email: <?php echo !empty($row->email) ? $row->email : 'Belum diisi'; ?></p>
                                        <p>Info: <?php echo !empty($row->info) ? $row->info : 'Belum diisi'; ?></p>
                                        <p>No. HP: <?php echo !empty($row->no_hp) ? $row->no_hp : 'Belum diisi'; ?></p>
                                        <p>Tanggal Dibuat: <?php echo !empty($row->tanggal_dibuat) ? $row->tanggal_dibuat : 'Belum diisi'; ?></p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <form action="/keluhanPegawai" method="post">
                            <input type="text" name="id_pengaduan" value="<?= $row->id_pengaduan ?>" style="display:none">
                            <td><select name="namaPengelola" class="form-select" aria-label="Default select example">
                            <?php $userModel = new \App\Models\UserModel();
                            $data = $userModel->where(['level' => 'pegawai'])->get()->getResult();
                            foreach ($data as $row1) {
                                ?>
                                <option value="<?= $row1->username ?>"><?= $row1->username ?></option>
                                <?php
                            }
                            ?>
                            </select></td>
                        <td>
                        <?php if ($row->pengelola == 'Belum Ada') { ?>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        <?php } else { ?>
                            <span class="btn btn-success">Sudah Terkirim</button>
                        <?php } ?>
                        </td>
                    </form>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>