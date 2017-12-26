

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <nav class="vertical">
                    <li class="active-link">
                        <a href="<?php echo base_url()."index.php/web/"; ?>" ><i class="fa fa-dashboard "></i> Dashboard </a>
                    </li>
                    <ul>
                    <li class="active-link">
                        <a href="#" ><i class="fa fa-desktop "></i> Master >></a>
                        <ul>
                          <li><a href="<?php echo base_url()."index.php/admin_pegawai/data/"; ?>">Data Pegawai</a></li>
                          <li><a href="<?php echo base_url()."index.php/admin_jabatan/data_jabatan/"; ?>"> Data Jabatan</a></li>
                          <li><a href="<?php echo base_url()."index.php/admin_jabatan/data/"; ?>">Data Unit Kerja</a></li>
                        </ul>
                    </li>
                    </ul>    

                    <li class="active-link">
                        <a href="<?php echo base_url()."index.php/admin_kenaikan/data_gaji"; ?>" ><i class="fa fa-dollar "></i> Gaji Berkala (KGB) </a>
                    </li>

                    <ul>
                    <li class="active-link">
                        <a href="#" ><i class="fa fa-laptop "></i> Laporan >></a>
                        <ul>
                          <li><a href="<?php echo base_url()."index.php/admin_pegawai/laporan_data/"; ?>">Data Pegawai</a></li>
                          <li><a href="<?php echo base_url()."index.php/admin_jabatan/laporan_data_jabatan/"; ?>"> Data Jabatan</a></li>
                          <li><a href="<?php echo base_url()."index.php/admin_jabatan/laporan_data_unit/"; ?>">Data Unit Kerja</a></li>
                        </ul>
                    </li>
                    </ul> 

                    <li class="active-link">
                        <a href="<?php echo base_url()."index.php/admin_template/data_template"; ?>" ><i class="fa fa-edit "></i> Template Surat </a>
                    </li>
                    
                    <li class="active-link">
                        <a href="<?php echo base_url().'index.php/Data_Admin/admin_admin/'; ?>" ><i class="fa fa-warning "></i> Admin </a>
                    </li>

                </ul>
                </nav>
            </div>
        </nav>