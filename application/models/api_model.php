<?php

class Api_model extends MY_Model {

    public function response_api($id){

        // var_dump($id); die();
        
        $data=array(
            '200' => 'OK',
            '201' => 'Successfully Created.',
            '400' => 'Bad Request.',
            '401' => 'Response Unauthorized.',
            '404' => 'Response Not Found.',
            '405' => 'Response Not Allowed.',
            '409' => 'Response Conflict.',
            '500' => 'Internal Server Error.'
         );

         $response=array(
            'status' => $id,
            'message' =>$data[$id]
         );

        // var_dump($data[$id]); die();

        //  return $data[$id];
         header('Content-Type: application/json');
         echo json_encode($response);
    }     

  public function get_konfigurasi($id = null)
  {

    // var_dump('ok'); die();

      if ($id == null) {
          // return $this->db->get('r_konfigurasi_aplikasi')->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');

          $data_konfigurasi = $this->db->get();
      } else {
          // return $this->db->get_where('r_konfigurasi_aplikasi', ['id' => $id])->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');
          $this->db->where("id",$id);

          $data_konfigurasi = $this->db->get();
      }

      return $data_konfigurasi->result_array();

  }

  public function get_product($id=false) {
    if ($id == false) {
        // return $this->db->get('r_konfigurasi_aplikasi')->result_array();

        $this->db->select('
            id_member AS kode_merchant,
            kode_product AS kode_sku,
            kondisi_product AS kondisi,
            min_pesan_product AS min_pembelian,
            jumlah_product AS jumlah,
            harga_product AS harga,
            disc_product AS promo,
            berat_product AS berat_produk,
            berat_paket AS berat_paket
        ');
        $this->db->from('api_product');

        $data = $this->db->get();
        $data_product = $data->result();

    } else {
        // return $this->db->get_where('r_konfigurasi_aplikasi', ['id' => $id])->result_array();

        $this->db->select('
            id_member AS kode_merchant,
            kode_product AS kode_sku,
            kondisi_product AS kondisi,
            min_pesan_product AS min_pembelian,
            jumlah_product AS jumlah,
            harga_product AS harga,
            disc_product AS promo,
            berat_product AS berat_produk,
            berat_paket AS berat_paket
        ');
        $this->db->from('api_product');
        $this->db->where("kode_product",$id);
        
        $data = $this->db->get();
        $data_product = $data->result();
    }

    // return $data_product->result();

    // header('Content-Type: application/json');
    $this->response_api($id='200');
    $data_arr['data_product'] = $data_product;
    
    echo json_encode($data_arr);

  }

    public function insert_product($data){

        date_default_timezone_set("Asia/Bangkok");
       
        $this->id_member    = $data['kode_merchant'];
        $this->kode_product = $data['kode_sku'];
        $this->kondisi_product = $data['kondisi'];
        $this->min_pesan_product = $data['min_pembelian'];
        $this->jumlah_product = $data['stok'];
        $this->harga_product = $data['harga'];
        $this->disc_product = $data['promo'];
        $this->berat_product = $data['berat_produk'];
        $this->berat_paket = $data['berat_paket'];
        $this->is_product = '1';
        $this->created_by = $data['created_by'];
        $this->created_when = date("Y-m-d H:i:s");

        if($this->db->insert('api_product',$this))
        {
            $this->response_api($id='201');
        }
        else
        {
            $this->response_api($id='400');
        }

        // header('Content-Type: application/json');
        // echo json_encode($response);
    }

    

}
