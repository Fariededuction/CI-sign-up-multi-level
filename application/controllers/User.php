<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // is_logged_in();
    $this->load->library('form_validation');
    $this->load->library('pagination');
    $this->load->model('M_Opentrip');
     $this->load->model('Files');
  }

  public function index()
  {
    $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');
  //    $data['kodeunik'] = $this->M_Opentrip->buat_kode();
    //  $data['jumlahPemesanan'] = $this->M_Opentrip->hitungJumlahPaket($email);
    $data['judul_halaman'] = 'Profil Saya';
    $data['content'] = 'layout/Back-end/Calon_Pendaki/V_Profil_saya';
    $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);

  }

  public function dashboardAdmin()
  {
    $data['akun'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul_halaman'] = 'Admin Dashboard';
    $data['content'] = 'layout/Back-end/Admin/V_Dashboard';
    $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);

  }


  public function ubahProfil()
  {


    $this->form_validation->set_rules('nama_depan', 'Nama_depan', 'required|trim',
    ['required' => 'nama depan tidak boleh kosong!']);
//    $this->form_validation->set_rules('placeholder', 'placeholder', 'required|trim',
//    ['required' => 'npwpd depan tidak boleh kosong!']);
    $this->form_validation->set_rules('nama_belakang', 'Nama_belakang', 'required|trim',
    ['required' => 'nama belakang tidak boleh kosong!']);
    $this->form_validation->set_rules('no_telepon', 'No_telepon', 'required|trim',
    ['required' => 'no telepon tidak boleh kosong!']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',
    ['required' => 'Alamat tidak boleh kosong!']);
    $this->form_validation->set_rules('jenis_reklame', 'Jenis_reklame', 'required|trim',
    ['required' => 'Jenis Reklame tidak boleh kosong!']);
    $this->form_validation->set_rules('nama_perusahaan', 'Nama_perusahaan', 'required|trim',
    ['required' => 'Nama Perusahaan tidak boleh kosong!']);
    $this->form_validation->set_rules('isi_reklame', 'isi_reklame', 'required|trim',
    ['required' => 'Teks / isi reklame tidak boleh kosong!']);
    $this->form_validation->set_rules('alamat_objek_reklame', 'alamat_objek_reklame', 'required|trim',
    ['required' => 'Alamat objek penempatan reklame tidak boleh kosong!']);

    $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim',
    ['required' => 'kecamatan tidak boleh kosong!']);

    $this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|trim',
    ['required' => 'kelurahan tidak boleh kosong!']);



    if ($this->form_validation->run() == false) {
      $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
      $data['user'] = $this->db->get_where('PERMOHONAN_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
  //    $data['token'] = $this->db->get_where('USER_TOKEN_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
    //  $data['kodeunik'] = $this->M_Opentrip->buat_kode();
  $data['get_kec']=$this->Files->get_kec();
  $data['get_kel']=$this->Files->get_kel();
      $data['judul_halaman'] = 'Profil Saya';
      $data['content'] = 'layout/Back-end/Calon_Pendaki/V_ubahProfil';
      $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);


    }else{
    //  $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE',['EMAIL' => $email])->row_array();
    //  $data['token'] = $this->db->get_where('USER_TOKEN_ONLINE',['TOKEN' => $token])->row_array();
    //  $data['kodeunik'] = $this->M_Opentrip->buat_kode();
      $email = $this->input->post('email', true);
      $namadepan= $this->input->post('nama_depan');

      $data = [
        'EMAIL' => htmlspecialchars($this->input->post('email', true)),
        'NPWPD' => htmlspecialchars($this->input->post('npwpd', true)),
        'NAMA_DEPAN' => htmlspecialchars($this->input->post('nama_depan', true)),
        'NAMA_BELAKANG' => htmlspecialchars($this->input->post('nama_belakang', true)),
        'ALAMAT' => htmlspecialchars($this->input->post('alamat', true)),
        'NO_TELEPON' => htmlspecialchars($this->input->post('no_telepon', true)),
       'JENIS_REKLAME' => htmlspecialchars($this->input->post('jenis_reklame', true)),
       'NAMA_PERUSAHAAN' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
       'JABATAN' => htmlspecialchars($this->input->post('jabatan', true)),
       'ALAMAT_DI_SURABAYA' => htmlspecialchars($this->input->post('alamat_di__surabaya', true)),
      'NAMA_PEMILIK_CLIENT' => htmlspecialchars($this->input->post('nama_pemilik_client', true)),
      'ALAMAT_CLIENT' => htmlspecialchars($this->input->post('alamat_klien', true)),
      'NAMA_PERUSAHAAN_CLIENT' => htmlspecialchars($this->input->post('nama_perusahaan_client', true)),
      'JENIS_PRODUK' => htmlspecialchars($this->input->post('jenis_produk', true)),
      'LETAK_REKLAME' => htmlspecialchars($this->input->post('letak_reklame', true)),
      'STATUS_TANAH' => htmlspecialchars($this->input->post('status_tanah', true)),
      'PANJANG' => htmlspecialchars($this->input->post('panjang', true)),
      'LEBAR' => floatval($this->input->post('lebar', true)),
      'LUAS' => htmlspecialchars($this->input->post('luas', true)),
      'JUMLAH_REKLAME' => htmlspecialchars($this->input->post('jumlah_reklame', true)),
      'LAMA_PENYELENGGARAN_HARI' => htmlspecialchars($this->input->post('lama_penyelenggaran_hari', true)),
      'MULAI_TANGGAL_PEMASANGAN' => htmlspecialchars($this->input->post('mulai_tanggal_pemasangan', true)),
      'JENIS_REKLAME' => htmlspecialchars($this->input->post('jenis_reklame', true)),
      'UKURAN_STICKER' => htmlspecialchars($this->input->post('ukuran_sticker', true)),
      'JUMLAH_LEMBAR_STCKER' => htmlspecialchars($this->input->post('jumlah_lembar_stiker', true)),
      'LAMA_PENYELENGGARAN_EVEN' => htmlspecialchars($this->input->post('lama_penyelenggaran_even', true)),
      'LAMA_PENYELENGGARAN_DETIK' => htmlspecialchars($this->input->post('lama_penyelenggaran_detik', true)),
      'LAMA_PENYELENGGARAN_MENIT' => htmlspecialchars($this->input->post('lama_penyelenggaran_menit', true)),
      'ISI_REKLAME' => htmlspecialchars($this->input->post('isi_reklame', true)),
      'TIMETRANS' => date('d-M-y'),
      'ALAMAT_OBJEK_REKLAME' => htmlspecialchars($this->input->post('alamat_objek_reklame', true)),
      'KECAMATAN' => htmlspecialchars($this->input->post('kecamatan', true)),
      'KELURAHAN' => htmlspecialchars($this->input->post('kelurahan', true)),
      'NO_PELAYANAN_ONLINE'  => time(),
    //  'IMAGE' => ($this->input->post('image', true)),

      ];

        $berkas_data = [

                            'NO_PELAYANAN_ONLINE'  => time(),
                            'EMAIL' => htmlspecialchars($this->input->post('email', true)),
                            'ISI_REKLAME' => htmlspecialchars($this->input->post('isi_reklame', true)),
                            'TIMETRANS' => date('d-M-y'),
                          ];





        $this->db->set($data);
      $this->db->where('NAMA_DEPAN', $namadepan);
  //    $this->db->update('DAFTAR_PERMOHONAN_WP_ONLINE');
      $this->db->INSERT('PERMOHONAN_ONLINE', $data);
      $this->db->INSERT('BERKAS_ONLINE', $berkas_data);
      //    $this->db->insert('PERMOHONAN_ONLINE');

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
      </button>
      <span>
      <b> Success - </b> Data berhasil di Masukkan! Cek di tabel wajib pajak untuk Cetak Permohonan</span>
      </div>');
      redirect('User');
    }
  }

  public function lihatProfil()
  {

    $data['akun'] = $this->db->get_where('PERMOHONAN_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');
        $data['EMAIL'] = $email;
  //    $data['FOTO_OBYEK_REKLAME'] = $this->db->get('FOTO_OBYEK_REKLAME')->result();
    //  $data['FOTO_OBYEK_REKLAME'] = $this->db->get('FOTO_OBYEK_REKLAME');

    $config['base_url'] = site_url('User/lihatProfil'); //site url
      $config['total_rows'] = $this->db->count_all('PERMOHONAN_ONLINE'); //total row
      $config['per_page'] = 5;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);

      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
       $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['tabel_wp'] = $this->Files->tabel_wp($config["per_page"], $data['page']);
    $data['pagination'] = $this->pagination->create_links();



    if ($this->form_validation->run() == false) {
      $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
      $data['user'] = $this->db->get_where('PERMOHONAN_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
      $data['token'] = $this->db->get_where('USER_TOKEN_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
    //  $data['kodeunik'] = $this->M_Opentrip->buat_kode();
//    $data['PERMOHONAN_ONLINE'] = $this->files->getRows();
  //    $data['judul_halaman'] = 'Profil Saya';
  //    $data['PERMOHONAN_ONLINE'] = $this->files->getRows();
      $data['content'] = 'layout/Back-end/Calon_Pendaki/V_LihatProfil';
        $data['EMAIL'] = $email;
  $data['PERMOHONAN_ONLINE'] = $this->db->get('PERMOHONAN_ONLINE')->result();
  //$data['tabel_wp'] = $this->Files->tabel_wp();
      $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);

    }else{
      $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE',['EMAIL' => $email])->row_array();
    //  $data['token'] = $this->db->get_where('USER_TOKEN_ONLINE',['TOKEN' => $token])->row_array();
    //  $data['kodeunik'] = $this->M_Opentrip->buat_kode();
      $email = $this->input->post('email', true);
      $namadepan= $this->input->post('nama_depan');


      $data = [
        'EMAIL' => htmlspecialchars($this->input->post('email', true)),
    //    'NO_FORMULIR' => htmlspecialchars($this->input->post('no_formulir', true)),
        'NAMA_DEPAN' => htmlspecialchars($this->input->post('nama_depan', true)),
        'NAMA_BELAKANG' => htmlspecialchars($this->input->post('nama_belakang', true)),
        'NPWPD' => htmlspecialchars($this->input->post('placeholder', true)),
        'ALAMAT' => htmlspecialchars($this->input->post('alamat', true)),
        'NO_TELEPON' => htmlspecialchars($this->input->post('no_telepon', true)),
       'JENIS_REKLAME' => htmlspecialchars($this->input->post('jenis_reklame', true)),
       'NAMA_PERUSAHAAN' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
       'JABATAN' => htmlspecialchars($this->input->post('jabatan', true)),
       'ALAMAT_DI_SURABAYA' => htmlspecialchars($this->input->post('alamat_di__surabaya', true)),
      'NAMA_PEMILIK_CLIENT' => htmlspecialchars($this->input->post('nama_pemilik_client', true)),
      'ALAMAT_CLIENT' => htmlspecialchars($this->input->post('alamat_klien', true)),
      'NAMA_PERUSAHAAN_CLIENT' => htmlspecialchars($this->input->post('nama_perusahaan_client', true)),
      'JENIS_PRODUK' => htmlspecialchars($this->input->post('jenis_produk', true)),
      'LETAK_REKLAME' => htmlspecialchars($this->input->post('letak_reklame', true)),
      'STATUS_TANAH' => htmlspecialchars($this->input->post('status_tanah', true)),
      'PANJANG' => htmlspecialchars($this->input->post('panjang', true)),
      'LEBAR' => floatval($this->input->post('lebar', true)),
      'LUAS' => htmlspecialchars($this->input->post('luas', true)),
      'JUMLAH_REKLAME' => htmlspecialchars($this->input->post('jumlah_reklame', true)),
      'LAMA_PENYELENGGARAN_HARI' => htmlspecialchars($this->input->post('lama_penyelenggaran_hari', true)),
      'MULAI_TANGGAL_PEMASANGAN' => htmlspecialchars($this->input->post('mulai_tanggal_pemasangan', true)),
      'JENIS_REKLAME' => htmlspecialchars($this->input->post('jenis_reklame', true)),
      'UKURAN_STICKER' => htmlspecialchars($this->input->post('ukuran_sticker', true)),
      'JUMLAH_LEMBAR_STCKER' => htmlspecialchars($this->input->post('jumlah_lembar_stiker', true)),
      'LAMA_PENYELENGGARAN_EVEN' => htmlspecialchars($this->input->post('lama_penyelenggaran_even', true)),
      'LAMA_PENYELENGGARAN_DETIK' => htmlspecialchars($this->input->post('lama_penyelenggaran_detik', true)),
      'LAMA_PENYELENGGARAN_MENIT' => htmlspecialchars($this->input->post('lama_penyelenggaran_menit', true)),
      'ALAMAT_OBJEK_REKLAME' => htmlspecialchars($this->input->post('alamat_objek_reklame', true)),
      'ISI_REKLAME' => htmlspecialchars($this->input->post('isi_reklame', true)),
      'TIMETRANS' => date('d-M-y'),
      'NO_PELAYANAN_ONLINE'  => htmlspecialchars($this->input->post('token', true)),

      ];




      $this->db->set($data);


      $this->db->where('NAMA_DEPAN', $namadepan);
  //    $this->db->update('DAFTAR_PERMOHONAN_WP_ONLINE');
      $this->db->INSERT('PERMOHONAN_ONLINE', $data);
      //    $this->db->insert('PERMOHONAN_ONLINE');

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
      </button>
      <span>
      <b> Success - </b> Data berhasil di Masukkan! TUNGGU KABAR NOTIFIKASI DARI KAMI!!</span>
      </div>');
      redirect('User');
    }
  }


  public function tabel()
  {
    $data['akun'] = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');

    $config['base_url'] = site_url('User/tabel'); //site url
      $config['total_rows'] = $this->db->count_all('PERMOHONAN_ONLINE'); //total row
      $config['per_page'] = 5;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);

      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
       $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['tabel_wp'] = $this->Files->tabel_wp($config["per_page"], $data['page']);
    $data['pagination'] = $this->pagination->create_links();

//    $data['a'] =  $this->db->get_where('BERKAS_ONLINE',['NO_PELAYANAN_ONLINE'=>$no_pelayanan_online])->row();
//    $data['joinDataGunung1'] = $this->M_Opentrip->joinDataGunung1();
    $data['judul_halaman'] = 'Tabel Wp';
    $data['content'] = 'layout/Back-end/Calon_Pendaki/Tabel_Wp';
    $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);
  }

  public function cetak($no_pelayanan_online)
  {
      $data['data'] =  $this->db->get_where('PERMOHONAN_ONLINE',['NO_PELAYANAN_ONLINE'=>$no_pelayanan_online])->row();
      $this->load->view('Cetak/Cetak_permohonan', $data);
  }

}




/* End of file User.php */
