

<div class="col-md-12">
            <div class="card card-plain">
              <?= $this->session->flashdata('notif'); ?>
              <div class="card-header">
          <!--      <h4 class="card-title"> Kelola Data Gunung</h4><a href="<?= base_url('Gunung/tambahDataGunung');?>" class="btn btn-success mb-3">Tambah Gunung</a> -->
              </div>
              <div>
              </div>
              <div class="container">
                <h1>Data <strong>Anda Untuk Di Cetak</strong></h1>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class=" text-primary">
                    <th>
                        no
                    </th>
                    <th>
                      NO PELAYANAN ONLINE
                    </th>
                    <th>
                      NAMA DEPAN
                    </th>
                    <th>
                      NAMA BELAKANG
                    </th>
                    <th>
                      NPWPD
                    </th>
                      <th>
                      EMAIL
                      </th>
                      <th>
                        IMAGE
                      </th>
                      <th>
                        ISI_REKLAME
                      </th>
                      <th>
                        TIME TRANSAKSI
                      </th>
                      <th class="text-right">
                        action
                      </th>
                    </thead>
                    <tbody>
                    <?php  $no= 1;


                     foreach ($tabel_wp as $g) {  ?>
                        <tr>
                            <td ><?= $no++ ?></td>
                            <td><?= $g->NO_PELAYANAN_ONLINE ?></td>
                            <td><?= $g->NAMA_DEPAN ?></td>
                            <td><?= $g->NAMA_BELAKANG ?></td>
                            <td><?= $g->NPWPD ?></td>
                            <td><?= $g->EMAIL ?></td>
                            <td><?= $g->IMAGE_REKLAME ?></td>
                            <td><?= $g->ISI_REKLAME ?></td>
                            <td><?= $g->TIMETRANS ?></td>
                           <td class="text-right"><span>

                                <a  href="<?= base_url('User/cetak/'). $g->NO_PELAYANAN_ONLINE ;?>"
                                  target="_blank"
                                  data-toggle="tooltip" data-placement="bottom" title="Cetak Berkas"
                                  data-original-title="Tooltip on bottom" class="btn btn-warning">
                                    <i class="fa fa-edit"></i> Cetak</a>
                                </span>
                            </td>
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


<!--    <?php
        foreach($joinDataGunung1 as $gh):
            $id_gunung = $gh->id_gunung;
            $nama_gunung = $gh->nama_gunung;
            $id_jalur = $gh->id_jalur;
            $id_gambar = $gh->id_gambar;
            $kode_gunung = $gh->kode_gunung;
      ?>
    <!-- ============ MODAL HAPUS BARANG ===============
        <div class="modal fade" id="modal_hapus<?= $id_gunung?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="myModalLabel">Hapus Gunung</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'gunung/hapusDataGunung'?>">
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus Data Gunung<b><?= $nama_gunung; ?> Dengan kode Gunung<?= $kode_gunung; ?></b>?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_gunung" value="<?= $id_gunung;?>">
                    <input type="hidden" name="id_jalur" value="<?= $id_jalur;?>">
                    <input type="hidden" name="id_gambar" value="<?= $id_gambar;?>">
                    <input type="hidden" name="kode_gunung" value="<?= $kode_gunung;?>">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    END MODAL HAPUS BARANG-->
