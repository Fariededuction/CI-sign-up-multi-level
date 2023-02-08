
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank"></a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank"></a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank"></a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
              
                </script></a>

              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Chart JS -->
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->

  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/core/sweetalert.min.js"></script>

  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/Template/view_Back-end/');?>assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script>
  $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass('selected').html(fileName);
      });


  </script>


  <script>
    function sum() {
    var txtFirstNumberValue = document.getElementById('panjang').value;
    var txtSecondNumberValue = document.getElementById('lebar').value;
    var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
       document.getElementById('hasil_kali').value = result;
    }
  }

  function opsi(value){
  var st = $("#tutup").val();
  if( st == "BALIHO"){
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("panjang").disabled = false;
  document.getElementById("lebar").disabled = false;
  document.getElementById("jumlah_reklame").disabled = false;
  } else if( st == "KAIN / BENNER") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("panjang").disabled = false;
  document.getElementById("lebar").disabled = false;
  document.getElementById("jumlah_reklame").disabled = false;
  }
  else if( st == "SPANDUK") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("panjang").disabled = false;
  document.getElementById("lebar").disabled = false;
  document.getElementById("jumlah_reklame").disabled = false;
  }
  else if( st == "UMBUL - UMBUL") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("panjang").disabled = false;
  document.getElementById("lebar").disabled = false;
  document.getElementById("jumlah_reklame").disabled = false;
  }
  else if( st == "SELEBARAN / BROSUR / LEAFLET") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = false;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "UNDANGAN") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = false;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "STIKER / MELEKAT") {
  document.getElementById("ukuran_sticker").disabled = false;
  document.getElementById("jumlah_lembar_stiker").disabled = false;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "FILM / SLIDE DENGAN SUARA") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = false;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "FILM / SLIDE TANPA SUARA") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = false;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "UDARA") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = false;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = true;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  else if( st == "SUARA") {
  document.getElementById("ukuran_sticker").disabled = true;
  document.getElementById("jumlah_lembar_stiker").disabled = true;
  document.getElementById("lama_penyelenggaran_even").disabled = true;
  document.getElementById("lama_penyelenggaran_detik").disabled = true;
  document.getElementById("lama_penyelenggaran_menit").disabled = false;
  document.getElementById("jumlah_reklame").disabled = true;
  document.getElementById("panjang").disabled = true;
  document.getElementById("lebar").disabled = true;
  }
  }

  function submitForm(form) {
      swal({
          title: "Apakah Anda Yakin?",
          text: "atau cek lagi data anda, sudah benar atau belum",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then(function (isOkay) {
          if (isOkay) {
              form.submit();
          }
      });
      return false;
  }

  $(function() {
      $("#tglskpd_filter").datepicker(
        {
          dateFormat : 'dd-M-y'
        }
      );
  });

  </script>
  <script>
  $(function() {
    $("#tglskpd_filter").datepicker(
      {
        dateFormat : 'dd-M-y'
      }
    );
  });
  </script>
</body>

</html>
