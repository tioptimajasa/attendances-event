<header class="main-header">
        <!-- Logo -->
        <a href="index-user.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- <span class="logo-mini"><b>POJ</b></span> -->
          <span class="logo-mini"><img src="../dist/img/logo-only.jpg" width="30" height="30" /></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RAKERNAS</b> 2022</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <a href="index-user.php"> <img src="../dist/img/logo-poj2.png" width="375" height="48" /> </a>
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <img src="<?php echo $_SESSION['gambar']; ?>" class="user-image" style="border: 1px solid white;" alt="User Image"> -->
                  <img src="../user/gambar_user/qrcode-logo.jpg" class="user-image" style="border: 1px solid white;" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $_SESSION['gambar']; ?>" class="img-card-rz" style="width:260px; height:150px;" alt="User Image">
                    <p>
                    <!-- <?php echo $_SESSION['fullname']; ?> -->
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Karyawan</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Departemen</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Cuti</a> -->
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <!-- <a href="../admin/detail-admin.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>" class="btn btn-default btn-flat">Profile</a> -->
                    </div>
                    <div class="pull-right">
                    <a href="../logout.php" class="btn btn-default btn-flat" onclick="return confirm ('Apakah Anda Akan Keluar.?');"> Keluar </a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-spin fa-gear"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>