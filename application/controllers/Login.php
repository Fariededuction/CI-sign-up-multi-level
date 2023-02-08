<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_Opentrip');
    $this->load->helper('captcha');
  }

  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    $this->form_validation->set_rules('captcha', 'Captcha', 'required|trim');
    $data['DAFTAR_PERMOHONAN_WP_ONLINE'] = $this->db->get('DAFTAR_PERMOHONAN_WP_ONLINE')->result_array();
    if ($this->form_validation->run() == false) {

      $path = './assets/captcha/';
     if (!file_exists($path)){
       $buat = mkdir($path,0777);
       if(!$buat) {
         return;
       }
     }

     $kata = array_merge(range('0','9'), range('A','z'));
     $acak = shuffle($kata);
     $str = substr(implode($kata),0,5);

     $data_ses = array('captcha_str'=>$str);
     $this->session->set_userdata($data_ses);

     $vals = array(
       'word' =>$str,
       'img_path' =>$path,
       'img_url'=>base_url().'assets/captcha/',
       'img_width'=>'150',
       'img_height'=> 50,
       'expiration'=>7200
     );

     $capc = create_captcha($vals);
     $data['captcha_image'] = $capc['image'];



      $data['judul_halaman'] = 'Login - DAFTAR REKLAME ONLINE';
      $data['navActive'] = $data['judul_halaman'];
      $this->load->view('layout/Front-end/Login/V_Login', $data, FALSE);



    } else {
      $this->_login();
    }
  }

  public function index2()
  {
    $this->load->view('welcome_message');
  }

  private function _login()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $email = $this->input->post('email');
    $password = $this->input->post('password');
      $captcha = $this->input->post('captcha');
    //select * form table user dan row array untuk satu baris
    $user = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $email])->row_array();

    if ($this->input->post('captcha') != $this->session->userdata('captcha_str')){
        $this->session->set_flashdata('message','<div class = "alert alert-danger" role ="alert"captcha
        yang dimasukkan salah</div>');
        redirect('login');
    }

    if ($user) { // if jika usernya ada
      if ($user['USER_AKTIF'] == 1) { //if apakah user tersebut aktive
        //cek password apakah yg di input sama tidak dengan data yang di database
        if (password_verify($password, $user['PASSWORD'])) {
          $data = [
            'email' => $user['EMAIL'],
            'level_akses' => $user['LEVEL_AKSES']
            //role id nantinya akan menentukan untuk menu, akan lebih banyak daripada member
          ];
          //simpan datanya kedalam session sebagai userdata dari array diatas
          $this->session->set_userdata($data);
          if ($user['LEVEL_AKSES'] == 1) {
            redirect('user/dashboardAdmin');
          } elseif($user['LEVEL_AKSES'] == 2) {
            redirect('user');
          } elseif($user['LEVEL_AKSES'] == 3) {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
          redirect('login');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not been activated!</div>');
        redirect('login');
      }
    } else { // kalo tidak kasi pesan eror
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
      redirect('login');
    }

  }

  public function transaksicetak()
  {
    $id_daftar		= $this->input->get('id_daftar');
    $cash			= $this->input->get('cash');
    $nama_belakang			= $this->input->get('nama_belakang');

    $this->load->model('M_Opentrip');
    $daftar = $this->M_Opentrip->get_baris($id_daftar)->row()->NAMA_DEPAN;
    $namabelakang = $this->M_Opentrip->get_baris($id_daftar)->row()->NAMA_BELAKANG;

    $this->load->library('cfpdf');
    $pdf = new FPDF('P','mm','A5');
    $pdf->AddPage();
    //  $pdf->SetFont('Arial', 'B', 20);
    // $pdf->SetFillColor(136, 150, 200);
    // $pdf->SetTextColor(225);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(130, 3, "BADAN PENDAPATAN DAERAH KOTA SURABAYA", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('Arial','',10);
    $pdf->Ln();
    $pdf->Cell(25, 4, 'Nama Pendaftar :', 0, 0, 'L');
    $pdf->Cell(85, 4, $daftar, 0, 0, 'C');
    $pdf->Ln();

    $pdf->Cell(25, 4, 'keterangan :', 0, 0, 'L');
    $pdf->Cell(85, 4, $cash, 0, 0, 'C');
    $pdf->Ln();

    $pdf->Cell(25, 4, 'Flag_permohonan :', 0, 0, 'L');
    $pdf->Cell(85, 4, $namabelakang, 0, 0, 'C');
    $pdf->Ln();

    $pdf->Cell(130, 5, '-----------------------------------------------------------------------------------------------------------', 0, 0, 'L');
    $pdf->Ln();



    $pdf->Cell(130, 5, '-----------------------------------------------------------------------------------------------------------', 0, 0, 'L');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(130, 5, "Terimakasih telah mendaftar secara online", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell(100, 5, date('F j, Y'), 0, 1);

    $pdf->Output();
  }

  public function dashboardAdmin()
  {
    $data['judul_halaman'] = 'Admin Dashboard';
    $data['navActive'] = "Admin Dashboard";
    $data['content'] = 'layout/Back-end/Admin/V_Dashboard';
    $this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);

  }

  public function registrasi()
  {

    //agar saat login atau sedang dalam sistem tidak dapat masuk kelogin
    // if ($this->session->userdata('email')) {
    //     redirect('user');
    // }

    //name diambil dari form,required yaitu form tidak bole kosong
    //trim untuk menghapus spasi jadi ridak masuk ke database
    //$dariDB = $this->M_Opentrip->cekkodeid();
    //$dariDB = $nourut + 1;
    //    $this->form_validation->set_rules('id', 'Id', 'required|trim');
    $this->form_validation->set_rules('nama_depan', 'Nama_depan', 'required|trim');
    $this->form_validation->set_rules('nama_belakang', 'Nama_belakang', 'required|trim');
    $this->form_validation->set_rules('email', 'Email',  'required|trim|valid_email|is_unique[DAFTAR_PERMOHONAN_WP_ONLINE.EMAIL]', [
      'is_unique' => 'This email has already registered!'
    ]);
    //is_unique akan mengecek table di data base hanya tinggal masukan nama table dan field nya
    //minimal length nya berapa lalau matches untuk harus sama dengan inputan yg mana
    $this->form_validation->set_rules('password1', 'password',  'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password dont match!',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'password',  'required|trim|matches[password1]');

    if ($this->form_validation->run() == false){
      $data['judul_halaman'] = 'Registrasi - Opentrip';
      $this->load->view('layout/Front-end/Login/V_Registrasi', $data, FALSE);
      //$data['content'] = 'layout/Front-end/Login/V_Registrasi';
      //$this->load->view('layout/Back-end/Template/wrapper', $data, FALSE);
    }
    else {
      $email = $this->input->post('email', true);
      $data = [
        //        'ID' => htmlspecialchars($this->input->post('id', true)),
        'NAMA_DEPAN' => htmlspecialchars($this->input->post('nama_depan', true)),
        'NAMA_BELAKANG' => htmlspecialchars($this->input->post('nama_belakang', true)),
        'EMAIL' => htmlspecialchars($email),
        'PASSWORD' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        //enkripsi password menggunakan hash dan algoritma PASSWORD_DEFAULT suapaya dipilihkan yg terbaik oleh php
        'FOTO_PROFIL' => 'default.jpg',
        'FOTO_SAMPUL' => 'default.jpg',
        'LEVEL_AKSES' => 2,
        'USER_AKTIF' => 1,
        'TANGGAL_REGISTRASI' => date('d-M-y')
      ];

      //siapkan token berupa bilangan random untuk link ke email agar bisa aktivasi
  //  $token = base64_encode(random_int(32)); //untuk membuat bilangan random 32 digit dibungkus lagi oleh fungsi base64 agar dapat dikenali oleh sql 2 2 fungsi punya php

      //var_dump($token);
      //die;
      //lalu masukan pada table sementara
      $usertoken = [
        'EMAIL' => $email,
       'TOKEN' => time()
  //      'TANGGAL_TOKEN' => time() //untuk membuat sebuah aturan jika pada 1 hari user tidak di aktivasi maka
      ];

      $this->db->insert('DAFTAR_PERMOHONAN_WP_ONLINE', $data);
      $this->db->insert('USER_TOKEN_ONLINE', $usertoken);

      //setalah datanya di insert maka kirim email keuser yg tadi registrasi
      //parameter $token untuk mengirim token ke email
      //paremeter verify untuk inisialisasi email bahwa email g dikirm untuk veryfikasi email
  //     $this->_sendEmail($token, 'verify');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Congratulation your account has been created. please Actived your account</div>');
      redirect('login');
    }
  }

  //jadi send email memiliki argument untuk membedakan tujuan pengiriman email
  //argument untuk membedakan apakah dia veryfikasi atau forgot password
  private function _sendEmail($token, $type)
  {
    $config = [
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_user' => 'WandaSalon199802@gmail.com',    // Ganti dengan email gmail kamu
      'smtp_pass' => 'Salonwanda199802',      // Password gmail kamu
      'smtp_port' => 465,
      'crlf'      => "\r\n",
      'newline'   => "\r\n"
    ];
    $ci = get_instance();
    $ci->email->initialize($config);
    // Email dan nama pengirim
    $ci->email->from('no-reply@WandaSalon.com', 'WandaSalon.com | WandaSalon');
    // Email penerima
    $email = $this->input->post('EMAIL');
    $ci->email->to($email); // Ganti dengan email tujuan kamu

    if ($type == 'verify') {
      // Subject email
      $ci->email->subject('Account verification');
      // Isi email
      $ci->email->message('click this link to verify your account :    <a href="' . base_url() . 'login/verify?email=' . $email . '&token=' . urlencode($token) . '">Activate</a>');
      //urlencode adalah fungsi untuk menerjemahkan token yg ada di url, agar token dapat terbaca oleh url
    } else if ($type == 'forgot') {
      // Subject email
      $ci->email->subject('Reset Password');
      // Isi email
      $ci->email->message('click this link to reset your password :    <a href="' . base_url() . 'login/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Reset Password</a>');
    }


    if ($this->email->send()) {
      return true;
    } else {
      //jika gagal tempilkan erornya
      echo $this->email->print_debugger();
      die;
    }
  }

  public function verify()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $email])->row_array();
    if ($user) {
      $usertoken = $this->db->get_where('USER_TOKEN_ONLINE', ['TOKEN' => $token])->row_array();

      if ($usertoken) {
        //cek apakah waktu aktivasi kurang dari 1 hari
        if (date('d-M-y') - $usertoken['TANGGAL_TOKEN'] < (60 * 60 * 24)) {

          $this->db->set('USER_AKTIF', 1);
          $this->db->where('EMAIL', $email);
          $this->db->update('DAFTAR_PERMOHONAN_WP_ONLINE'); //kalo pake query builder

          $this->db->delete('USER_TOKEN_ONLINE', ['EMAIL' => $email]);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated!</div>');
          redirect('login');
        } else {
          $this->db->detele('DAFTAR_PERMOHONAN_WP_ONLINE', ['EMAIL' => $email]);
          $this->db->delete('USER_TOKEN_ONLINE', ['EMAIL' => $usertoken]);
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Account activation failed! Token Expired! .</div>');
          redirect('login');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Account activation failed! wrong token .</div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Account activation failed! wrong email.</div>');
      redirect('login');
    }
  }


  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('akses_level');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    you have been logged out!</div>');
    redirect('login');
  }

  public function blocked()
  {
    $this->load->view('login/blocked');
  }

  public function forgotpassword()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Forgot Password';
      $this->load->view('templates/login_header', $data);
      $this->load->view('login/forgot-password');
      $this->load->view('templates/login_footer');
    } else {
      $email = $this->input->post('email');
      //ambil data email dan activited
      //jadi pengeckkan nya langsung 2
      $user = $this->db->get_where('user', ['email' => $email, 'user_aktif' => 1])->row_array();

      if ($user) {
        $token = base64_encode(random_bytes(32));
        $usertoken = [
          'email' => $email,
          'token' => $token,
          'tanggal_registrasi' => time()
        ];

        $this->db->insert('usertoken', $usertoken);
        $this->_sendEmail($token, 'forgot');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        please check your email to reset your password</div>');
        redirect('login/forgotpassword');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Email is not registred or activated !</div>');
        redirect('login/forgotpassword');
      }
    }
  }

  public function resetpassword()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    if ($user) {
      $usertoken = $this->db->get_where('usertoken', ['token' => $token])->row_array();
      if ($usertoken) {
        //bikin sebua session yg ada padasaat user sedang mereset password saja
        //kalo resetnya sudah selesai hapus lagi sessionnya yang isinya email
        $this->session->set_userdata('reset_email', $email);
        // lalu alihkan pada halaman reset password halaman tersebut tidak bisa diakses kecuali menekan link yg telah dikirmkan ke email sehingga tidak bisa langsung diakses atau session nya ga ada maka tidak bisa diakses
        $this->changePassword();
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Reset Password failed! Wrong Token!</div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Reset Password failed! Wrong Email!</div>');
      redirect('login');
    }
  }
  public function changePassword()
  {
    if (!$this->session->userdata('reset_email')) {
      redirect('login');
    }

    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[3]|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Change Password';
      $this->load->view('templates/login_header', $data);
      $this->load->view('login/change-password');
      $this->load->view('templates/login_footer');
    } else {
      $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
      $email = $this->session->userdata('reset_email');
      $this->db->set('password', $password);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->unset_userdata('reset_email');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      password has been changed!</div>');
      redirect('login');
    }
  }
}

/* End of file Login.php */

?>
