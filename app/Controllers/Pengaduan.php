<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    public function index()
    {
        $PengaduanModel = new PengaduanModel();
        $keluhan = $this->request->getPost('keluhan');
        $siapa = $this->request->getPost('siapa');
        $korban = $this->request->getPost('korban');
        $kejadian = $this->request->getPost('kejadian');
        $lokasi = $this->request->getPost('lokasi');
        $kapan = $this->request->getPost('kapan');
        $apa = $this->request->getPost('apa');
        $masih = $this->request->getPost('masih');
        $detail = $this->request->getPost('detail');
        $tanggung = $this->request->getPost('tanggung');
        $pelaku = $this->request->getPost('pelaku');
        $kontak = $this->request->getPost('kontak');
        $nomorhp = $this->request->getPost('nomorhp');
        $kontaklain = $this->request->getPost('kontaklain');
        $email = $this->request->getPost('email');
        $info = $this->request->getPost('info');
        $pilih = $this->request->getPost('pilih');
        $sila = $this->request->getPost('sila');

        $siapaMessage = $this->generateMessage($siapa, [
            '1' => 'Saya pernah mengalami kekerasan seksual',
            '2' => 'Saya membantu orang lain yang mengalami kekerasan seksual',
            '3' => 'Saya melihat terjadinya kekerasan seksual',
            'other' => 'Lainnya',
        ]);

        $korbanMessage = $this->generateMessage($korban, [
            'a' => 'Korban adalah Pegawai Politala yang aktif',
            'b' => 'Korban adalah Pegawai Politala yang purnatugas',
            'c' => 'Korban adalah Mahasiswa Aktif',
            'd' => 'Korban adalah Alumni Politala',
            'other' => 'Lainnya',
        ]);

        $silaMessage = $this->generateMessage($sila, [
            'a' => 'Saya telah memberikan kontak yang dapat dihubungi',
            'b' => 'Saya belum siap memberikan kontak, namun akan menghubungi lagi suatu saat',
            'other' => 'Lainnya',
        ]);

        $masihMessage = $this->generateMessage($masih, [
            'a' => 'Ya',
            'b' => 'Tidak',
            'c' => 'Mungkin',
            'other' => 'Lainnya',
        ]);

        $tanggungMessage = $this->generateMessage($tanggung, [
            'a' => 'Pegawai Politala aktif',
            'b' => 'Pegawai Politala purnatugas',
            'c' => 'Mahasiswa aktif',
            'd' => 'Alumni Politala',
            'e' => 'Masyarakat umum',
            'other' => 'Lainnya',
        ]);

        $apaMessage = $this->generateMessage($apa, [
            'a' => 'Ya',
            'b' => 'Tidak',
            'c' => 'Mungkin',
            'other' => 'Lainnya',
        ]);

        // Similar code for other variables
        $pilihMessage = $this->generateMessage($pilih, [
            'a' => 'Saya tidak mengetahui identitas pelaku',
            'b' => 'Saya mengetahui pelaku tetapi tidak ingin mengungkapnya',
            'c' => 'Saya mengetahui pelaku, tetapi akan mengungkapnya setelah mendapat informasi lebih lanjut',
            'other' => 'Lainnya',
        ]);

        $kapanMessage = $this->generateMessage($kapan, [
            'a' => 'Dalam seminggu terakhir',
            'b' => 'Dalam semester ini',
            'c' => 'Dalam 1 tahun terakhir',
            'd' => 'Antara 1 - 3 tahun yang lalu',
            'e' => 'Antara 3 - 5 tahun yang lalu',
            'f' => 'Lebih dari 5 tahun yang lalu',
            'other' => 'Lainnya',
        ]);
        $insertData = [
            'siapa' => $siapaMessage,
            'keluhan' => $keluhan,
            'no_hp' => $nomorhp,
            'korban' => $korbanMessage,
            'sila' => $silaMessage,
            'masih' => $masihMessage,
            'tanggung' => $tanggungMessage,
            'apa' => $apaMessage,
            'pilih' => $pilihMessage,
            'kapan' => $kapanMessage,
            'kejadian' => $kejadian,
            'lokasi' => $lokasi,
            'detail' => $detail,
            'pelaku' => $pelaku,
            'kontak' => $kontak,
            'kontaklain' => $kontaklain,
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
            'email' => $email,
            'info' => $info,
            'pengelola' => 'Belum Ada',
            'statuspengaduan' => 'Belum Diterima',
            'statuskonsultasi' => 'Belum Konsultasi',
        ];

        $PengaduanModel->insert($insertData);

        $data = [
            'kodemumaniezz' => $PengaduanModel->insertID()
        ];
        return view('pages/user/ceklis', $data);
    }
    private function generateMessage($selectedOption, $optionMapping)
    {
        return isset($optionMapping[$selectedOption]) ? $optionMapping[$selectedOption] : 'Pilihan tidak valid';
    }
    public function trackingid()
    {
        $PengaduanModel = new PengaduanModel();
        $kode_aduan = $this->request->getPost('kode_aduan');
        $AduanStatus = $PengaduanModel->where([
            'id_pengaduan' => $kode_aduan
        ])->get()->getRow();
        if ($AduanStatus) {
            $data = [
                'id_pengaduan' => $kode_aduan,
                'statuspengaduan' => $AduanStatus->statuspengaduan,
                'tanggal_dibuat' => $AduanStatus->tanggal_dibuat,
                'statuskonsultasi' => $AduanStatus->statuskonsultasi
            ];
            return view('pages/user/statusaduan', $data);
        } else {
            return view('pages/user/gagal');
        }
    }
    public function kirimKeluhan()
    {
        $PengaduanModel = new PengaduanModel();
        $namaPengelola = $this->request->getPost('namaPengelola');
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $AduanKelola = $PengaduanModel->where([
            'id_pengaduan' => $id_pengaduan
        ])->set([
            'pengelola' => $namaPengelola,
            'statuspengaduan' => 'Diterima'
        ])->update();
        return redirect('cekkeluhan');
    }
}
