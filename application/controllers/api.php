<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {


	function __construct()

	{
		parent::__construct();

		// $this->load->library('restapi');
  }


		function index() {
			header('Content-Type: application/json');

			$this->db->select('template_name AS name_template');
			$data = $this->db->get('template')->result();

			echo json_encode(
			    array(
			        // 'success' => true,
			        // 'message' => 'Get Data Template',
			        'Template' => $data,
			    )
			);

			// echo json_encode($data);

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
}
