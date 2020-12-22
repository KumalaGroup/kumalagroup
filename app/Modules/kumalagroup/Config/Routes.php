<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('/', "$base\Home::index");
$routes->get('tentang', "$base\Home::tentang");
$routes->get('berita', "$base\Home::berita");
$routes->get('berita/page/(:num)', "$base\Home::berita");
$routes->get('berita/detail/(:any)', "$base\Home::detail_berita");
$routes->get('otomotif', "$base\Home::otomotif");
$routes->get('otomotif/(:any)/detail/(:any)/fitur_360', "$base\Home::fitur_360");
$routes->get('otomotif/(:any)/detail/(:any)', "$base\Home::detail_otomotif");
$routes->get('otomotif/(:any)/page/(:num)', "$base\Home::otomotif");
$routes->get('otomotif/(:any)', "$base\Home::otomotif");
$routes->get('property', "$base\Home::property");
$routes->get('property/(:any)/detail/(:any)', "$base\Home::detail_property");
$routes->get('property/(:any)', "$base\Home::property");
$routes->get('trading/(:any)', "$base\Home::trading");
$routes->get('trading', "$base\Home::trading");
$routes->get('mining/(:any)', "$base\Home::mining");
$routes->get('mining', "$base\Home::mining");
$routes->get('kontak', "$base\Home::kontak");
$routes->get('karir', "$base\Home::karir");

$routes->post('dealer', "$base\Home::dealer");
$routes->post('model', "$base\Home::model");
$routes->post('otomotif', "$base\Home::otomotif");
$routes->post('karir', "$base\Home::karir");
$routes->post('kontak', "$base\Home::kontak");
$routes->post('simulasi_kredit', "$base\Home::simulasi_kredit");


$routes->post('post_file', "$base\Post_gate::post_file");
$routes->post('post_img', "$base\Post_gate::post_img");
$routes->post('delete_img', "$base\Post_gate::delete_img");
