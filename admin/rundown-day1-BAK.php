<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
  <?php include "head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php include "waktu.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Run Down
            <small>RAKERNAS PT PESONNA OPTIMA JASA TAHUN 2022</small>
          </h1>
          <ol class="breadcrumb">
          <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Run Down</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        
<div class="container">
  <ul class="nav nav-pills nav-justified">
    <!-- <li><a href="rundown.php"  >Home</a></li> -->
    <li class="active"><a href="rundown-day1.php" >Hari ke-1</a></li>
    <li><a href="rundown-day2.php">Hari ke-2</a></li>
    <li><a href="rundown-day3.php">Hari ke-3</a></li>
  </ul>
</div>

<h2>
     Day 1 
    <small> Senin, 28 Maret 2022</small>
</h2>

        <!-- //Timeline Rundown -->
        
                        <ul class="timeline">
                            <li class="event" data-date="15:00 WIB - 18:00 WIB">
                                <h3>Check In</h3>
                                <p>Palace Hotel, Cipanas, Jawa Barat</p>
                            </li>
                            <li class="event" data-date="18:00 WIB - 19:00 WIB">
                                <h3>Sholat (60 Menit)</h3>
                                <p>Palace Hotel, Cipanas, Jawa Barat</p>
                            </li>
                            <li class="event" data-date="19:00 WIB - 21:00 WIB">
                                <h3>Ramah Tamah / Makan Malam di Hotel (120 Menit)</h3>
                                <p>Panitia</p>
                            </li>
                            
                        </ul>
                    
        <!-- .//Timeline Rundown -->

            
        
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      <?php include "sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
   
   

  <!-- CSS Style tambahan Timeline -->
  <style type="text/css">

.timeline {
    border-left: 3px solid #727cf5;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    background: rgba(114, 124, 245, 0.09);
    margin: 0 auto;
    letter-spacing: 0.2px;
    position: relative;
    line-height: 1.4em;
    font-size: 1.03em;
    padding: 50px;
    list-style: none;
    text-align: left;
    max-width: 40%;
}

@media (max-width: 767px) {
    .timeline {
        max-width: 98%;
        padding: 25px;
    }
}

.timeline h1 {
    font-weight: 300;
    font-size: 1.4em;
}

.timeline h2,
.timeline h3 {
    font-weight: 600;
    font-size: 1rem;
    margin-bottom: 10px;
}

.timeline .event {
    border-bottom: 1px dashed #e8ebf1;
    padding-bottom: 25px;
    margin-bottom: 25px;
    position: relative;
}

@media (max-width: 767px) {
    .timeline .event {
        padding-top: 30px;
    }
}

.timeline .event:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
    border: none;
}

.timeline .event:before,
.timeline .event:after {
    position: absolute;
    display: block;
    top: 0;
}

.timeline .event:before {
    left: -207px;
    content: attr(data-date);
    text-align: right;
    font-weight: 100;
    font-size: 0.9em;
    min-width: 120px;
}

@media (max-width: 767px) {
    .timeline .event:before {
        left: 0px;
        text-align: left;
    }
}

.timeline .event:after {
    -webkit-box-shadow: 0 0 0 3px #727cf5;
    box-shadow: 0 0 0 3px #727cf5;
    left: -55.8px;
    background: #fff;
    border-radius: 50%;
    height: 9px;
    width: 9px;
    content: "";
    top: 5px;
}

@media (max-width: 767px) {
    .timeline .event:after {
        left: -31.8px;
    }
}

.rtl .timeline {
    border-left: 0;
    text-align: right;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    border-right: 3px solid #727cf5;
}

.rtl .timeline .event::before {
    left: 0;
    right: -170px;
}

.rtl .timeline .event::after {
    left: 0;
    right: -55.8px;
}
</style>
  <!-- CSS Style tambahan Timeline -->



    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../css/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    
    <!--<script src="../plugins/chartjs/chart.js"></script>-->
    
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
  </body>
</html>
