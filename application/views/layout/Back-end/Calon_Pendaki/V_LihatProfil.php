
<?php
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>


<div class="col-md-8">
  <div class="card card-user">
    <div class="card-header">
      <h5 class="card-title">DATA BERKAS ANDA</h5>
      <blink class="text-danger pl 10" >CETAK PENGAJUAN ANDA DI BAWAH</blink>
    </div>
    <div class="card-body">
      <form action="<?= base_url('User/ubahProfil')?>" method="post" onsubmit="return submitForm(this);">
        <div class="row">
          <div class="col-md-5 pr-1">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="" readonly="readonly" value="<?= $akun['EMAIL']?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label>Npwpd</label>
              <input type="text" name="placeholder" class="form-control" placeholder="" readonly="readonly" value="<?= $akun['NPWPD']?>">
                <?= form_error('placeholder', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            </div>
          <input type="hidden" name="id" value="<?=$akun['NAMA_DEPAN']?>">
        </div>
        <div class="row">
          <div class="col-md-4 pl-0.5">
            <div class="form-group">
              <label>Nama DEpan</label>
              <input type="text" class="form-control" name="nama_depan" readonly="readonly"  placeholder="" value="<?= $akun['NAMA_DEPAN']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Nama Belakang</label>
              <input type="text" class="form-control" name="nama_belakang" readonly="readonly" placeholder="" value="<?= $akun['NAMA_BELAKANG']?>">
            </div>
          </div>
  <!--        <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>No. Pelayanan</label>
              <input type="text" class="form-control" name="token" readonly="readonly" placeholder="" value="<?= $user['NO_PELAYANAN_ONLINE']?>">
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" readonly="readonly" placeholder="" value="<?= $user['ALAMAT']?>">
              <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>No Telepon</label>
              <input type="number" class="form-control" name="no_telepon" readonly="readonly" placeholder="" value="<?= $user['NO_TELEPON']?>">
              <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Nama Perusahaan</label>
              <input type="text" class="form-control" name="nama_perusahaan" readonly="readonly" placeholder="" value="<?= $user['NAMA_PERUSAHAAN']?>">
              <?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" class="form-control" name="jabatan" placeholder="" readonly="readonly" value="<?= $user['JABATAN']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
           <div class="form-group">
             <label>Jenis Reklame</label>
         <input type="text" class="form-control" id='tutup' placeholder="Pilih Jenis Reklame" readonly="readonly" name="jenis_reklame" value="<?= $user['JENIS_REKLAME']?>">
           <?= form_error('jenis_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
       </div>
       </div>
       <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Alamat di Surabaya</label>
            <input type="text" class="form-control" name="alamat_di__surabaya" readonly="readonly" placeholder="" id="alamat_di__surabaya" value="<?= $user['ALAMAT_DI_SURABAYA']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Nama Pemilik klien</label>
            <input type="text" class="form-control" name="nama_pemilik_client" readonly="readonly" placeholder=""value="<?= $user['NAMA_PEMILIK_CLIENT']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Alamat klien</label>
            <input type="text" class="form-control" name="alamat_klien" readonly="readonly" placeholder="" value="<?= $user['ALAMAT_CLIENT']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Nama perusahaan klien</label>
            <input type="text" class="form-control" name="nama_perusahaan_client" readonly="readonly" placeholder=""value="<?= $user['NAMA_PERUSAHAAN_CLIENT']?>">
          </div>
        </div>
      <div class="col-md-4 pr-0.5">
        <div class="form-group">
          <label>Jenis Produk</label>
      <input type="text" class="form-control" readonly="readonly" name="jenis_produk"value="<?= $user['JENIS_PRODUK']?>">
    </div>
    </div>
    <div class="col-md-4 pr-0.5">
      <div class="form-group">
        <label>Letak Reklame</label>
    <input type="text" class="form-control" readonly="readonly" name="letak_Reklame"value="<?= $user['LETAK_REKLAME']?>">
  </div>
  </div>
  <div class="col-md-4 pr-0.5">
    <div class="form-group">
      <label>Status Tanah</label>
  <input type="text" class="form-control" readonly="readonly" name="status_tanah"value="<?= $user['STATUS_TANAH']?>">
</div>
</div>
<div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Panjang(m)</label>
    <input type="number" class="form-control" name="panjang" readonly="readonly" id="panjang" onkeyup="sum();"  placeholder=""value="<?= $user['PANJANG']?>" >
  </div>
</div>
<div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Lebar(m)</label>
    <input type="number" class="form-control" name="lebar" id="lebar" readonly="readonly" onkeyup="sum();" placeholder="" value="<?= $user['LEBAR']?>">
  </div>
</div>
<div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Luas(m2)</label>
    <input type="number" class="form-control" name="luas" id="hasil_kali" readonly="readonly" placeholder="" value="<?= $user['LUAS']?>" readonly="readonly" >
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Jumlah reklame (buah)</label>
    <input type="number" class="form-control" name="jumlah_reklame" id="jumlah_reklame" readonly="readonly" placeholder=""value="<?= $user['JUMLAH_REKLAME']?>" >
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama Penyelenggaran (hari)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_hari" readonly="readonly" id="lama_penyelenggaran_hari" placeholder=""value="<?= $user['LAMA_PENYELENGGARAN_HARI']?>">
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Mulai Tanggal</label>
    <input type="date" class="form-control" name="mulai_tanggal_pemasangan" readonly="readonly" placeholder="" value="<?= $user['MULAI_TANGGAL_PEMASANGAN']?>">
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Ukuran (cm2) untuk stiker</label>
    <input type="number" class="form-control" name="ukuran_sticker" readonly="readonly" id="ukuran_sticker" placeholder="" value="<?= $user['UKURAN_STICKER']?>">
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Jumlah lembar untuk stiker dan selebaran</label>
    <input type="number" class="form-control" name="jumlah_lembar_stiker" readonly="readonly" id="jumlah_lembar_stiker" placeholder="" value="<?= $user['JUMLAH_LEMBAR_STCKER']?>" >
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran even (untuk udara)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_even" readonly="readonly" id='lama_penyelenggaran_even' placeholder=""value="<?= $user['LAMA_PENYELENGGARAN_EVEN']?>" >
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran detik (untuk film)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_detik" readonly="readonly" id='lama_penyelenggaran_detik' placeholder="" value="<?= $user['LAMA_PENYELENGGARAN_DETIK']?>">
  </div>
</div>
<div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran menit (untuk suara)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_menit" readonly="readonly" id='lama_penyelenggaran_menit' placeholder="" value="<?= $user['LAMA_PENYELENGGARAN_MENIT']?>">
  </div>
</div>
<div class="col-md-8 pr-0.5">
  <div class="form-group">
    <label>Teks - isi reklame</label>
    <input type="text" class="form-control" name="isi_reklame" readonly="readonly" placeholder="" value="<?= $user['ISI_REKLAME']?>">
     <?= form_error('isi_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
</div>
<div class="col-md-8 pr-0.5">
  <div class="form-group">
    <label>Alamat Penempatan objek Reklame</label>
    <input type="text" class="form-control" name="alamat_objek_reklame" readonly="readonly" placeholder="" value="<?= $user['ALAMAT_OBJEK_REKLAME']?>">
     <?= form_error('alamat_objek_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class=" text-primary">
      <th>
          no
      </th>

        <th>
          IMAGE
        </th>

      </thead>
      <tbody>
      <?php  $no= 1;


       foreach ($tabel_wp as $g) {  ?>
          <tr>
              <td ><?= $no++ ?></td>
              <td><?= $g->IMAGE_REKLAME ?></td>
          </tr>

      <?php  } ?>
      </tbody>
    </table>
    <div class="row">
<div class="col">
<!--Tampilkan pagination-->
<?php echo $pagination; ?>
</div>
  </div>
</div>
</div>
</div>
      </div>

  </li>

  </ul>
            </div>
        </div>

      </form>
    </div>
  </div>
</div>
