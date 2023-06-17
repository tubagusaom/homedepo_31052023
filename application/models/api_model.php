<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends MY_Model {     

  public function get_konfigurasi($id = null) {

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
        $this->restapi->response_api('201');
    }
    else
    {
        $this->restapi->response_api('400');
    }

    // header('Content-Type: application/json');
    // echo json_encode($response);
}







    function get_api_key($key) {
        // $this->db->where('user_id', $id);
        // $this->db->limit(1);
        $this->db->select('*');

        // return $this->db->get('api_keys')->row();

        $this->db->from('api_keys');
    
        $this->db->where('key', $key);
        $query = $this->db->get()->row();
        
        // $query->row();

        if(count($query) > 0){
            return $query;
        }else{
            return false;
        }

    }


    public function get_product($id=false) {
        if ($id == false) {
            // return $this->db->get('r_konfigurasi_aplikasi')->result_array();

            $this->db->select('
                id_member AS kode_merchant,
                kode_product AS sku,
                kondisi_product AS kondisi,
                min_pesan_product AS min_pembelian,
                jumlah_product AS stok,
                harga_product AS harga,
                disc_product AS promo,
                berat_product AS berat_produk,
                berat_paket AS berat_paket,
                is_product AS status
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
                berat_paket AS berat_paket,
                is_product AS status
            ');
            $this->db->from('api_product');
            $this->db->where("kode_product",$id);
            
            $data = $this->db->get();
            $data_product = $data->result();
        }

        // return $data_product->result();

        // header('Content-Type: application/json');
        $this->restapi->response_api('200');
        $data_arr['data_product'] = $data_product;
        
        echo json_encode($data_arr);

    }

    function get_toko($task_id,$sub_task_id,$status,$data) {

        // var_dump($data->user_id); die();
        $id_user = $data->user_id;

        if ($data == TRUE) {
            
            $this->db->select('
                a.member,
                c.province_name,
                a.kode_member,
                a.is_member,
                count(b.id) AS total_product
            ');
            $this->db->from(kode_tbl() . 'members a');
            $this->db->join(kode_tbl() . 'product b', 'a.id=b.id_member');
            $this->db->join('m_ro_provinsi c', 'a.id_province_member=c.province_id');
            $this->db->where("a.id",$id_user);
            $query = $this->db->get()->row();
            // $merchant = $query->result();

            $query_row['LocationCode'] = $query->kode_member;
            $query_row['LocationStatus'] = $query->is_member;
            $query_row['CountItems'] = $query->total_product;

            $get_result['TaskId'] = $task_id;
            $get_result['SubTaskId'] = $sub_task_id;
            $get_result['Status'] = $status;
            $get_result['StoreList'] = $query_row;
            
            
            // $result['Merchant'] = json_encode([$query->member,$query->province_name]);
            $result[$query->member] = $query->province_name;
            $result['Data'] = $get_result;
            $result['Response'] = $this->restapi->response_api('200');

            

        } else {
            $result['response'] = $this->restapi->response_api('400');
        }
        
        $data_arr = $result;
        
        echo json_encode($data_arr);
    }

    

}
