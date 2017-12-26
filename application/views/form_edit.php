<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
       <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemerintah Semarang</title>

    <link href="<?php echo base_url()."assets/css/"; ?>nav.css" rel="stylesheet" />
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
    <link href="<?php echo base_url()."assets/css/"; ?>dropdown.css" rel="stylesheet" />
   
</head>
<body>
  
  <!-- data table -->   
    <?php foreach ($pegawai as $pegawais) {
      # code...
    } ?>

    <?php foreach ($gaji as $gajis) {
      # code...
    } ?>
    
  <!--  -->
           
        
        <?php $this->load->view('waper.php'); ?>
        <!-- /. NAV TOP  -->
        <?php $this->load->view('navigation.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                          <div class="col-lg-12">
                              <h2>PEMERINTAH SEMARANG</h2>   
                          </div>
                        </div>    
                       <hr>
                       </br>
                          <table border="0" style="width: 978px"; align="center">
                          <div  class="alert alert-info2" >
                              <h2 align="center" >EDIT DATA PNS</h2>
                          </div>
                          </br>
                            <form class="form-horizontal" style="width: 978px"; role="form" method="POST" action="<?php echo base_url()."index.php/admin_pegawai/update"; ?>">
                                  <th width="150">
                                  <div class="form-group">
                                    <label for="NIP" class="col-sm-2 control-label">NIP</label>
                                  </th>
                                  <th width="750">
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="NIP" name="NIP" readonly  value="<?php echo $pegawais['NIP']; ?>">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $pegawais['Nama']; ?>">
                                      </div>
                                  </td>
                                  </tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="Golongan" class="col-sm-2 control-label">Golongan</label>
                                      </div>
                                  </td>
                                  <td>
                                       <div class="col-sm-5">
                                      <input type="text" class="form-control" id="Golongan" name="Golongan" value="<?php echo $pegawais['Golongan']; ?>">
                                      </div>

                                      <div class="col-sm-5">
                                      <input type="text" class="form-control" id="periode" name="periode" value="<?php echo $pegawais['periode']; ?>">
                                      </div>
                                  </td>
                                  </tr>

                                  

                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="skpd" class="col-sm-2 control-label">Skpd</label>
                                      </div>
                                  </td>
                                  <td>  
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="skpd" name="skpd" readonly value="<?php echo $pegawais['skpd']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr><td>
                                      <div class="form-group">
                                       <label for="Unit_kerja" class="col-sm-2 control-label">Unit_Kerja</label>
                                      </div>
                                      </td>
                                      <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" readonly  value="<?php echo $pegawais['unit_kerja']; ?>">
                                      </div>
                                      </td>
                                  </tr>

                                  <tr><td>
                                      <div class="form-group">
                                      <label for="pangkat" class="col-sm-2 control-label">Pangkat</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="pangkat" name="pangkat"  value="<?php echo $pegawais['pangkat']; ?>">
                                    </div>
                                  </td>
                                  </tr>

                                  <tr><td>
                                      <div class="form-group">
                                      <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="jabatan" name="jabatan" readonly value="<?php echo $pegawais['jabatan']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                    <div class="form-group">
                                    <label for="Tanggal_Lahir" class="col-sm-2 control-label">Tanggal_Lahir</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="<?php echo $pegawais['tanggal_lahir']; ?>">
                                    </div>
                                  </td>

                                </tr>
                                <tr><td>
                                      <div class="form-group">
                                      <label for="loker" class="col-sm-2 control-label">Lokasi</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="loker" name="loker"  value="<?php echo $pegawais['loker']; ?>">
                                    </div>
                                  </td>
                                  </tr>

                                  <tr><td>
                                      <div class="form-group">
                                      <label for="nomer_sk" class="col-sm-2 control-label">nomer_sk</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control"  id="nomer_sk" name="nomer_sk" placeholder="" value="<?php echo $gajis['nomer_sk']; ?>">
                                    </div>
                                  </td>
                                  </tr>

                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="tanggal_sk" class="col-sm-2 control-label">tanggal_sk</label>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="col-sm-10">
                                      <input type="date"  class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="" value="<?php echo $gajis['tanggal_sk']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr><td>
                                      <div class="form-group">
                                       <label for="masa_kerja_tahun" class="col-sm-2 control-label">masa&nbsp;Kerja&nbsp;tahun </label>
                                      </div>
                                      </td>
                                      <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control"  id="masa_kerja_tahun" name="masa_kerja_tahun"  value="<?php echo $gajis['masa_kerja_tahun']; ?>">
                                      </div>
                                      </td>
                                  </tr>
                                  
                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="masa_kerja_bulan" class="col-sm-2 control-label">masa&nbsp;kerja_bulan</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="masa_kerja_bulan" name="masa_kerja_bulan"  value="<?php echo $gajis['masa_kerja_bulan']; ?>">
                                    </div>
                                  </td>
                                </tr>

                                  

                                <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="gaji_pokok_lama" class="col-sm-2 control-label">Gaji&nbsp;pokok&nbsp;Lama</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="gaji_pokok_lama" name="gaji_pokok_lama" placeholder="*3000000" value="<?php echo $gajis['gaji_pokok_lama']; ?>">
                                    </div>
                                  </td>
                                </tr>


                                


                                <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="Tanggal_Berlaku" class="col-sm-2 control-label">Tanggal&nbsp;Berlaku</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" required="required" id="tanggal_berlaku" name="tanggal_berlaku"  value="<?php echo $gajis['tanggal_berlaku']; ?>">
                                    </div>
                                  </td>
                                </tr>

                                
                                <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="nama_pejabat" class="col-sm-2 control-label">NIP&nbsp;pejabat</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="NIP_pejabat" name="NIP_pejabat" value="<?php echo $gajis['NIP_pejabat']; ?>">
                                    </div>
                                  </td>
                                </tr>

                              
                                  <tr><th colspan="2">
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/admin_pegawai/data/"; ?>">Cancel</a>
                                      <input id="submit" name="btnSubmit" type="submit" value="Simpan" class="btn btn-primary">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>
                            </table>      
                            </div>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" align="center">
                    &copy;  2017 Credits | Design by: Tama_Dc <a href="http://doscom.org" style="color:#fff;" target="_blank"> www.doscom.org</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
