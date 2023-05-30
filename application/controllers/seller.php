<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seller extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('welcome_model');
		$this->load->model('seller_model');
	}

	function detail($inisial) {

		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();


		$data['jenis_user'] = $this->auth->get_user_data()->jenis_user;
		$data['nama_user'] = $this->auth->get_user_data()->nama;
		$data['id_user'] = $this->auth->get_user_data()->id;
		$data['id_member'] = $this->auth->get_user_data()->id_member;
		$id_member = $data['id_member'];

		$data['menu'] = $this->welcome_model->menu();
		$data['kategori'] = $this->welcome_model->kategori();
		$data['sub_kategori'] = $this->welcome_model->sub_kategori();

		$data['keranjang_get_member'] = $this->welcome_model->keranjang_get_member($id_member);
		$data['product_favorite'] = $this->welcome_model->product_favorite($id_member);
		$data['keranjang_buyer'] = $this->welcome_model->keranjang_buyer($id_member);

		$keranjang_buyer = $data['keranjang_buyer'];

		$data_toko = "";
		$total_keranjang = "";
		foreach ($keranjang_buyer as $key => $keranjang) {
		$total_keranjang += $keranjang->jumlah_product;
		}

		if ($total_keranjang == "") {
		$data['total_keranjang'] = '0';
		} else {
		$data['total_keranjang'] = $total_keranjang;
		}

		$seller_array = array(
			'haston'=>'119',
			'mitra10'=>'111',
			'amarodinamikatangguh'=>'112',
			'cisangkan'=>'113',
			'histell'=>'114',
			'rosykramindo'=>'115',
			'lixiltrading'=>'116',
			'sullyabadijaya'=>'117',
			'csa'=>'122',
			'kulitbatu'=>'118',
			'suryarezekitimberutama'=>'120',
			'lantaibatu'=>'121',
			'tukangbagus'=>'123',
			'gradana'=>'124',
		);

		// var_dump($seller_array[$inisial]); die();

		$data['show_seller'] = $this->seller_model->show_seller($seller_array[$inisial]);
        $show_seller = $data['show_seller'];

		$data['show_product_all'] = $this->seller_model->show_product_all($seller_array[$inisial]);
        $show_product_all = $data['show_product_all'];

		$total_spa = count($show_product_all);
		if ($total_spa == 0) {
			$csps = "";
		}else {
			$csps = count($show_product_all);
		}

		$data['total_spa'] = $csps;

		$data['inisial_seller'] = $this->inisial_seller($seller_array[$inisial]);
		$data['inisial'] = $show_seller->member." Produk";

		// var_dump($data['xxx']); die();

		// $data['show_file_utama'] = $this->seller_model->show_file_utama(14);
		// $data['show_file'] = $this->seller_model->show_file(14);

		// var_dump($data['show_product_all']); die();
		// var_dump(count($show_product_all)); die();


		if (empty($id_member)) {
			$this->load->view('templates/bootstraps/header', $data);
		} else {
			$this->load->view('templates/buyer/header', $data);
		}

		$this->load->view('seller/all_product', $data);
		// $this->load->view('templates/buyer/bottom_buyer', $data);
		$this->load->view('templates/bootstraps/bottom', $data);

	}

}
