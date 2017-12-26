<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemerintah Semarang</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url()."assets/css/"; ?>custom.css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/css/"; ?>dropdown.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
<style >

</style>
           
          
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()."index.php/web/"; ?>">
                        <img src="<?php echo base_url()."assets/img/"; ?>pemerintah.png" /></a>
                    </div>

              <span class="logout-sp">
                 <li class="dropdown">
                    <a href="#" class="dropbtn">Tama_Dc <img width="40" height="40" src="<?php echo base_url()."assets/images/"; ?>tealinuxos2.png" /></a>
                    <div class="dropdown-content">
                      <a class="fa fa-user" href="#"> Akun</a>
                      <a class="fa fa-lock" href="<?php echo base_url()."index.php/Login/logout"; ?>"> Log out</a>
                    </div>
                  </li> 
              </span>
                <!-- <span class="logout-spn" >
                  <a href="<?php echo base_url()."index/Login/logout/"; ?>" style="color:#fff;">LOGOUT</a>  

                </span> -->
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <?php $this->load->view('navigation.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>PEMERINTAH SEMARANG</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    
                    </div>
                  <!-- /. ROW  --> 
                 <div class="row text-center pad-top">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."index.php/admin_pegawai/data/"; ?>" >
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                                <h4>Check Data</h4>
                           </a>
                      </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."index.php/web/add/"; ?>" >
                              <i class="fa fa-user fa-5x"></i>
                              <h4>Register Pegawai</h4>
                            </a>
                      </div> 
                 </div>

                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."index.php/admin_kenaikan/data_gaji/"; ?>" >
                              <i class="fa fa-bitcoin fa-5x"></i>
                                  <h4>Kenaikan Gaji</h4>
                          </a>
                      </div>
                  </div>  

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."index.php/admin_template/form_input_template/"; ?>">
                              <i class="fa fa-clipboard fa-5x"></i>
                                  <h4>Add template</h4>
                            </a>
                      </div>
                     
                     
                  </div> 
                      
                  </div>

            </div>
          </div>        
                 <!-- /. ROW  -->   
				  <div class="row">
                    
                    </div>
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
