<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$host = $_SERVER['HTTP_HOST'];

//if($host=='www.jmkp.local' || $host=='jmkp.local' || $host=='jmkp.bnsp.go.id' || $host=='www.jmkp.bnsp.go.id'){
//	$route['default_controller'] = "welcome";
//
//}else{
//	$route['default_controller'] = "mobile";
//}

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['gambar/(:any)'] = "welcome/$1";

// $route['uji_kompetensi/(:any)'] = "welcome/uji_kompetensi/$1";

// $route['uji_kompetensi'] = "welcome/uji_kompetensi/1";
// $route['dasar_hukum_pendirian_lsp_bnsp.html'] = "profile/index/111";
// $route['proses_sertifikasi_lsp_jmkp.html'] = "profile/index/118";
// $route['uji_kompetensi.html'] = "welcome/uji_kompetensi";

$route['tamansari-garden'] = "tamansari_garden";

$route['daftar-merchant'] = "welcome/daftar_merchant";
$route['daftar-buyer'] = "welcome/daftar";
$route['produk-lainnya'] = "welcome/tampil_lainnya";


$route['f/(:any)'] = "search/filter/$1/$1";

$route['sitemap\.xml'] = "sitemap/index";




$route['rest-api'] = "api";
$route['rest-api-scheduleall'] = "api/schedule_all";
$route['rest-api/test_product'] = "api/test_product";

$route['restapi/get_toko'] = "api/detail_toko";
$route['restapi/get_product'] = "api/product";
$route['restapi/get_stok_product'] = "api/stok_produk_arr";
$route['restapi/get_stok_product_active'] = "api/stok_produk_aktif";
$route['restapi/post_update_status_product'] = "api/update_status_product";




/* End of file routes.php */
/* Location: ./application/config/routes.php */
