<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PegawaiController extends BaseController
{
    public function terimakeluhan()
    {
        $model = new \App\Models\PengaduanModel();
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $model->where([
            'id_pengaduan' => $id_pengaduan
        ])->set([
            'statuskonsultasi' => 'Proses Konsultasi'
        ])->update();
        return redirect()->back();
    }
    public function tolakkeluhan()
    {
        $model = new \App\Models\PengaduanModel();
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $model->where([
            'id_pengaduan' => $id_pengaduan
        ])->set([
            'statuskonsultasi' => 'Ditolak'
        ])->update();
        return redirect()->back();
    }
    public function selesaikeluhan()
    {
        $model = new \App\Models\PengaduanModel();
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $model->where([
        'id_pengaduan' => $id_pengaduan
        ])->set([
            'statuskonsultasi' => 'Selesai Konsultasi'
        ])->update();
        return redirect()->back();
    }
}
