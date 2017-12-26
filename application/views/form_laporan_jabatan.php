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
                                <h2><center>DATA PNS</center></h2>
                                </div>
                              </div>  
                                <table border="2" style="width: 1020px"; class="table table-striped"  bordercolor="#99d1ed" >

                                    <tr style="background:gray;" >
                          <!-- form serach data -->
                                        <th colspan="8" >
                                        <form class="form-inline" role="form" action="<?php echo base_url().'index.php/admin_pegawai/search_actor'; ?>" method="post">
                                          <div class="form-group" > 
                                            <input type="text" class="form-control" name="search" id="search" placeholder="Search by ID"></input>
                                          </div>
                                            <button type="submit" class="btn btn-info" name="submit">Search</button>
                                          
                                         <a class="btn btn-success" target="_blank" href="<?php echo base_url()."index.php/admin_jabatan/prints"?>">Export To pdf</a>

                                         </form>
                          <!-- form serach data -->          
 
                                        
                                    </tr>
                                    <tr style="background:#3f8fb7;">

                                      <th width="50"><center>ID</center></th>
                                      <th width="200"><center>Nama</center></th>
                                      <th width="80"><center>Level</center></th>  
                                    </tr>
                                    
                                    <?php foreach($jabatan as $row){ ?>
                                          <tr>
                                            <td><?php echo $row->kd_jabatan ?> </td>
                                            <td><?php echo $row->nama_jabatan; ?> </td>
                                            <td><center><?php echo $row->level; ?></td>

                                            
                                          </tr>
                                    <?php } ?>       
                                </table>
                                    <tr > <?php echo $link ?></tr> 
                          </div>    
                          </div>
                          <?php echo "<hr> <h2 align='center'>".$this->session->flashdata('pesan')."</h2>" ?>
                  <!-- /. ROW  -->
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
