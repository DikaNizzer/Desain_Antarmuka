
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Healt</title>
    <link rel="stylesheet" href="../../assets/stylesheet.css">


    <!-- CSS Form -->
    <style>
* body {
	font-family: 'Roboto', sans-serif;
}

.dua{
	width: 100%;
	height: 500px;
}

.wrap {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	    -ms-flex-direction: row;
	        flex-direction: row;
	display: inline-block;
}

.box {
	margin: 10px;
	width: 200px;
	height: 200px;
	text-align: center;
	border-radius: 5px;
	-webkit-transition: 200ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
	        box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.box:hover {
	margin-bottom: -10px;
	-webkit-box-shadow: 0 0 5px #002B7D;
	        box-shadow: 0 0 5px #002B7D;
}

/* utk shadow kotak */
.box h1 {
	color: #fff;
	padding: 15px;
	margin-top: 100px;
	text-align: center;
	font-weight: 100;
	font-size: 25px;
	background: #D7B94C;
	display: inline-block;
}

.one {
	background-image: url('../../assets/poli/umum.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.two {
	background-image: url('../../assets/poli/gigi.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.three {
	background-image: url('../../assets/poli/kia.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.four {
	background-image: url('../../assets/poli/gizi.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.five {
	background-image: url('../../assets/poli/anak.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.six {
	background-image: url('../../assets/poli/batra.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.seven {
	background-image: url('../../assets/poli/jantung.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.eight {
	background-image: url('../../assets/poli/tht.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.nine {
	background-image: url('../../assets/poli/mata.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.ten {
	background-image: url('../../assets/poli/rehab.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
    <body>
        <header style="height: 120px; position:relative;">
            <div class="container" >
                <div class="header-top">
                    <p>Jl. Airlangga No.4 - 6, Airlangga, Kota Surabaya.</p>
                    <p>+62 81234567</p>
                </div>
                <div class="header-right">
                    <hr>
                    <a href="#">Beranda</a>
                    <a href="#">Profil</a>
                    <a href="#">Fasilitas</a>
                    <a href="#">Pelayanan</a>
                    <a href="#">Berita</a>
                    <a href="#">Promosi</a>
                    <a href="#">Kontak</a>
                </div>
            </div>
        </header>

        <div class="pembatas"></div>
        <center><h1>Poli</h1></center>
        <br>

        <div class="container dua">
			<a href="../dokter/dokter.php?layanan=umum" class="wrap">
	          	<div class="box one">
		        	<h1>Umum</h1>
	          	</div>
          	</a> 
			<a href="../dokter/dokter.php?layanan=gigi" class="wrap">
	          	<div class="box two">
		        	<h1>Gigi</h1>
	          	</div>
          	</a> 
			  <a href="../dokter/dokter.php?layanan=kia" class="wrap">
	          	<div class="box three">
		        	<h1>KIA</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box four">
		        	<h1>Gizi</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box five">
		        	<h1>Anak</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box six">
		        	<h1>Batra</h1>
	          	</div>
          	</a> 
			<a href="#" class="wrap">
	          	<div class="box seven">
		        	<h1>Jantung</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box eight">
		        	<h1>THT</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box nine">
		        	<h1>Mata</h1>
	          	</div>
          	</a> 
			  <a href="#" class="wrap">
	          	<div class="box ten">
		        	<h1>Rehab</h1>
	          	</div>
          	</a> 
        </div>

    </body>
</html>