<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PegawaiPagesController extends BaseController
{
    public function index()
    {
        echo view('layout/header-pegawai');
        return view('pages/pegawai/berandapegawai');
    }
    public function cekkeluhan(){
        return view('pages/pegawai/cekkeluhan');
    }
}
