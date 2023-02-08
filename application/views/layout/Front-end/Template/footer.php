
  <!-- Footer -->
  <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45 mt-5">
    <div class="flex-w p-b-90">
      <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
        <h4 class="s-text12 p-b-30">

        </h4>

        <div>

          <div class="flex-m p-t-30">

          </div>
        </div>
      </div>

      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">


        <ul>
          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>
        </ul>
      </div>

      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">


        <ul>
          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>

          <li class="p-b-9">

          </li>
        </ul>
      </div>

      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">


        <ul>
          <li class="p-b-9">

          </li>

        </ul>
      </div>

      <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">


        <form>
          <div class="effect1 w-size9">

          </div>

          <div class="w-size2 p-t-20">
            <!-- Button -->

          </div>

        </form>
      </div>
    </div>



    <div class="t-center s-text8 p-t-20">
      Copyright © 2022 All rights reserved. | This aplication <i class="" aria-hidden="true"></i> by <a
        href="<?= base_url('assets/Template/view_Front-end/')?>" target="_blank">Bapenda Kota Surabaya</a>
    </div>
    </div>
  </footer>



  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
  </div>

  <!-- Container Selection1 -->
  <div id="dropDownSelect1"></div>



  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/select2/select2.min.js"></script>
  <script type="text/javascript">
    $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>js/slick-custom.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/lightbox2/js/lightbox.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="<?= base_url('assets/Template/view_Front-end/');?>vendor/sweetalert/sweetalert.min.js"></script>

  <!--===============================================================================================-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
  <script src="<?= base_url('assets/Template/view_Front-end/');?>js/map-custom.js"></script>
  <!--===============================================================================================-->
  <!--===============================================================================================-->
  <script src="<?= base_url('assets/')?>vendor/xzoom/dist/xzoom.min.js"></script>
  <!-- x-zoom -->
  <script>
    $(document).ready(function () {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url('assets/Template/view_Front-end/');?>js/main.js"></script>

  <script>
    // popovers initialization - on hover
    // $('[data-toggle="popover-hover"]').popover({
    //   html: true,
    //   trigger: 'hover',
    //   placement: 'top',
    //   content: function () {
    //     return '<img src="<?= base_url('assets/Template/view_Front-end/');?>' + $(this).data('img') + '" />';
    //   }
    // });
  </script>

</body>

</html>
