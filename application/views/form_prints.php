<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<!-- data table -->
<?php foreach ($template as $keys) {
  # code...
} ?>
<?php foreach ($gaji as $gajis) {
  # code...
} ?>
<?php foreach ($pegawai as $pegawais) {
  # code...
} ?>



<table border="1" align="center">
<table align="center" width="805" height="826" border="1">
  <tr >
    <td width="795" height="820"><table width="730" height="907" border="0" align="center" >
      <tr>
        <td width="207">
        <h3><img src="<?php echo base_url()."assets/img/"; ?>surat.jpg" width="92" height="113" /></h3></td>
        <td height="89" colspan="2" ><h3 align="center">PEMERINTAH KOTA SEMARANG</h3><center>
              <h2><?php echo $keys['judul']; ?></h2>
          Jl.Pemuda No.148 Telp.3586680 Fax. 3584064 Semarang - 50132</center></p></td>
      </tr>
      <tr>
        <td height="4" colspan="3">
        <hr />
        </td>
      </tr>
      <tr>
        <td height="149" colspan="2">
          <p>&nbsp;</p>
          <table width="212" border="0">
            <tr>
              <td width="206">Nomor &nbsp;&nbsp;&nbsp;: <?php if($gajis['new_nomer_sk'] != NULL){
                                                                echo $gajis['new_nomer_sk'];
              }else{
                echo $gajis['nomer_sk'];
              } 
                                                         ?></td>
            </tr>
            <tr>
              <td>Lampiran&nbsp;&nbsp;:</td>
            </tr>
            <tr>
              <td>Perihal&nbsp;&nbsp;  : </td>
            </tr>
          </table>
          <p>&nbsp;</p></td>
        <td width="370"><table width="364" height="120" border="0">
          <tr>
            <td height="32" colspan="2">Semarang , <?php if($gajis['new_tanggal_sk'] != NULL){
                                                                echo $gajis['new_tanggal_sk'];
              }else{
                echo $gajis['tanggal_sk'];
              } 
                                                         ?></td>
            </tr>
          <tr>
            <td width="47"><p>yth , </p>
              <p>&nbsp;</p></td>
            <td width="301"><p><?php echo $keys['kepada'] ?> </p>
              </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="584" colspan="3">
          <p>Dengan ini  diberitahukan bahwa berhubung telah dipenuhinya masa kerja dan syarat-syarat  lainnya kepada : <br />
          </p>
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
          <p align="center">Atas dasar SKP terakhir tentang gaji / pangkat yang ditetapkan&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <table align="center" width="550" border="0">
            <tr>
              <td width="230">&emsp;a. Oleh Pejabat</td>
              <td width="310">&emsp;&emsp;: Gubernur</td>
            </tr>
            <tr>
              <td>&emsp;b. Tanggal </td>
              <td>&emsp;&emsp;: <?php echo $gajis['tanggal_sk']; ?> </td>
            </tr>
            <tr>
              <td>&emsp;c. Nomor </td>
              <td>&emsp;&emsp;: <?php echo $gajis['nomer_sk']; ?> </td>
            </tr>
            <tr>
              <td>&emsp;c. Gaji Pokok Lama</td>
              <td>&emsp;&emsp;: Rp. <?php echo $gajis['gaji_pokok_lama']; ?> </td>
            </tr>
            <tr>
              <td>&emsp;d. Mulai Berlaku</td>
              <td>&emsp;&emsp;: <?php echo $gajis['tanggal_berlaku']; ?> </td>
            </tr>
            <tr>
              <td>&emsp;e. Masa kerja Gol</td>
              <td>&emsp;&emsp;: <?php echo $gajis['masa_kerja_tahun']; ?> Tahun <?php echo $gajis['masa_kerja_bulan']; ?> Bulan</td>
            </tr>
          </table>
          <p align="center">Diberikan Kenaikan Gaji Brkala hingga mempeoleh : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <table align="center" width="550" border="0">
            <tr>
              <td width="229">8. Gaji Pokok Baru</td>
              <td width="311">&emsp;&emsp;: Rp. <?php if($gajis['gaji_pokok_baru'] != NULL){
                                                                echo $gajis['gaji_pokok_baru'];
              }else{
                echo "-"; 
              } 
                                                         ?></td>
            </tr>
            <tr>
              <td>9. Berdasarkan Massa Kerja</td>
              <td>&emsp;&emsp;: <?php if($gajis['new_masa_kerja_tahun'] != NULL){
                                        echo $gajis['new_masa_kerja_tahun'];
                                  }else{
                                        echo "-";
                                    } ?> Tahun <?php if($gajis['new_masa_kerja_bulan'] != NULL){
                                                        echo $gajis['new_masa_kerja_bulan'];
                                                      }else{
                                                        echo "-";
                                                      } ?> Bulan</td>
            </tr>
            <tr>
              <td>10. Dalam Golongan</td>
              <td>&emsp;&emsp;: <?php if($gajis['new_golongan'] != NULL){
                                          echo $gajis['new_golongan'];
                                      }else{
                                          echo "-";
                                      } ?></td>
            </tr>
            <tr>
              <td>11. Mulai Tanggal</td>
              <td>&emsp;&emsp;: <?php if($gajis['new_tanggal_berlaku'] != NULL){
                                           echo $gajis['new_tanggal_berlaku'];
                                      }else{
                                        "-";
                                      } ?></td>
            </tr>
          </table>
          </br>
          <p>Diharapkan agar sesuai dengan Peraturan Pemerintah <?php echo $keys['peraturan']; ?> kepada Pegawai tersebut dibayarkan penghasilannya berdasarkan  gaji pokoknya yang baru. </p></td>
      </tr>
    </table></td>
  </tr>
</table>
<a href='<?php echo site_url('pdf');?>'>print sekarang</a>

</body>
</html>