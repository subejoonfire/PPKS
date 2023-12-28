<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;
use App\Models\PengaduanModel;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporkan');
    }

    public function submit_laporan()
    {
        $request = $this->request;
        $siapakahAnda = $request->getPost('dropdown1');
        $korban = $request->getPost('dropdown2');
        // Tambahkan variabel lainnya sesuai kebutuhan

        // Menyimpan data ke dalam database menggunakan model
        $laporanModel = new LaporanModel();
        $data = [
            'siapakah_anda' => $siapakahAnda,
            'korban' => $korban,
            // Tambahkan variabel lainnya sesuai kebutuhan
        ];
        $laporanModel->insert($data);

        echo "Data berhasil disimpan";
    }

    // public function insert()
    // {
    //     $data = $this->request->getVar();
    //     // dd($data);

    //     $pengaduanModel = new PengaduanModel;

    //     $status = $pengaduanModel->insert([
    //         'id_pengaduan' => '',
    //         'siapa' => $data['siapa'],
    //         'korban' => $data['korban'],
    //         'kejadian' => $data ['kejadian'],
    //         'lokasi' => $data ['lokasi'],
    //         'kapan' => $data ['kapan'],
    //         'apa' => $data ['apa'],
    //         'masih' => $data ['masih'],
    //         'detail' => $data ['detail'],
    //         'tanggung' => $data ['tanggung'],
    //         'pelaku' => $data ['pelaku'],
    //         'kontak' => $data ['kontak'],
    //         'email' => $data ['email'],
    //         'info' => $data ['info'],
    //         'pilih' => $data ['pilih'],
    //         'kontaklain' => $data ['kontaklain'],
    //         'sila' => $data ['sila']
    //     ]);

    //     if ($status) {
    //         echo "Berhasil tot";
    //     }
    // }
}
