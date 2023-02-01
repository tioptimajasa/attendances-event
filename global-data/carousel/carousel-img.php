<?php include "../../global-templates/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <title>Bootstrap Image</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  $query = mysqli_query($koneksi, "SELECT * FROM admin");
  $data  = mysqli_fetch_array($query);
  echo  "AAAAAAAAAAAAAAAAAAAAAAAA $data";
  ?>

<div class="container">
  <center><h2><small>Area Populer di sekitar</small></h2></center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      <a href="/rekom-wisata-semarang.php"><img src="../global-data/carousel/img-carousel/BANNER CAROUSEL_Artboard 1.png" alt="Istana Kepresidenan semarang" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Benteng Pendem Ambarawa</h3>
          <p>....</p>
        </div>
      </div>

      <div class="item">
      <a href="rekom-wisata-semarang.php"><img src="img-carousel/BANNER CAROUSEL_Artboard 2.png" alt="Kebun Raya Cibodas" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Kebun Raya Cibodas</h3>
          <p>Kebun raya luas yang dibuat pada abad ke-19 & memiliki anggrek, pohon Cinchona & lainnya.</p>
        </div>
      </div>
    
      <div class="item">
      <a href="rekom-wisata-semarang.php"><img src="img-carousel/BANNER CAROUSEL_Artboard 3.png" alt="Taman Bunga Nusantara" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Taman Bunga Nusantara</h3>
          <p>Taman luas dengan beragam bunga, labirin tanaman, topiary, danau, & lain-lain.</p>
        </div>
      </div>
      
      <div class="item">
      <a href="rekom-wisata-semarang.php"><img src="img-carousel/BANNER CAROUSEL_Artboard 4.png" alt="Taman Safari Indonesia - Bogor" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Taman Safari Indonesia - Bogor</h3>
          <p>Hewan dari 5 benua tinggal di taman safari ini yang dapat dikunjungi pada siang & malam hari.</p>
        </div>
      </div>
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

<style>
    /* Makes images fully responsive */

.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: auto;
  height: 250px;
}

/* ------------------- Carousel Styling ------------------- */

.carousel-inner {
  border-radius: 15px;
}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

.section-white {
   padding: 10px 0;
}

.section-white {
  background-color: #fff;
  color: #555;
}

@media screen and (min-width: 768px) {

  .section-white {
     padding: 1.5em 0;
  }

}

@media screen and (min-width: 992px) {

  .container {
    max-width: 930px;
  }

}

</style>
