<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('restapi');

		$this->load->model('api_model');
  	}


		function index() {

			$this->restapi->response_api('405');

			// echo $barcode;

			// $xxx = $this->config->rest_key_name();
			// var_dump($xxx); die();

		}

    function test(){

			header('Content-Type: application/json');
			echo json_encode($this->db->get('m_provinsi')->result());

				// $data = json_encode($this->db->get('m_provinsi')->result());

				// echo json_decode($this->schedule_all);


				// echo (APPPATH.'.libraries');
    }

    function schedule_all(){
        // header('Access-Control-Allow-Origin:*');
        // header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        // header('Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding');

				// header('Content-Type: application/json');
				$xxx = "xxxxx";


				$data_provinsi = json_encode($this->db->get('m_provinsi')->result());

				return $xxx;

    }






	

	// function auth_api_key($id) {

	// 	// $id_member = $this->auth->get_user_data()->id_member;

	// 	$data = $this->api_model->get_api_key($id);

	// 	return ($data);
	// 	// var_dump(($data)); die();
	// }


	function test_product() {
		$request_method=$_SERVER["REQUEST_METHOD"];

		$apikey = $this->config->item('rest_key_name');
		$keyval = $_GET[$apikey];

		$rest = $this->restapi->auth_api_key($keyval);

		
		// var_dump(($rest)); die();
		
		if ($rest == true) {

			switch ($request_method) {
				case 'GET':

					$id=$this->uri->segment(3);

					if(!empty($id)) {
						$this->api_model->get_product($id);
					} else {
						$this->api_model->get_product();
					}
					
					// var_dump($this->auth_api_key()->key); die();

					break;
				case 'POST':
					
					date_default_timezone_set("Asia/Bangkok");

					$data = array(
					'kode_merchant' => $this->input->post('kode_merchant'),
					'kode_sku' => $this->input->post('kode_sku'),
					'kondisi' => $this->input->post('kondisi'),
					//    'keterangan' => $this->input->post('keterangan'),
					'min_pembelian' => $this->input->post('min_pembelian'),
					'stok' => $this->input->post('stok'),
					'harga' => $this->input->post('harga'),
					'promo' => $this->input->post('promo'),
					'berat_produk' => $this->input->post('berat_produk'),
					'berat_paket' => $this->input->post('berat_paket'),
					'created_by' => $this->input->post('kode_merchant')
					);

					//   if(!empty($_GET["id"]))
					//   {
						//  $id=intval($_GET["id"]);
						//  $mhs->update_mhs($id);
					$r = $this->api_model->insert_product($data);
					// $this->response($r);

					return $r;

					break;
				case 'DELETE':

					//    $id=intval($_GET["id"]);
					// 	 $mhs->delete_mhs($id);
					$this->restapi->response_api('405');

					break;
				default:
				
				// Invalid Request Method
					header("HTTP/1.0 405 Method Not Allowed");
					break;
				break;
			}

		}else {
			$this->restapi->response_api('405');
		}

	}
	
	
	function detail_toko(){

		header('Content-Type: application/json');

		$rest = $this->config->item('rest_key_name');
		$get_key = $_GET[$rest];

		$apikey = $this->restapi->auth_api_key($get_key);
		$task_id = $_GET['TaskId'];
		$sub_task_id = $_GET['SubTaskId'];
		$status = $_GET['Status'];
		
		$ReturnData = $this->api_model->get_toko($task_id,$sub_task_id,$status,$apikey);

	}

	// function product(){
		
	// }

	// function stok(){
		
	// }

	// function stok_produk_aktif(){
		
	// }

	// function update_stok_produk_aktif(){
		
	// }

	// function harga_produk(){
		
	// }

	// function harga_produk_aktif(){
		
	// }

	// function update_harga_produk(){
		
	// }

	// function update_status_product(){
		
	// }

	// function update_promosi(){
		
	// }

	// // API POST
	// function update_product(){

	// 	date_default_timezone_set("Asia/Bangkok");

	// 	$data = array(
    //        'kode_merchant' => $this->input->post('kode_merchant'),
    //        'kode_sku' => $this->input->post('kode_sku'),
    //        'kondisi' => $this->input->post('kondisi'),
    //     //    'keterangan' => $this->input->post('keterangan'),
    //        'min_pembelian' => $this->input->post('min_pembelian'),
    //        'jumlah' => $this->input->post('jumlah'),
    //        'harga' => $this->input->post('harga'),
    //        'promo' => $this->input->post('promo'),
    //        'berat_produk' => $this->input->post('berat_produk'),
    //        'berat_paket' => $this->input->post('berat_paket'),
    //        'is_product' => '1',
    //        'created_by' => $this->input->post('kode_merchant'),
    //        'created_when' => date("Y-m-d H:i:s")
    //        );

    //     $r = $this->api_model->insert($data);
    //     // $this->response($r);

	// 	return $r;

	// 	// $request_method=$_SERVER["REQUEST_METHOD"];

	// 	// var_dump($request_method); die();
	// }

}
