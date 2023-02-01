<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $_SESSION['gambar']; ?>" height="200" width="200" style="border: 2px solid white;" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['fullname']; ?></p>
              <a href="index-officer.php"><i class="fa fa-circle text-success"></i> ONLINE <br /></a>
            </div>
          </div><br />
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">QR CODE PRESENTENCE APP</li>
            <li class="active treeview">
              <a href="index-officer.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <?php 
            $tampil=mysqli_query($koneksi, "select * from karyawan order by nik desc");
                        $total=mysqli_num_rows($tampil);
                    ?>
             
            
            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>Karyawan</span> <i class="fa fa-angle-left pull-right"></i>
                <small class="label pull-right bg-yellow"><?php echo $total; ?></small>
              </a>
              <ul class="treeview-menu">
                <li><a href="karyawan-officer.php"><i class="fa fa-circle-o"></i> List Karyawan</a></li>
                <!-- <li><a href="input-karyawan.php"><i class="fa fa-circle-o"></i> Input Karyawan</a></li> -->
                <!-- <li><a href="karyawan_importxls.php"><i class="fa fa-circle-o"></i> Import Data Excel</a></li> -->
              </ul>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-users"></i> <span>Peserta</span> <i class="fa fa-angle-left pull-right"></i>
                <small class="label pull-right bg-yellow"><?php echo $total; ?></small>
              </a>
              <ul class="treeview-menu">
                <li><a href="peserta-officer.php"><i class="fa fa-circle-o"></i> List Peserta</a></li>
                <!-- <li><a href="input-karyawan.php"><i class="fa fa-circle-o"></i> Input Karyawan</a></li> -->
                <!-- <li><a href="karyawan_importxls.php"><i class="fa fa-circle-o"></i> Import Data Excel</a></li> -->
                <li><a href="input-peserta-officer.php"><i class="fa fa-circle-o"></i> Pendaftaran Peserta Rakernas</a></li>
              </ul>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-check"></i> <span>Kehadiran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="hadir.php"><i class="fa fa-circle-o"></i> Data Kehadiran</a></li>
                <!-- <li><a href="absensi.php"><i class="fa fa-circle-o"></i> Input Kehadiran</a></li> -->
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gift"></i> <span>Merchandise</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="data-hadiah.php"><i class="fa fa-circle-o"></i> Data Merchandise</a></li>
                <!--<li><a href="hadiah.php"><i class="fa fa-circle-o"></i> Input Merchandise</a></li>-->
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-barcode"></i> <span>Scan QR Code</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="../countdown.php"><i class="fa fa-circle-o"></i> Scan Kehadiran </a></li>
                <li><a href="../countdown.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li> -->
                <li><a href="absensi.php"><i class="fa fa-circle-o"></i> Scan Kehadiran </a></li>
                <!-- <li><a href="../countdown-admin2.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li> -->
                <li><a href="hadiah.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-dollar"></i> <span>Uang Saku</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!-- <a href="uang_saku.php">
                <i class="fa fa-dollar"></i> <span>Uang Saku</span> <i class="fa fa-angle-left pull-right"></i>
              </a> -->
              <ul class="treeview-menu">
                <li><a href="../countdown-admin-uangSaku.php"><i class="fa fa-circle-o"></i> Scan Uang Saku </a></li>
                <!-- <li><a href="data-uangSaku.php"><i class="fa fa-circle-o"></i> Data Uang Saku</a></li> -->
              </ul>
            </li>
            
            <?php 
            $tampil=mysqli_query($koneksi, "select * from event");
                        $total=mysqli_num_rows($tampil);
                    ?>
            <li>
              <a href="#">
                <i class="fa fa-star"></i> <span>Event</span>
                <small class="label pull-right bg-yellow"><?php echo $total; ?></small>
              </a>
               <ul class="treeview-menu">
               <li><a href="event.php"><i class="fa fa-circle-o"></i> Data Event </a></li>
              </ul>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-file"></i> <span>Materi Event</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="input-materi.php"><i class="fa fa-circle-o"></i> Upload Materi</a></li>
                <li><a href="materi-event.php"><i class="fa fa-circle-o"></i> List Materi</a></li>
              </ul>
            </li>
            <li>
              <a href="rundown-day-tatib.php">
                <i class="fa fa-list"></i> <span>Run Down</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-lock"></i> <span>Admin</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php"><i class="fa fa-circle-o"></i> Data Admin </a></li>
                <li><a href="input-admin.php"><i class="fa fa-circle-o"></i> Input Admin </a></li>
              </ul>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-print"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="cetak-karyawan.php"><i class="fa fa-circle-o"></i> Laporan Karyawan</a></li>
                <li><a href="laporan-kehadiran.php"><i class="fa fa-circle-o"></i> Laporan Kehadiran</a></li>
                <li><a href="laporan-merchandise.php"><i class="fa fa-circle-o"></i> Laporan Merchandise</a></li>
                
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>