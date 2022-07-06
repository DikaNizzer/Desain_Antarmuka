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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #D7B94C;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #002B7D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 25px;;
}

input[type=submit]:hover {
  background-color: #002B7D;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


/* CSS MODAL */
#example {
        visibility: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        text-align: center;
        z-index: 1000;
      }
      #example div {
        width: 600px;
        height: 300px;
        margin: 150px auto;
        background-color: #f2f2f2;
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border: 1px solid #666666;
        padding: 15px;
        text-align: center;
        font-weight: bold;
        font-size: 15px;
        border: 3px solid #cccccc;
        position: absolute;
        left: 50%;
        top: 100px;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
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
        <center><h1>Konfirmasi Pendaftaran</h1></center>
        <br>

        
        <div class="container">
          <form action="">
            <div class="row">
              <div class="col-25">
                <label for="nik">NIK</label>
              </div>
              <div class="col-75">
                <input type="text" id="nik" name="nik" value="3578152011513034">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nama">Nama Lengkap</label>
              </div>
              <div class="col-75">
                <input type="text" id="nama" name="nama" value="Andika Surya Rahmad">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="ttl">Tempat Tanggal Lahir</label>
              </div>
              <div class="col-75">
                <input type="text" id="ttl" name="ttl" value="28 September 2001">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="usia">Usia</label>
              </div>
              <div class="col-75">
                <input type="text" id="usia" name="usia" value="20 tahun">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="alamat">Alamat</label>
              </div>
              <div class="col-75">
                <input type="text" id="alamat" name="alamat" value="Jl. Bronggalan Sawah">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nohp">No Hp</label>
              </div>
              <div class="col-75">
                <input type="text" id="nohp" name="nohp" value="+62895410589791">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="poli">Poli</label>
              </div>
              <div class="col-75">
                <input type="text" id="poli" name="poli" value="Umum">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="dokter">Dokter</label>
              </div>
              <div class="col-75">
                <input type="text" id="dokter" name="dokter" value="dr. Andika Surya Rahmad">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="date">Hari, Tanggal</label>
              </div>
              <div class="col-75">
                <input type="text" id="date" name="date" value="Jum'at, 8 Juli 2022">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="pukul">Pukul</label>
              </div>
              <div class="col-75">
                <input type="text" id="pukul" name="pukul" value="07.00">
              </div>
            </div>
        

        <div class="row" style="margin-top: 5px ;">
            <div class="col-25">
            </div>
            <div class="col-75">
            <p style="color:red; font-style: oblique;">Apakah Data yang Anda masukkan sudah benar?</p>
            </div>
        </div>

        <br>
        <center><input type="submit" value="Belum" name="Belum">
        <input type="submit" value="Sudah" name="Sudah"></center>
      </form>
    </div>

    </body>
</html>