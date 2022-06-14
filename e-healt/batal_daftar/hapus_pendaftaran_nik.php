<?php
require '../method.php';

?>
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
  background-color: #D7B94C;
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
        <!-- <div class="top-wrapper" style="height: 340px;">
            <div class="container" style="height: 340px;">
            </div>
        </div> -->


        <div class="pembatas"></div>
        <br>
        <center><h1>Hapus Pendaftaran</h1></center>
        <br>
        <div class="container">
            <div class="tabs">
                <div class="tab">
                    <a href="#">NIK</a>
                </div>
                <div class="tab">
                    <a href="../batal_daftar/hapus_pendaftaran_no_antrian.php">No Antrian</a>
                </div>
            </div> 
            <div class="line-content">
                <hr>
            </div> 
            <div class="schedules">
                <div class="border-schedule">
                    <div class="schedule">
                      <form class="" action="detail_data.php">
                          <h2>Masukkan NIK</h2>
                          <div class="nik">
                              <input type="text" name="nik">
                          </div>
                          <div class="col-50">
                              <input class="submit" type="submit" name="Cari" placeholder="Cari">
                          </div>
                      </form> 
                    </div>
                </div>
            </div> 
        </div>
        
    </body>
</html>