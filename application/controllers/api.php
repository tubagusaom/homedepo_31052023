<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// require APPPATH . "libraries/format.php";
// require APPPATH . "libraries/RestController.php";

// use chriskacerguis\RestServer\RestController;

// class Api extends RestController {
class Api extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		// $this->load->library('restapi');
		$this->load->model('api_model');
  	}


		function index() {

			$this->api_model->response_api($id='405');
			echo json_encode($data);

			// $xxx = $this->config->rest_key_name();
			// var_dump($xxx); die();

		}

    function test(){

			header('Content-Type: application/json');

        // echo json_encode("OK");

				// echo json_encode(
        //     array(
        //         'success' => true,
        //         'message' => 'Get All Data Siswa',
        //     )
        // );

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





	function get_registered_api($id) {

		// $id_member = $this->auth->get_user_data()->id_member;

		$data = $this->api_model->get_api_key($id);

		return ($data);
		// var_dump(($data)); die();
	}


	function product() {
		$request_method=$_SERVER["REQUEST_METHOD"];

		// $apikey = $inputs["api_key"];

		$apikey = $this->config->item('rest_key_name');
		$keyval = $_GET[$apikey];

		$rest = $this->get_registered_api($keyval);

		
		// var_dump(($rest)); die();
		
		if ($rest != null) {

			switch ($request_method) {
				case 'GET':

					$id=$this->uri->segment(3);

					if(!empty($id))
					{
						//  $this->api_model->response_api($id='200');
						$this->api_model->get_product($id);
					}
					else
					{
						// $this->api_model->response_api($id='200');
						$this->api_model->get_product();
					}

					

					// var_dump($this->get_registered_api()->key); die();

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
					//   }
					//   else
					//   {
					// 	//  $mhs->insert_mhs();
					//   }
					break;
				case 'DELETE':
					//    $id=intval($_GET["id"]);
					// 	 $mhs->delete_mhs($id);
					$r = $this->api_model->response_api($id='405');

						break;
				default:
				// Invalid Request Method
					header("HTTP/1.0 405 Method Not Allowed");
					break;
				break;
			}

		}else {
			$r = $this->api_model->response_api($id='405');
		}

	}

	// API POST
	function update_product(){

		date_default_timezone_set("Asia/Bangkok");

		$data = array(
           'kode_merchant' => $this->input->post('kode_merchant'),
           'kode_sku' => $this->input->post('kode_sku'),
           'kondisi' => $this->input->post('kondisi'),
        //    'keterangan' => $this->input->post('keterangan'),
           'min_pembelian' => $this->input->post('min_pembelian'),
           'jumlah' => $this->input->post('jumlah'),
           'harga' => $this->input->post('harga'),
           'promo' => $this->input->post('promo'),
           'berat_produk' => $this->input->post('berat_produk'),
           'berat_paket' => $this->input->post('berat_paket'),
           'is_product' => '1',
           'created_by' => $this->input->post('kode_merchant'),
           'created_when' => date("Y-m-d H:i:s")
           );

        $r = $this->api_model->insert($data);
        // $this->response($r);

		return $r;

		// $request_method=$_SERVER["REQUEST_METHOD"];

		// var_dump($request_method); die();
	}

}
