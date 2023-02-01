<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="dist/img/icon-poj.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta http-equiv="refresh" content="5" /> -->
    <title>Aplikasi Attendances Event | Optimajasa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition" background="dist/img/login2.jpg">
    <div class="login-box">
      <div class="login-logo">
        <a href="#" style="color: black;"><!-- <span class="glyphicon glyphicon-th-large"></span> -->  LOGIN </a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <!--<center><img src="dist/img/logo.png" /></center>-->
         <p class="login-box-msg"><?php if (isset($_GET['error'])) {echo 
                  "<div class='alert alert-danger alert-gradient alert-dismissible fade in' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>x</span></button>
                            <strong>Error!</strong> $_GET[error]
                          </div>";} else { echo "";} ?></p>
        <form action="proseslogin.php" id="login" name="login" method="post">
          <div class="form-group has-feedback">
            <input type="text" id="username" name="username" class="form-control" autocomplete="off" placeholder="Username" required="required">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <center><h5 class="form-signin"><a href="#" data-toggle="modal" data-target="#contact"> RAKERNAS Apps &copy; 2023</a> </h5></center> 

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    
     <!-- Modal Dialog Contact -->
 
<!-- end dialog modal -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
