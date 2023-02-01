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
              <a href="index-user.php"><i class="fa fa-circle text-success"></i> ONLINE</a>
            </div>
          </div><br />
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">QR CODE PRESENTENCE APP</li>
            <li class="active treeview">
              <a href="index-user.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-file"></i> <span>Materi Event</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="input-materi.php"><i class="fa fa-circle-o"></i> Upload Materi</a></li> -->
                <li><a href="materi-event-user.php"><i class="fa fa-circle-o"></i> List Materi</a></li>
              </ul>
            </li>
            <li>
              <a href="rundown-day-tatib.php">
                <i class="fa fa-list"></i> <span>Run Down & Tata Tertib</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <!-- l -->

            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-barcode"></i> <span>Absen & Merchandise</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a> -->
              <!-- <ul class="treeview-menu"> -->
                <!-- <li><a href="../countdown.php"><i class="fa fa-circle-o"></i> Scan Kehadiran </a></li>
                <li><a href="../countdown.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li> -->
                <!-- <li><a href="absensi.php"><i class="fa fa-circle-o"></i> Scan Kehadiran </a></li> -->
                <!-- <li><a href="../countdown-m.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li> -->
                <!-- <li><a href="hadiah.php"><i class="fa fa-circle-o"></i> Scan Merchandise</a></li> -->
              <!-- </ul> -->
            <!-- </li> -->
            <!-- <li> -->
              <!-- <a href="#">
                <i class="fa fa-dollar"></i> <span>Uang Saku</span> <i class="fa fa-angle-left pull-right"></i>
              </a> -->
              <!-- <a href="uang_saku.php">
                <i class="fa fa-dollar"></i> <span>Uang Saku</span> <i class="fa fa-angle-left pull-right"></i>
              </a> -->
            <!-- </li> -->

            
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>