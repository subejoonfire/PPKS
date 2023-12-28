<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ProfilModel;
use App\Models\PengaduanModel;


class Login extends BaseController
{
    protected $DataUser;
    protected $DataAlamat;
    protected $DataPengaduan;

    public function __construct(){
        $this->DataAlamat = new ProfilModel();
        $this->DataPengaduan = new PengaduanModel();
        $this->DataUser = new UserModel();
    }

    public function login()
    {
        $user = $this->DataUser->findAll();    
        $data = [
            "user" => $user
        ];
        echo view("Pages/User/login", $data);
    }

    public function loginauth(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $Auth = $this->DataUser->where([
            'username' => $username,
            'password' => password_verify($password, PASSWORD_DEFAULT),
        ])->get()->getRow();
        session()->set([
            'username' => $Auth->username,
            'password' => $Auth->password,
            'email' => $Auth->email,
            'level' => $Auth->level,
        ]);
        $alamat = $this->DataAlamat->findAll();
        $pengudanHariIni = $this->DataPengaduan->findAll();
        $pengguna = $this->DataUser->findAll();
        $data = [
            'judul' => 'PPKS POLITALA',
            'alamat' => $alamat,
            'pengaduan' => $pengudanHariIni,
            'pengguna' => $pengguna,
        ];
        if ($Auth->level == 'pegawai') {            
            echo view('layout/header-pegawai', $data);
            echo view("pages/pegawai/berandapegawai", $data);
            // echo view('layout/footer');
        }
        else if ($Auth->level == 'admin') {
            echo view('layout/header-admin', $data);
            echo view("pages/Admin/BerandaAdmin", $data);
            echo view('layout/footer');
        }
    }

}
