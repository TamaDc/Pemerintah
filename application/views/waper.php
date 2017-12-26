
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar">
                          
                        </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()."index.php/web"; ?>"><img  src="<?php echo base_url()."assets/img/"; ?>pemerintah.png" /></a>   
                </div>


              <span class="logout-sp">
                 <li class="dropdown">
                    <a href="#" class="dropbtn"> <img width="40" height="40" src="<?php echo base_url()."assets/images/"; ?>icon.png" />&nbsp;&nbsp;<?php echo $this->session->userdata('nama');?>&nbsp;</a>
                    <div class="dropdown-content">
                      <a class="fa fa-user" href="#"> Akun</a>
                      <a class="fa fa-lock" href="<?php echo base_url()."index.php/Login/logout"; ?>"> Log out</a>
                    </div>
                  </li> 
              </span>

               <!--  <span class="logout-spn" >
                  <a href="<?php echo base_url()."index.php/Login/logout"; ?>" style="color:#fff;">LOGOUT</a>  
                </span> -->
            </div>
    </div>