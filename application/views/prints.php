<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
</head>
<body>
<?php foreach ($template as $keys) {
  # code...
} ?>
<?php foreach ($gaji as $gajis) {
  # code...
} ?>
<?php foreach ($pegawai as $pegawais) {
  # code...
} ?>

<div id="container">

<table align="center" width="550" height="166" border="0" >
            <tr>
              <td width="230">1. Nama </td>
              <td width="310">&emsp;&emsp;: <?php echo $pegawais['Nama']; ?></td>
            </tr>
            <tr>
              <td>2. NIP</td>
              <td>&emsp;&emsp;: <?php echo $pegawais['NIP']; ?></td>
            </tr>
            <tr>
              <td>3. Tanggal Lahir</td>
              <td> &emsp;&emsp;: <?php echo $pegawais['tanggal_lahir']; ?></td>
            </tr>
            <tr>
              <td>4. Pangkat</td>
              <td> &emsp;&emsp;: <?php echo $pegawais['pangkat']?></td>
            </tr>
            <tr>
              <td>5. Jabatan</td>
              <td>&emsp;&emsp;: <?php echo $pegawais['jabatan']; ?></td>
            </tr>
            <tr>
              <td>6. instansi</td>
              <td>&emsp;&emsp;: Balaikota Semarang</td>
            </tr>
            <tr>
              <td>7. Gaji Pokok </td>
              <td>&emsp;&emsp;: Rp.<?php echo $gajis['gaji_pokok_lama']; ?> </td>
            </tr>
</table>

</div>

</body>
</html>