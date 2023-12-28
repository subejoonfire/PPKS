<div class="container-fluid border">
    <div class="container pt-4">
        <div class="row text-end">
            <div class="container text-center">
                <div class="row mb-4">
                    <div class="col">
                        <div class="card text-start" style="width: 30rem;">
                        <div class="card-body">
                                    <h5 class="card-title">Selamat datang, Pegawai!</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Beranda Pegawai</h6>
                                    <p class="card-text">
    
                                        Optimalkan data di [Nama Website]. Butuh bantuan? Kami siap. Selamat bekerja!
    
                                    </p>
                                    <p>Tim PPKS Politala</p>
                                </div>
                        </div>
                    </div>
                    <div class="col text-start">
                        <h4 class="card-text"> <a href="/cekkeluhanpegawai">Keluhan Hari ini</a></h4>
                <?php
                $pengaduanModel = new App\Models\PengaduanModel();
                $data = $pengaduanModel->where([
                    // 'pengelola' => session()->get('username'),
                    'pengelola' => 'nanda',
                ])->get()->getResult();
                foreach ($data as $row) {
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><?php echo $row->keluhan ?></div>
                                        <p><?php echo $row->tanggal_dibuat ?></p>
                                    </div>
                                    <span class="badge bg-primary rounded-pill"><?php echo $row->kontak ?></span>
                                </li>
                <?php
                }
                ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>