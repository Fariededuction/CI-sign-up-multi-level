<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Files extends CI_Model {
    public function getRows($email = ''){
        $this->db->select('EMAIL,IMAGE');
        $this->db->from('PERMOHONAN_ONLINE');
        if($email){
            $this->db->where('EMAIL',$Email);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('IMAGE');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    public function insert($data = array()){
        $insert = $this->db->insert_batch('PERMOHONAN_ONLINE',$data);
        return $insert?true:false;
    }

    public function upload(){
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;

    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  public function tabel_wp($limit, $start)
  {
    $this->db->where('PERMOHONAN_ONLINE.EMAIL', $this->session->userdata('email'));
    
    $this->db->order_by('TIMETRANS','DESC');
    return $this->db->get('PERMOHONAN_ONLINE',$limit, $start)->result();
  }

  function get_kec(){
      $query = $this->db->get('KECAMATAN_PBB');
      return $query->result_array();
  }

  function get_kel(){
      $query = $this->db->get('KELURAHAN_PBB');
      return $query->result_array();
  }

  public function save($upload){
    $data = array(
      'NAMA_FILE' => $upload['file']['file_name'],
     'UKURAN_FILE' => $upload['file']['file_size'],
     'TIPE_FILE' => $upload['file']['file_type']
    );
    $this->db->insert('PERMOHONAN_ONLINE', $data);

}
}
