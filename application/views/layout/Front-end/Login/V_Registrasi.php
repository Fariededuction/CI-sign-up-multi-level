<DOCTYPE html>

  <html>
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?= base_url('assets/Template/view_Front-end/')?>images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>fonts/themify/themify-icons.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>fonts/elegant-font/html-css/style.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>vendor/lightbox2/css/lightbox.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>css/main.css">
  <link href="<?= base_url('assets/Template/view_Front-end/')?>https://fonts.googleapis.com/css?family=Bree+Serif|Cabin:400,400i,500,500i,600,600i,700,700i&display=swap"
  rel="stylesheet">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Template/view_Front-end/')?>css/main.css">
  <script src="https://kit.fontawesome.com/ff42f033da.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


  <head>
    <title>Login - DAFTAR REKLAME ONLINE</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
  </head>

  <body class="">

    <div class="container-fluid form-sign-in" style="padding-bottom: 1000px;">

      <div class="row">
        <div class="col-md-12  ">
          <div class="row justify-content-center">
            <div class="col-lg-3 header-sign-in ">
              <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                  <img class="header-logo" height="80" width="120" src="<?= base_url('assets/Template/view_Front-end/')?>images/icons/Kota Surabaya.png"
                  style="padding-bottom: 15px;" alt="">
                </div>
              </div>
              <div class="row">
                <div>
                  <p class="title-form">
                    REGISTRASI PERHATIKAN DENGAN BENAR</a>

                  </p>
                </div>

                <form action="<?= base_url('login/registrasi');?>" method="post" >
                  <?= form_open_multipart('login/registrasi'); ?>
                  <div class="form-group  mb-3 row">

                    <div class="form-group content-sign-in">
                      <label class="title-input-type-primary-tiketsaya" for="nama_depan">Nama Depan</label>
                      <input type="text" name="nama_depan" class="form-control input-type-primary-tikersaya" id="nama_depan"
                      aria-describedby="emailHelp" placeholder="Masukan Nama Depan">
                      <?= form_error('nama_depan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group content-sign-in">
                      <label class="title-input-type-primary-tiketsaya" for="nama_belakang">Nama Belakang</label>
                      <input type="text" name="nama_belakang" class="form-control input-type-primary-tikersaya" id="nama_belakang"
                      aria-describedby="emailHelp" placeholder="Masukan Nama Belakang">
                      <?= form_error('nama_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group content-sign-in">
                      <label class="title-input-type-primary-tiketsaya" for="email">Email</label>
                      <input type="email" name="email" class="form-control input-type-primary-tikersaya" id="email"
                      aria-describedby="emailHelp" placeholder="Enter Email">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group content-sign-in">
                  <label class="title-input-type-primary-tiketsaya" for="placeholder">NPWPD</label>
                  <input type="text" name="placeholder" class="form-control placeholder" id="npwpd" placeholder="">
                      <?= form_error('placeholder', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>


                    <div class="form-group">
                      <label class="title-input-type-primary-tiketsaya" for="password1">Password</label>
                      <input type="password" name="password1" class="form-control form-control input-type-primary-tikersaya"
                      id="password1" placeholder="Masukan Password">
                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                      <label class="title-input-type-primary-tiketsaya" for="password2"> Ulangi
                        Password</label>
                        <input type="password" name="password2" class="form-control form-control input-type-primary-tikersaya"
                        id="password2" placeholder="Ulangi Password">
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div>
                        <a></a>
                  <!--    <div class="form-group">
                        <label class="col-sm-6 control-label">Keterangan</label>
                        <div class="col-sm-6">
                          <input type='text' name='cash' id='UangCash' class='form-control' placeholder="Keterangan">
                        </div>
                      </div> -->

                      <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Registrasi</button>
                  <!--    <button type='button' class='btn btn-warning btn-block' id='CetakStruk'>
                        <i class='fa fa-print'></i> Cetak (F9)
                      </button> -->
                    </form>
                    <div  style="text-align: center;">
                      <small id="emailHelp" class="form-text text-muted"> <a href="<?= base_url('HalUtama/')?>"> Kembali ke halaman beranda</a></small>
                      <small  style="text-align: center;" id="emailHelp" class="form-text text-muted"> <a href="<?= base_url('login')?>"> Kembali ke halaman login</a></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/select2/select2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script type="text/javascript">
        $(".selection-1").select2({
          minimumResultsForSearch: 20,
          dropdownParent: $('#dropDownSelect1')
        });

        $(document).on('click', 'button#CetakStruk', function(){
          CetakStruk();
        });

        //    function check_char(evt) {
        //    	var charCode = ( evt.which ) ? evt.which : event.keyCode;
        //    	return ( charCode >= 48 && charCode <= 57 || charCode == 8 );
        //    }
        $(document).on('keydown', 'body', function(e){
          var charCode = ( e.which ) ? e.which : event.keyCode;

          if(charCode == 119) //F8
          {
            $('#UangCash').focus();
            return false;
          }
          if(charCode == 120) //F9
          {
            CetakStruk();
            return false;
          }
        });


        function CetakStruk()
        {
          //    if($('#nama_depan').val() !== '')
          //    {
          //   			var
          //		FormData += "&id_daftar="+encodeURI($('#id_daftar').val());
          //      FormData += "&nama_depan="+$('#nama_depan').val();
          FormData += "&cash="+$('#UangCash').val();
          //FormData += "&nama_belakang="+$('#nama_belakang').val();
          window.open("<?php echo site_url('login/transaksicetak/?'); ?>" + FormData,'_blank');

          //  	}
        }
        </script>

        <script type="text/javascript">
       $(document).ready(function(){
     $('.date').mask('00/00/0000');
     $('.time').mask('00:00:00');
     $('.date_time').mask('00/00/0000 00:00:00');
     $('.placeholder').mask("0.000.0000.0000.0000", {placeholder: "_.___.____.____.____"});
    });
    </script>


        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>js/slick-custom.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/lightbox2/js/lightbox.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/')?>vendor/sweetalert/sweetalert.min.js"></script>


        <!--===============================================================================================-->
        <script src="<?= base_url('assets/Template/view_Front-end/')?>js/main.js"></script>


        <script>
        // popovers initialization - on hover
        // $('[data-toggle="popover-hover"]').popover({
        //   html: true,
        //   trigger: 'hover',
        //   placement: 'top',
        //   content: function () {
        //     return '<img src="<?= base_url('assets/Template/view_Front-end/')?>' + $(this).data('img') + '" />';
        //   }
        // });
        </script>

      </body>

      </html>
