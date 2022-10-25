<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
// $routes->get('/layout/navbar', 'Pages::index', ['as' => 'index']);

$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/forgot', 'Auth::forgot');
$routes->get('/reset-password', 'Auth::reset');

$routes->group('', ['filter' => 'login'], function ($routes) {
    // $routes->get('user/index', 'User::index');
    $routes->get('/index', 'User::index');
});

// hak akses
$routes->get('/user_list', 'User::user_list', ['filter' => 'role:admin']);
//tambah akun
$routes->get('/tambah_akun', 'User::tambah_akun', ['filter' => 'role:admin']);
$routes->post('/tambah_akun', 'User::buat', ['filter' => 'role:admin']);
//hapus akun
$routes->post('user/detail/hapus/(:num)', 'User::hapus/$1', ['filter' => 'role:admin']);

$routes->get('/user/user_list/detail', 'User::detail', ['filter' => 'role:admin']);
$routes->get('/user/detail/(:num)', 'User::detail/$1', ['filter' => 'role:admin']);
$routes->get('/user/user_list/detail/(:num)', 'User::detail/$1', ['filter' => 'role:admin']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/ubah_profil/1', 'User::edit_profil/$1', ['filter' => 'role:admin']);
$routes->get('/edit_detail/(:num)', 'User::edit_detail/$1', ['filter' => 'role:admin']);
$routes->post('/ubah_profil_detail/(:num)', 'User::ubah_profil_detail/$1', ['filter' => 'role:admin']);

// ubah profil
$routes->get('/ubah_profil/(:num)', 'User::edit_profil/$1');
$routes->get('/ubah_user/(:num)', 'User::edit_detail/$1');
$routes->post('/u_profil/(:num)', 'User::ubah_profil/$1');
// ubah password
$routes->get('/edit_password/(:num)', 'User::edit_password/$1');
$routes->get('/edit_password_detail/(:num)', 'User::edit_password_detail/$1', ['filter' => 'role:admin']);
$routes->post('/ubah_password/(:num)', 'User::ubah_password/$1');
$routes->post('/ubah_password_detail/(:num)', 'User::ubah_password_detail/$1', ['filter' => 'role:admin']);


// $routes->get('/user_list', 'User::user_list');
$routes->get('/dashboard', 'Surat::index');
$routes->get('/profil', 'User::profil');
$routes->get('/kelola_surat', 'Surat::kelola_surat');
$routes->get('/daftar_surat', 'Surat::daftar_surat');
$routes->get('/tanda_tangan', 'Surat::tanda_tangan');
$routes->post('/fungsi_tanda_tangan', 'Surat::fungsi_tanda_tangan');


// surat
$routes->get('/surat_pernyataan_diri', 'Surat::suratpernyataandiri');
$routes->get('/surat_kematian', 'Surat::suratkematian');
$routes->get('/surat_keterangan_usaha', 'Surat::suratketeranganusaha');


// ubah surat
$routes->get('/lihat/(:segment)', 'Surat::lihat/$1');
$routes->get('/cetak/(:segment)', 'Surat::cetak/$1');
$routes->get('/ubah/(:segment)', 'UbahSurat::ubah/$1');

//hapus surat
$routes->delete('/surat/(:any)', 'Surat::hapus/$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
