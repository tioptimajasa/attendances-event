<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Rakernas 2023</title>
    <script src="dist/js/countdown-officer-absensi.js"></script>
</head>
<body class="hold-transition" background="dist/img/countdown-2023.png">
    <br/>
<div>
    <img class="center" src="dist/img/id.png" style="width:400px; height:200px">
</div>
<br/> 
<div>
    <!-- <h2>Uang Saku dapat diambil pada Hari ke-3 RAKERNAS <small> Rabu, 30 Maret 2022 pada pukul 09:00 WIB </small></h2> -->
    <h2><small> Absensi Kehadiran RAKERNAS 2023 </small> <b>dibuka pada Senin, 23 Januari 2023 pada pukul 08:30 WIB </small></h2>
    
    <!-- <h2 id="countDown"></h2> -->
</div>

<div class="container">
		
		<div class="countdown">
			<div id="hari">NA</div>
			<div id="jam">NA</div>
			<div id="menit">NA</div>
			<div id="detik">NA</div>
		</div>
	</div>

    <!-- <button id="tombol">Berhenti!</button> -->

   
    
</body>
</html>

<style>
*{
	margin: 0;
	padding: 0;
}
h2{
    text-align: center;
    opacity: 0.6;
}
img.center {
  opacity: 0.7;
  text-align: center;
  display: block;
    margin: 0 auto;
}
#rz {
  opacity:0.5;
}

.container{
	position: auto;
	top: 80px;
	left: 100px;
	right: 100px;
	bottom: 80px;
	/* background: url(bg.jpg); */
	/* background-attachment: fixed; */
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	/* box-shadow: 0 50px 50px rgba(0,0,0,0.5),
				0 0 0 100px rgba(0,0,0,0.1); */

	border-radius: 5px;
}

.container h2{
	text-align: center;
	font-size: 10em;
	line-height: 0.7em;
	color: #ff3;
	text-shadow: 2px 2px 5px #000;
	margin-top: -80px;
}

.container h2 span{
	display: block;
	font-size: 0.2em;
	font-weight: 300;
	letter-spacing: 6px;
}

.countdown{
	display: flex;
	margin-top: 50px;
}

.countdown div{
	position: relative;
	width: 100px;
	height: 100px;
	line-height: 100px;
	text-align: center;
	background: linear-gradient(#2CF41D, #F5FFF4);
	color: #fff;
	margin: 0 0px;
	font-size: 3em;
	font-weight: 500;
}

.countdown div:before{
	content: '';
	position: absolute;
	bottom: -30px;
	left: 0;
	width: 100%;
	height: 50px;
	background: #89EF81;
	color: #fff;
	font-size: 0.35em;
	line-height: 35px;
	font-weight: 300;
}

.countdown #hari:before{
	content: 'Hari';
}
.countdown #jam:before{
	content: 'Jam';
}
.countdown #menit:before{
	content: 'Menit';
}
.countdown #detik:before{
	content: 'Detik';
}
</style>