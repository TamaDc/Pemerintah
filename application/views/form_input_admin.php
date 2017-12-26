<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


</style>
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
                    <div class="col-lg-12">
                     <h2>PEMERINTAH SEMARANG</h2>   
                    </div>
                </div>              
                <div class="row">
                    <div class="col-lg-12 ">
                        <hr>
                        </br>

                          <div  align="center" id="container" >
                            <div class="panel panel-primary" >
                              <div class="panel-heading" >
                                <h2><center>Tambah Data Admin</center></h2>
                                </div>
                              </div>  
                                <table border="1"  width="" align="center">
                        <tr >
                          <td style="background:#3f8fb7;" ><center >|Admin|</center></td>
                          
                        </tr>
                        <tr>
                          <th>
                          <table border="0" style="width: 500px";>
                          <div align="center">
                            <form class="form-horizontal" style="width: 500px"; role="form" method="POST" action="">
                                
                                <tr>
                                <th >
                                  <div class="form-group">
                                    <label  for="judul" class="col-sm-2 control-label">username</label>
                                  </th>
                                  <th width="750">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="username" name="username" value="">
                                    </div>
                                  </div>
                                  </th>
                                </tr>
                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="kepada" class="col-sm-2 control-label">password</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="password" required="required" name="password"  value="">
                                      </div>
                                  </td>
                                  </tr>
                                  <tr><th colspan="2" >
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <input id="submit" name="btnSubmit" type="submit" value="Simpan" class="btn btn-primary">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>
                                  <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                      <! Will be used to display an alert to the user>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </th>
                        </tr>   
                    </div>
                    </table>
                    </td>
                    
                                  <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                      <! Will be used to display an alert to the user>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </th>
                        </tr>   
                    </div>
                    </table>
                    </td>
                    </tr>
                    


                    </table>
                              </div>    
                           <br><br><br><br><br><br><br><br><br><br><br>
                                            
                              <!-- <center><a class="btn btn-primary" href="<?php echo base_url()."index.php/web/form_input_template/"; ?>" >TAMBAH TEMPLATE</a></center> -->
                          </div>
                         <!-- <?php echo "<hr> <h2 align='center'>".$this->session->flashdata('pesan')."</h2>" ?>
                   --><!-- /. ROW  -->
                 <!-- /. ROW  -->   
              
      
    
             
            </div>
                  <!-- /. ROW  --> 
            </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
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






