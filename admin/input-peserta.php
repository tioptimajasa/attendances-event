<?php include "session.php"; ?>
<?php $namafolder="../peserta/gambar_peserta/"; //tempat menyimpan file ?>
<!DOCTYPE html>
<html>
  <?php include "../global-templates/head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php include "waktu.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Peserta & Akun
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Input Peserta & Akun</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Input Data Peserta & Akun</h3>
                  <!-- <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="insert-peserta.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                              <div class="col-sm-4">
                                  <input name="nik" type="text" id="nik" class="form-control" placeholder="NIK" autocomplete="off" autofocus="on" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Karyawan</label>
                              <div class="col-sm-4">
                            <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Karyawan" autocomplete="off" required />
                              
                            </div>
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Departemen</label>
                              <div class="col-sm-4">
                              <select name="departemen" id="departemen" class="form-control select2" required>
                              <option value=""> --- Pilih Departemen --- </option>
                              <option value="Administration">Administration</option>
                              <option value="BISNIS OUTSOURCING">BISNIS OUTSOURCING</option>
                              <option value="DIVISI BISNIS OUTSOURCING">DIVISI BISNIS OUTSOURCING</option>
                              <option value="DIVISI BISNIS RENTAL">DIVISI BISNIS RENTAL</option>
                              <option value="DIVISI BISNIS RENTAL & USAHA LAIN">DIVISI BISNIS RENTAL & USAHA LAIN</option>
                              <option value="DIVISI KEUANGAN & T.I">DIVISI KEUANGAN & T.I</option>
                              <option value="DIVISI SDM & LOGISTIK">DIVISI SDM & LOGISTIK</option>
                              <option value="SPI">SPI</option>
                              <option value="Sales">Sales</option>
                              <option value="Lainnya">Lainnya</option>
                              </select> 
                            </div>
                          </div>       

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User ID</label>
                              <div class="col-sm-8">
                                  <input name="user_id" type="text" id="user_id" class="form-control" placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-8">
                                  <input name="username" type="text" id="username" class="form-control" placeholder="Username" autocomplete="off" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-8">
                                  <input name="password" type="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fullname</label>
                              <div class="col-sm-8">
                                  <input name="fullname" class="form-control" id="fullname" type="text" placeholder="Fullname" autocomplete="off" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-3">
                            <select name="level" class="form-control" required>
							                <!-- <option value=""> -- Pilih Level Pengguna -- </option> -->
							                <!-- <option value="admin">Admin</option> -->
                            <option value="user">User</option>
						                </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-6">
                                  <!-- <input name="nama_file" id="nama_file" class="form-control" type="text"  readonly="readonly" value="../admin/gambar_admin/user-default.png" /> -->
                                  <input name="nama_file" id="nama_file" class="form-control" type="file" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="input-peserta.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                </div><!-- /.box-body -->
                <!-- <div class="box-footer clearfix no-border">
                  <a href="#" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Admin</a>
                </div> -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "../global-templates/footer.php"; ?>

      <?php include "../global-templates/sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
