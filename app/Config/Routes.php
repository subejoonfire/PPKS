<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'BerandaController::beranda');
$routes->get('/admin', 'Pages::mPengaduan');
$routes->get('/artikel', 'Artikel::artikel');
$routes->get('/artikel/(:segment)', 'Artikel::detailArtikel/$1');
$routes->get('/profil', 'Pages::profil');
$routes->get('/program', 'ProgramController::program');
$routes->get('/tracking laporan', 'Pages::trackingLaporan');
$routes->get('/laporkan', 'Pages::laporkan');
$routes->get('/galeri photo', 'Galeri::galeri');
$routes->get('/pengantar', 'Profil::pengantar');
$routes->get('/struktur', 'Pages::strukturOrganisasi');
$routes->get('/sop', 'Pages::sop');
$routes->get('/login', 'Login::login');
$routes->get('/beranda admin', 'BerandaAdminController::BerandaAdmin');
$routes->get('/manajement pengaduan', 'Pages::mPengaduan');
$routes->get('/manajement artikel', 'ManajementArtikel::MajanementArtikel');
$routes->get('/manajement artikel/(:segment)', 'ManajementArtikel::detailArtikel/$1');
$routes->get('/manajement profil', 'Pages::mProfil');
$routes->get('/manajement galeri', 'ManajementGaleri::ManajementGaleri');
$routes->get('/manajement akun', 'Pages::mAkun');
$routes->get('/pegawai', 'Pages::laporanPengguna');
$routes->get('/Galeri Pegawai', 'Pages::galeriPegawai');
$routes->get('/laporan pengguna', 'Pages::laporanPengguna');
$routes->get('/Artikel pegawai', 'Pages::artikelPegawai');
$routes->get('/Pengaduan pegawai', 'Pages::pengaduanPegawai');
$routes->get('/laporan', 'LaporanController::index');
$routes->post('/submit_laporan', 'LaporanController::submit_laporan');
$routes->post('/ajukan-pengaduan', 'Pengaduan');
$routes->post('/loginAuth', 'Login::loginauth');
$routes->get('/cekkeluhan', 'Pages::cekkeluhan');
$routes->post('/trackingid', 'Pengaduan::trackingid');

$routes->post('/keluhanPegawai', 'Pengaduan::kirimKeluhan');

$routes->get('/berandapegawai', 'PegawaiPagesController::index');
$routes->get('/cekkeluhanpegawai', 'PegawaiPagesController::cekkeluhan');
$routes->post('/pegawaikeluhanterima', 'PegawaiController::terimakeluhan');
$routes->post('/pegawaikeluhantolak', 'PegawaiController::tolakkeluhan');
$routes->post('/pegawaikeluhanselesai', 'PegawaiController::selesaikeluhan');