
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
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
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>reset.css"/> 
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>
    
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>respond.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.easytabs.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.adipoli.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.isotope.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>jquery.gmap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>custom.js"></script>
    <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  -->
</head>
<body>
    
    <!-- data tabel -->
    <?php foreach ($gaji as $gajis) {
                            # code...
                        } ?> 
                        <?php foreach ($pegawai as $pegawais) {
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
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                   
                  <!-- /. ROW  --> 
                              
                     

                 </div>
                 <div id="container">
        
            <!-- Top -->
            <div class="top"> 
                <!-- Logo -->
                <div id="logo">
                    <h2><?php echo $gajis['Nama'] ?></h2>
                    <h4><?php echo $gajis['NIP'] ?></h4>
                </div>
                <!-- /Logo -->
                
               
            </div>
            <!-- /Top -->
            
            <!-- Content -->
            <div id="content" >
            
                <!-- Profile -->
                <div id="profile"> 
                    <!-- About section -->
                    <div class="about">
                        <div class="photo-inner"><img src="<?php echo base_url()."assets/images/"; ?>profile.png" height="186" width="153" /></div>
                        <h1><?php echo $pegawais['Nama'] ?></h1>
                        
                        <p>I like to make cool and creative designs. My design stash is always full of refreshing ideas. Feel free to take a look around my Vcard.</p>
                    </div>
                    <!-- /About section -->
                     
                    <!-- Personal info section -->
                    <ul class="personal-info">
                        
                        <br><br><br>
                        <li>NIP<span>:           <?php echo $gajis['NIP']; ?></span></li>
                        <li>Name<span>:          <?php echo $gajis['Nama']; ?></span></li>
                        <li>Tanggal_Lahir<span>: <?php echo $gajis['tanggal_lahir']; ?></span></li>
                        <li>Golongan<span>:      <?php   if ($gajis['new_golongan'] != NULL ){
                                                                echo $gajis['new_golongan'] , $gajis['new_periode'];
                                                        }else{
                                                                echo $gajis['Golongan'] ,$gajis['periode'];   

                                                        } ?> </p> </span></li>
                        <li>Jabatan<span>:       <?php echo $pegawais['jabatan']; ?></span></li>
                        
                    </ul>
                    <!-- /Personal info section -->
                </div>        
                <!-- /Profile --> 

                <!-- Menu -->
                <div class="menu">
                    <ul class="tabs">
                        <li><a href="#profile" class="tab-profile">Profile</a></li>
                        <li><a href="#resume" class="tab-resume">Resume</a></li>
                        <!--<li><a href="#" class="tab-portfolio">Portfolio</a></li>
                        <li><a href="#" class="tab-contact">Contact</a></li>-->
                    </ul>
                </div>
                <!-- /Menu --> 
                
                <!-- Resume -->
                <div id="resume">
                     <div class="timeline-section">
                        <!-- Timeline for Employment  -->   
                        <h3 class="main-heading"><span>Employment</span></h3>   
                        <ul class="timeline">
                            <li>
                                                   
                                <div class="timelineUnit">
                                    <h4>personal data</h4>
                                    
                                    <p>Nama&emsp;: &nbsp;<?php echo $pegawais['NIP']; ?></p>
                                    <p>NIP&emsp;&emsp; : &nbsp;<?php echo $pegawais['Nama'] ?></p>
                                    <p>TTL&emsp;&emsp; : &nbsp;<?php echo $pegawais['tanggal_lahir'] ?></p>
                                    
                                </div>

                            </li>
                            <li>
                                <br>
                                <div class="timelineUnit">
                                    <h4>Office</h4>
                                    <p>Jabatan&emsp;:&nbsp; <?php echo $pegawais['jabatan'] ?></p>
                                    <p>Skpd&emsp;&emsp; :&nbsp; <?php echo $pegawais['skpd'] ?></p>
                                    <p>Loker&emsp;&emsp;: <?php echo $pegawais['loker'] ?> </p>
                                </div>
                            </li>
                            <li>
                                <br>
                                <div class="timelineUnit">
                                    <h4>years of service</h4>
                                    <p>Nomer Sk&emsp;&emsp; : &nbsp;<?php   if ($gajis['new_nomer_sk'] != NULL ){
                                                                                echo $gajis['new_nomer_sk'];
                                                                            }else{
                                                                                echo $gajis['nomer_sk'];    
                                                                            } ?> </p> 

                                    <p>Tanggal Sk&emsp;&emsp;: &nbsp;<?php   if ($gajis['new_tanggal_sk'] != NULL ){
                                                                                echo $gajis['new_tanggal_sk'];
                                                                            }else{
                                                                                echo $gajis['tanggal_sk'];    
                                                                            } ?> </p> 
                                    <p>Masa Kerja &emsp;&nbsp; : &nbsp;<?php   if ($gajis['new_masa_kerja_tahun'] != NULL ){
                                                                                echo $gajis['new_masa_kerja_tahun'];
                                                                            }else{
                                                                                echo $gajis['masa_kerja_tahun'];    
                                                                            } ?> TH 
                                                                            <?php   if ($gajis['new_masa_kerja_bulan'] != NULL ){
                                                                                echo $gajis['new_masa_kerja_bulan'];
                                                                            }else{
                                                                                echo $gajis['masa_kerja_bulan'];    
                                                                            } ?> </p>
                                    <p>Gaji pokok&emsp;&nbsp;&nbsp;&nbsp; : &nbsp;
                                                                    <?php   if ($gajis['gaji_pokok_baru'] != NULL ){
                                                                                echo $gajis['gaji_pokok_baru'];
                                                                            }else{
                                                                                echo $gajis['gaji_pokok_lama'];    
                                                                            } ?> </p> 
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul> 
                        <!-- /Timeline for Employment  -->

                        <!-- Timeline for Education  -->   
                        <h3 class="main-heading"><span>Education</span></h3>   
                         <ul class="timeline">
                        </ul> 
                        <!-- /Timeline for Education  -->              
                    </div>
                    <div class="skills-section">
                        <!-- Skills -->
                        <h3 class="main-heading"><span>Graphics and media skills</span></h3> 
                        <ul class="skills">
                            <li>
                                <h4>Photoshop</h4>
                                <span class="rat6"></span>
                            </li>
                            <li>
                                <h4>Indesign</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Illustrator</h4>
                                <span class="rat5"></span>
                            </li>
                            <li>
                                <h4>Flash</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Corel Draw</h4>
                                <span class="rat2"></span>
                            </li>
                            <li>
                                <h4>Cinema4D</h4>
                                <span class="rat6"></span>
                            </li> 
                        </ul>
                   
                        <h3 class="main-heading"><span>Programming Skills</span></h3> 
                        <ul class="skills">
                            <li>
                                <h4>Dreamweaver</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Php/Sql</h4>
                                <span class="rat2"></span>
                            </li>
                            <li>
                                <h4>Javascript</h4>
                                <span class="rat6"></span>
                            </li>
                            <li>
                                <h4>Wordpress</h4>
                                <span class="rat5"></span>
                            </li>
                            <li>
                                <h4>Drupal</h4>
                                <span class="rat3"></span>
                            </li>
                        </ul>
                        
                     <!-- /Skills -->
                     </div>
                </div>
                <!-- /Resume --> 
                                        
                <!-- Portfolio -->
                <!--
                <div id="portfolio">

                     <ul id="portfolio-filter">
                        <li><a href="" class="current" data-filter="*">All</a></li>
                        <li><a href="" data-filter=".webdesign">WebDesign</a></li>
                        <li><a href="" data-filter=".photoghraphy">Photoghraphy</a></li>
                        <li><a href="" data-filter=".illustration">Illustration</a></li>
                        <li><a href="" data-filter=".print">Print</a></li>
                        <li><a href="" data-filter=".animation">Animation</a></li>
                    </ul>
                    <div class="extra-text">Some of the projects i'm proud with</div>
                    <ul id="portfolio-list">
                        <li class="illustration print">
                            <a href="portfolio/1.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque" rel="portfolio" class="folio">
                                <img src="portfolio/1-thumb.jpg" alt="">
                                <h2 class="title">Hello Goodbye</h2>
                                <span class="categorie">Print / Illustration</span> 
                            </a>
                        </li>
                        <li class="webdesign">
                            <a href="http://www.youtube.com/embed/c9MnSeYYtYY?autoplay=1" rel="portfolio" class="folio iframe">
                                <img src="portfolio/3-thumb.jpg" alt="" >
                                <h2 class="title">Snow time</h2>
                                <span class="categorie">Webdesign</span> 
                            </a>
                        </li>                        
                        <li class="photoghraphy">
                            <a href="http://www.google.com" rel="portfolio" target="_new">
                                <img src="portfolio/2-thumb.jpg" alt="" >                            
                                <h2 class="title">Help us</h2>
                                <span class="categorie">Photography</span> 
                            </a>
                        </li>
                        <li class="animation print">
                            <a href="portfolio/4.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/4-thumb.jpg" alt="" >
                                <h2 class="title">Sunshine</h2>
                                <span class="categorie">Print / Animation</span> 
                            </a>
                        </li>
                        <li class="animation">
                            <a href="portfolio/5.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/5-thumb.jpg" alt="" >
                                <h2 class="title">Come together</h2>
                                <span class="categorie">Animation</span> 
                            </a>
                        </li>
                        <li class="webdesign print">
                            <a href="portfolio/6.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/6-thumb.jpg" alt="" >
                                <h2 class="title">The yellow</h2>
                                <span class="categorie">Webdesign / Print</span> 
                            </a>
                        </li>
                        <li class="photoghraphy">
                            <a href="portfolio/7.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/7-thumb.jpg" alt="" >
                                <h2 class="title">Black bird</h2>
                                <span class="categorie">Photoghraphy</span> 
                            </a>
                        </li>
                        <li class="illustration">
                            <a href="portfolio/8.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/8-thumb.jpg" alt="" >
                                <h2 class="title">Revolution</h2>
                                <span class="categorie">Illustration</span> 
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /Portfolio -->   
                
                <!-- Contact -->
                <!--
                <div id="contact">
                    <div id="map"></div>
                    <!-- Contact Info -->
                    <!--
                    <div class="contact-info">
                    <h3 class="main-heading"><span>Contact info</span></h3>
                    <ul>
                        <li>Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia<br /><br /></li>
                        <li>Email: John.smith@gmail.com</li>
                        <li>Phone: +123 456 789 111</li>
                        <li>Website: www.johnsmith.com</li>
                    </ul>
                    </div>
                    <!-- /Contact Info -->
                    
                    <!-- Contact Form -->
                    <!--
                    <div class="contact-form">
                        <h3 class="main-heading"><span>Let's keep in touch</span></h3>
                        <div id="contact-status"></div>
                        <form action="" id="contactform">
                            <p>
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="input" >
                            </p>
                            <p>
                                <label for="email">Your Email</label>
                                <input type="text" name="email" class="input">
                            </p>
                            <p>
                                <label for="message">Your Message</label>
                                <textarea name="message" cols="88" rows="6" class="textarea" ></textarea>
                            </p>
                            <input type="submit" name="submit" value="Send your message" class="submit">
                        </form>
                    </div>
                    <!-- /Contact Form -->
                <!--
                </div>
                <!-- /contact -->  

            </div>
            <!--

            <!-- /Content -->
            
            <!-- Footer -->
            <div class="footer">
                
            </div>
            <!-- /Footer --> 
            
        </div>
        <!-- /Container -->
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