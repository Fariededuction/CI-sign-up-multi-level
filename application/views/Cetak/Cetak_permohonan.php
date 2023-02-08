<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content = "IE=edge">
  <title></title>
  <link rel ="stylesheet" href ="">
  <style type="text/css">
  body{
    margin: 20px 150px
  }
  table {
    border-collapse: collapse;
  }
  </style>
</head>
<body onload="window.print()">
  <img class="header-logo"  align="center" src="http://10.21.34.224/Pendaftaran_reklame_online_surabaya1/assets/Template/view_Front-end/images/icons/Kota Surabaya.png"
    >
  <h3 align="center">BADAN PENDAPATAN DAERAH</h1>
    <h3 align="center">KOTA SURABAYA</h1>
  <table border="1" width="100%">
    <tr>
      <td align="center">PERMOHONAN ONLINE</td>
    </tr>
  </table>
  <br>
  <br>
  <table>
    <tr>
      <td>No pelayanan online</td>
      <td>:</td>
      <td><?php echo $data->NO_PELAYANAN_ONLINE ?></td>
    </tr>
    <tr>
      <td>Nama Depan</td>
      <td>:</td>
      <td><?php echo $data->NAMA_DEPAN ?></td>
    </tr>
    <tr>
      <td>Nama Belakang</td>
      <td>:</td>
      <td><?php echo $data->NAMA_BELAKANG ?></td>
    </tr>
    <tr>
      <td>NPWPD</td>
      <td>:</td>
      <td><?php echo $data->NPWPD ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?php echo $data->EMAIL ?></td>
    </tr>
    <tr>
      <td>Image</td>
      <td>:</td>
      <td><?php echo $data->IMAGE_REKLAME ?></td>
    </tr>
    <tr>
      <td>Isi Reklame</td>
      <td>:</td>
      <td><?php echo $data->ISI_REKLAME ?></td>
    </tr>
    <tr>
      <td>Waktu Permohonan</td>
      <td>:</td>
      <td><?php echo $data->TIMETRANS ?></td>
    </tr>
