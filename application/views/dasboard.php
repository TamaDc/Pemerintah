<!DOCTYPE html>
<head>
<style>


</style>
    <link href="<?php echo base_url()."assets/css/"; ?>nav.css" rel="stylesheet" />
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemerintah Semarang</title>
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
     
           
        <!-- waper -->
        <?php $this->load->view('waper.php'); ?>
        <!-- end waper -->

        <!-- /. NAV TOP  -->
        <?php $this->load->view('navigation.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <h4><strong> Selamat Datang ...</strong>

                                Sistem Kenaikan Gaji Berkala di Kepegawaian Badan pemerintahan kota Semarang. Merupakan sebuah aplikasi untuk melakukan manajemen data kepegawaian untuk pegawai negeri sipil (PNS) di kota Semarang. Anda untuk mulai untuk melakukan manajemen atau pengolahan data kepegawaian sesuai dengan hak akses yang anda miliki.
                             </h4>

                        </div>
                       
        
                    </div>
                    </br>
                    <center><img width="300" height="400" src="<?php echo base_url()."assets/img/"; ?>logo_pemerintah.png" /></center>
                  <!-- /. ROW  --> 
                              
                     

                 </div>
                 </div>
                  
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                       
                    </div>
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
