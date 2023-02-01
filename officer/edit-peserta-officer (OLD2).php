<?php include "session-officer.php"; ?>
<!DOCTYPE html>
<html>
  <?php include "../global-templates/head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu-officer.php"; ?>

<?php include "../global-templates/waktu-session.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Peserta
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-officer.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Edit Peserta</li>
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
                  <h3 class="box-title">Edit Data Peserta</h3>
                  <div class="box-tools pull-right">
                  <!-- <form action='admin.php' method="POST">
    	             <div class="input-group" style="width: 230px;">
                      <input type="text" name="qcari" class="form-control input-sm pull-right" placeholder="Cari Usename Atau Nama">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default tooltips" data-placement="bottom" data-toggle="tooltip" title="Cari Data"><i class="fa fa-search"></i></button>
                        <a href="admin.php" class="btn btn-sm btn-success tooltips" data-placement="bottom" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                      </div>
                    </div>
                    </form> -->
                  </div> 
                </div><!-- /.box-header -->
                
          <!-- === QUERY === -->
          <?php
            $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nip='$_GET[kd]'");
            $row  = mysqli_fetch_array($query);
          ?>

                <div class="box-body">
                <form class="form-horizontal style-form" action="update-peserta-officer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Peserta</label>
                              <div class="col-sm-4">
                                <input name="nama" type="text" id="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="Nama Karyawan" autocomplete="off" autofocus="on" required />
                            </div>
                          </div>          
                
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-4">
                                  <input name="nip" type="text" id="nip" class="form-control" placeholder="NIP" value="<?php echo $row['nip']; ?>" autocomplete="off" autofocus="on" required="required" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-4">
                              <select name="jabatan" id="jabatan" class="form-control select2" required>
                              <option value=""> --- Pilih Jabatan --- </option>
                              <?php $jabat = $row['jabatan']; ?>
                             <option <?=($jabat=='DIREKTUR UTAMA')?'selected="selected"':''?>>DIREKTUR UTAMA</option>
                             <option <?=($jabat=='DIREKTUR')?'selected="selected"':''?>>DIREKTUR</option>
                             <option <?=($jabat=='GENERAL MANAGER')?'selected="selected"':''?>>GENERAL MANAGER</option>
                             <option <?=($jabat=='KEPALA SPI')?'selected="selected"':''?>>KEPALA SPI</option>
                             <option <?=($jabat=='MANAGER')?'selected="selected"':''?>>MANAGER</option>
                             <option <?=($jabat=='ASISTEN MANAGER')?'selected="selected"':''?>>ASISTEN MANAGER</option>
                             <option <?=($jabat=='STAF')?'selected="selected"':''?>>STAF</option>
                              </select> 
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Unit Kerja</label>
                              <div class="col-sm-4">
                              <select name="unit_kerja" id="unit_kerja" class="form-control select2" required>
                              <option value=""> --- Pilih Unit Kerja --- </option>
                              <?php $unit = $row['unit_kerja']; ?>
                             <option <?=($unit=='KANTOR PUSAT')?'selected="selected"':''?>>KANTOR PUSAT</option>
                             <option <?=($unit=='PERWAKILAN MEDAN')?'selected="selected"':''?>>PERWAKILAN MEDAN</option>
                             <option <?=($unit=='PERWAKILAN BALIKPAPAN')?'selected="selected"':''?>>PERWAKILAN BALIKPAPAN</option>
                             <option <?=($unit=='PERWAKILAN BANDUNG')?'selected="selected"':''?>>PERWAKILAN BANDUNG</option>
                             <option <?=($unit=='PERWAKILAN DENPASAR')?'selected="selected"':''?>>PERWAKILAN DENPASAR</option>
                             <option <?=($unit=='PERWAKILAN JAKARTA 1')?'selected="selected"':''?>>PERWAKILAN JAKARTA 1</option>
                             <option <?=($unit=='PERWAKILAN JAKARTA 2')?'selected="selected"':''?>>PERWAKILAN JAKARTA 2</option>
                             <option <?=($unit=='PERWAKILAN MAKASSAR')?'selected="selected"':''?>>PERWAKILAN MAKASSAR</option>
                             <option <?=($unit=='PERWAKILAN MANADO')?'selected="selected"':''?>>PERWAKILAN MANADO</option>
                             <option <?=($unit=='PERWAKILAN PALEMBANG')?'selected="selected"':''?>>PERWAKILAN PALEMBANG</option>
                             <option <?=($unit=='PERWAKILAN PEKANBARU')?'selected="selected"':''?>>PERWAKILAN PEKANBARU</option>
                             <option <?=($unit=='PERWAKILAN SEMARANG')?'selected="selected"':''?>>PERWAKILAN SEMARANG</option>
                             <option <?=($unit=='PERWAKILAN SURABAYA')?'selected="selected"':''?>>PERWAKILAN SURABAYA</option>
                             <option <?=($unit=='AREA BATAM')?'selected="selected"':''?>>AREA BATAM</option>
                             <option <?=($unit=='AREA LAMPUNG')?'selected="selected"':''?>>AREA LAMPU</option>
                             <option <?=($unit=='AREA JAMBI')?'selected="selected"':''?>>AREA JAMBI</option>
                             <option <?=($unit=='AREA JEMBER')?'selected="selected"':''?>>AREA JEMBE</option>
                             <option <?=($unit=='AREA BANJARMASIN')?'selected="selected"':''?>>AREA BANJARMASI"</option>
                             <option <?=($unit=='REGIONAL JAKARTA')?'selected="selected"':''?>>REGIONAL JAKARTA</option>
                              </select> 
                            </div>
                          </div>

                          <!-- <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Departemen</label>
                              <div class="col-sm-4">
                              <select name="departemen" id="departemen" class="form-control select2" required>
                              <option value=""> --- Pilih Departemen --- </option>
                              <php $dept = $row['departemen']; ?>
                             <option <=($dept=='Administration')?'selected="selected"':''?>>Administration</option>
                             <option <=($dept=='BISNIS OUTSOURCING')?'selected="selected"':''?>>BISNIS OUTSOURCING</option>
                             <option <=($dept=='DIVISI BISNIS OUTSOURCING')?'selected="selected"':''?>>DIVISI BISNIS OUTSOURCING</option>
                             <option <=($dept=='DIVISI BISNIS RENTAL')?'selected="selected"':''?>>DIVISI BISNIS RENTAL</option>
                             <option <=($dept=='DIVISI BISNIS RENTAL & USAHA LAIN')?'selected="selected"':''?>>DIVISI BISNIS RENTAL & USAHA LAIN</option>
                             <option <=($dept=='DIVISI KEUANGAN & T.I')?'selected="selected"':''?>>DIVISI KEUANGAN & T.I</option>
                             <option <=($dept=='DIVISI SDM & LOGISTIK')?'selected="selected"':''?>>DIVISI SDM & LOGISTIK</option>
                             <option <=($dept=='SPI')?'selected="selected"':''?>>SPI</option>
                             <option <=($dept=='Sales')?'selected="selected"':''?>>Sales</option>
                             <option <=($dept=='Lainnya')?'selected="selected"':''?>>Lainnya</option>
                              </select> 
                            </div>
                          </div> -->

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Type Peserta</label>
                              <div class="col-sm-4">
                              <select name="type_peserta" id="type_peserta" class="form-control select2" required>
                              <option value=""> --- Pilih Type Peserta --- </option>
                              <?php $type_peserta = $row['type_peserta']; ?>
                             <option <?=($type_peserta=='PANITIA')?'selected="selected"':''?>>PANITIA</option>
                             <option <?=($type_peserta=='PESERTA')?'selected="selected"':''?>>PESERTA</option>
                              </select> 
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                              <div class="col-sm-10">
                                  <img src="<?php echo $data['foto'];?>" width="200" height="250" class="img-rounded" style="border: 3px solid #888;"/>
                                  <input name="nama_file" id="nama_file" class="form-control" type="file" value="<?php echo $data['foto'];?>" required />
                              </div>
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="peserta-officer.php" class="btn btn-sm btn-danger">Batal </a>
                              </div> 
                          </div>
                      </form>
                </div><!-- /.box-body -->
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

   
   <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>

    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

    <script src="../plugins/select2/select2.full.min.js"></script>

    <script>
	//options method for call datepicker
	$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	
    </script>

  <script>
     $(function () {
    $(".select2").select2();
    });
    </script>
  </body>
</html>
