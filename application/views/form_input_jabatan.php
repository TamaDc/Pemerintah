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
                            <form class="form-horizontal" style="width: 978px"; role="form" method="POST" action="<?php echo base_url()."index.php/admin_jabatan/insert"; ?>">
                                  
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="">
                                      </div>
                                  </td>
                                  </tr>
                                  

                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="skpd" class="col-sm-2 control-label">Level</label>
                                      </div>
                                  </td>
                                  <td>  
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="level" name="level" value="">
                                    </div>
                                  </td>
                                  </tr>
                                  
                              
                                  <tr><th colspan="2">
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/admin_jabatan/data_jabatan/"; ?>">Cancel</a>
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
