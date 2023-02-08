  <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="image">
                <img src="<?= base_url('assets/Template/view_Back-end/')?>/assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?= base_url('assets/images/foto_profil/')?><?= $akun['FOTO_PROFIL'];?> " alt="...">
                    <h5 class="title"><?= $akun['NAMA_DEPAN']; ?> <?= $akun['NAMA_BELAKANG']; ?></h5>
                  </a>
                  <p class="description">
                  Email: &nbsp;<?= $akun['EMAIL']; ?>
                  </p>
                </div>
                <p class="description text-center">
                  Alamat: &nbsp;<?= $akun['ALAMAT']; ?>
                </p>
                 <?= $this->session->flashdata('message'); ?>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row ">
                    <div class="col-12 text-center">
                    <a href="<?= base_url('User/ubahProfil')?>">
                      <button class="btn btn-primary"> Masukkan permohonan</button>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="button-container">
                  <div class="row ">
                    <div class="col-12 text-center">
                    <a href="<?= base_url('User/tabel')?>">
                      <button class="btn btn-red"> Tabel Wajib Pajak</button>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="button-container">
                  <div class="row ">
                    <div class="col-12 text-center">
                      <a href="<?= base_url('User/lihatProfil')?>">
                      <button class="btn btn-warning"> Lihat data yang sudah di entry </button>
                      </a>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
