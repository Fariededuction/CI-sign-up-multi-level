<div class="col-md-8">
  <div class="card card-user">
    <div class="card-header">
      <h5 class="card-title">Masukkan Data Insidentil</h5>
    </div>
    <div class="card-body">
      <?php echo form_open_multipart('User/ubahProfil')  ?>
  <!--    <form action="<?= form_open_multipart('User/ubahProfil')?>"  method="post" onsubmit="return submitForm(this);" > -->
        <div class="row">
          <div class="col-md-5 pr-1">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="" readonly="readonly" value="<?= $akun['EMAIL']?>">
            </div>
            </div>

            <div class="col-md-5 pr-1">
              <div class="form-group">
                <label>Npwpd</label>
                <input type="text" name="npwpd" class="form-control" placeholder="" readonly="readonly" value="<?= $akun['NPWPD']?>">

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
    <!--      <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>No. Pelayanan</label>
              <input type="text" class="form-control" name="token" readonly="readonly" placeholder="" >
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="" value="<?= $akun['ALAMAT']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>No Telepon</label>
              <input type="number" class="form-control" name="no_telepon" placeholder="" value="<?= $akun['NO_TELEPON']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Nama Perusahaan</label>
              <input type="text" class="form-control" name="nama_perusahaan" placeholder="" value="<?= $user['NAMA_PERUSAHAAN']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" class="form-control" name="jabatan" placeholder="" value="<?= $user['JABATAN']?>">
            </div>
          </div>
          <div class="col-md-4 pr-0.5">
           <div class="form-group">
             <label>Jenis Reklame</label>
         <select type="text" class="form-control" id='tutup' placeholder="Pilih Jenis Reklame" onChange="opsi(this)" name="jenis_reklame">
           <option></option>
           <option value="BALIHO">Baliho</option>
           <option value="KAIN / BENNER">Kain / Benner</option>
           <option value="SPANDUK">Spanduk</option>
           <option value="UMBUL - UMBUL">Umbul - Umbul</option>
           <option value="SELEBARAN / BROSUR / LEAFLET">Selebaran / Brosur / Leaflet</option>
           <option value="UNDANGAN">Undangan</option>
           <option value="STIKER / MELEKAT">Stiker / Melekat</option>
           <option value="FILM / SLIDE DENGAN SUARA">Film / Slide Dengan Suara </option>
           <option value="FILM / SLIDE TANPA SUARA">Film / Slide Tanpa Suara</option>
           <option value="UDARA">Udara</option>
           <option value="SUARA">Suara</option>
         </select>
           <?= form_error('jenis_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
       </div>
       </div>
       <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Alamat di Surabaya</label>
            <input type="text" class="form-control" name="alamat_di__surabaya" placeholder="" id="alamat_di__surabaya" value="<?= $user['ALAMAT_DI_SURABAYA']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Nama Pemilik klien</label>
            <input type="text" class="form-control" name="nama_pemilik_client" placeholder=""value="<?= $user['NAMA_PEMILIK_CLIENT']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Alamat klien</label>
            <input type="text" class="form-control" name="alamat_klien" placeholder="" value="<?= $user['ALAMAT_CLIENT']?>">
          </div>
        </div>
        <div class="col-md-4 pr-0.5">
          <div class="form-group">
            <label>Nama perusahaan klien</label>
            <input type="text" class="form-control" name="nama_perusahaan_client" placeholder=""value="<?= $user['NAMA_PERUSAHAAN_CLIENT']?>">
          </div>
        </div>
      <div class="col-md-4 pr-0.5">
        <div class="form-group">
          <label>Jenis Produk</label>
      <select type="text" class="form-control"  name="jenis_produk"value="<?= $user['JENIS_PRODUK']?>">
        <option>PILIH JENIS PRODUK</option>
        <option value="ROKOK">Rokok</option>
        <option value="NON ROKOK">Non Rokok</option>
      </select>
    </div>
    </div>
    <div class="col-md-4 pr-0.5">
      <div class="form-group">
        <label>Letak Reklame</label>
    <select type="text" class="form-control"  name="letak_Reklame"value="<?= $user['LETAK_REKLAME']?>">
      <option>PILIH LETAK REKLAME</option>
      <option value="DALAM RUANGAN">Dalam Ruangan</option>
      <option value="Luar Ruangan">Luar Ruangan</option>
    </select>
  </div>
  </div>

            <div class="col-md-4 pr-0.5">
              <div class="form-group">
                <label>Kecamatan Obyek</label>
            <select type="text" id='kecamatan' class="form-control"  name="kecamatan">
              <option>PILIH KECAMATAN</option>
              <?php foreach ($get_kec as $row) { ?>
                   <option value="<?php echo $row['T_KEC_NM']; ?>"><?PHP echo $row['T_KEC_NM'];?></option>
             <?php } ?>
            </select>
             <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          </div>

          <div class="col-md-4 pr-0.5">
            <div class="form-group">
              <label>Kelurahan Obyek</label>
          <select type="text" id='kelurahan' class="form-control"  name="kelurahan">
            <option>PILIH KELURAHAN</option>
            <?php foreach ($get_kel as $row) { ?>
                 <option value="<?php echo $row['T_KEL_NM']; ?>"><?PHP echo $row['T_KEL_NM'];?></option>
           <?php } ?>
          </select>
           <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>

  <div class="col-md-4 pr-0.5">
    <div class="form-group">
      <label>Status Tanah</label>
  <select type="text" class="form-control"  name="status_tanah"value="<?= $user['STATUS_TANAH']?>">
    <option>PILIH STATUS TANAH</option>
    <option value="TANAH PEMERINTAH DAERAH KOTA SURABAYA">Tanah Pemerintah Kota Surabaya</option>
    <option value="TANAH SWASTA">Tanah Swasta</option>
    <option value="DI LUAR TANAH PEMERINTAH KOTA SURABAYA">Di luar tanah Pemerintah Kota Surabaya</option>
  </select>
  </div>
  </div>
  <div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Panjang(m)</label>
    <input type="number" class="form-control" name="panjang" id="panjang" onkeyup="sum();"  placeholder="" >
  </div>
  </div>
  <div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Lebar(m)</label>
    <input type="number" class="form-control" name="lebar" id="lebar" onkeyup="sum();" placeholder="" >
  </div>
  </div>
  <div class="col-md-2 pr-0.5">
  <div class="form-group">
    <label>Luas(m2)</label>
    <input type="number" class="form-control" name="luas" id="hasil_kali" placeholder=""  readonly="readonly" >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Jumlah reklame (buah)</label>
    <input type="number" class="form-control" name="jumlah_reklame" id="jumlah_reklame" placeholder="" >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama Penyelenggaran (hari)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_hari" id="lama_penyelenggaran_hari" placeholder="">
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Mulai Tanggal</label>
    <input type="date" class="form-control" name="mulai_tanggal_pemasangan" placeholder="" >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Ukuran (cm2) untuk stiker</label>
    <input type="number" class="form-control" name="ukuran_sticker" id="ukuran_sticker" placeholder="" >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Jumlah lembar untuk stiker dan selebaran</label>
    <input type="number" class="form-control" name="jumlah_lembar_stiker" id="jumlah_lembar_stiker" placeholder=""  >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran even (untuk udara)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_even" id='lama_penyelenggaran_even' placeholder="">
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran detik (untuk film)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_detik" id='lama_penyelenggaran_detik' placeholder="" >
  </div>
  </div>
  <div class="col-md-3 pr-0.5">
  <div class="form-group">
    <label>Lama penyelenggaran menit (untuk suara)</label>
    <input type="number" class="form-control" name="lama_penyelenggaran_menit" id='lama_penyelenggaran_menit' placeholder="" >
  </div>
  </div>
  </div>
<<div class="col-md-8 pr-0.5">
  <div class="form-group">
    <label>Teks - isi reklame</label>
    <input type="text" class="form-control" name="isi_reklame" placeholder="" >
     <?= form_error('isi_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
</div>
<div class="col-md-8 pr-0.5">
  <div class="form-group">
    <label>Alamat Penempatan objek Reklame</label>
    <input type="text" class="form-control" name="alamat_objek_reklame" placeholder="" >
     <?= form_error('alamat_objek_reklame', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
<div>

        </div>

        </div>
      </div>
  </div>
  <div class="row">
    <div class="update ml-auto mr-auto">
    <button type="submit"   class="btn btn-primary btn-round">Input Pendaftaran</button>
    </div>
    <?php echo form_close() ?>
  </div>
</form>
</div>
</div>
</div>
