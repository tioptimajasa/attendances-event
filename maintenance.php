<?php
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
  
  <body>
  <!-- <center><h2 style="color:green;">ERROR 404</h2></center> -->
  <br/>
  <div>
    <center><img src="dist/img/under-maintenance.jpg" style="width:1000px; height:500px"></center>
  </div>

  

  <br /><br/>
    
  <div id="rz">
        <strong> <a href="#" style="color: black;">Copyright &copy; 2022 by TI-POJ</a></strong>
  </div>  
  </body>
</html>

<style>
img {
  opacity: 0.1;
}
#rz {
  opacity:0.5;
  padding-top:50px;
    display: table;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
</style>
