<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Healt</title>
    <link rel="stylesheet" href="../../assets/stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="../../assets/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-top">
            <p>Jl. Airlangga No.4 - 6, Airlangga, Kota Surabaya.</p>
            <p>+62 81234567</p>
        </div>
        <div class="header-right">
            <hr>
            <a href="../../e-healt/landing/landing.php">Beranda</a>
            <a href="#">Profil</a>
            <a href="#">Fasilitas</a>
            <a href="#">Pelayanan</a>
            <a href="#">Berita</a>
            <a href="#">Promosi</a>
            <a href="#">Kontak</a>
        </div>
      </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="tabs">
                <div class="tab">
                    <a href="../jadwal/jadwal.php">Jadwal</a>
                </div>
                <div class="tab">
                    <a href="../dokter/dokter.php">Dokter</a>
                </div>
            </div> 
            <div class="line-content">
                <hr>
            </div> 
            <div class="dates">
                <div class="date">
                    <a class="active" data-id='1' href="#">
                        <p class="hari">Rabu</p>
                        <p class="tanggal">6 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='1' href="#">
                        <p class="hari">Kamis</p>
                        <p class="tanggal">7 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='1' href="#">
                        <p class="hari">Jum'at</p>
                        <p class="tanggal">8 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='1' href="#">
                        <p class="hari">Sabtu</p>
                        <p class="tanggal">9 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='2' href="#">
                        <p class="hari">Minggu</p>
                        <p class="tanggal">10 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='1' href="#">
                        <p class="hari">Senin</p>
                        <p class="tanggal">11 Juli 2022</p>
                    </a>
                </div> 
                <div class="date">
                    <a data-id='1' href="#">
                        <p class="hari">Selasa</p>
                        <p class="tanggal">12 Juli 2022</p>
                    </a>
                </div> 
            </div>
            <div class="times">
                <div class="time active" id="time" data-content="1">
                    <a id="waktu" class="waktu-red" href="#">05.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">06.00</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">06.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">07.00</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">07.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">08.00</a>
                    <a id="waktu" class="waktu-red" href="#">17.00</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">17.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">18.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">19.00</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">19.30</a>
                    <a id="waktu" class="waktu-normal" href="../form_daftar/konfirmasi.php">20.00</a>
                </div>
                <div class="time" id="time" data-content="2">
                    <a id="waktu" class="waktu-red" href="#">05.30</a>
                    <a id="waktu" class="waktu-red" href="#">06.00</a>
                    <a id="waktu" class="waktu-red" href="#">06.30</a>
                    <a id="waktu" class="waktu-red" href="#">07.00</a>
                    <a id="waktu" class="waktu-red" href="#">07.30</a>
                    <a id="waktu" class="waktu-red" href="#">08.00</a>
                    <a id="waktu" class="waktu-red" href="#">17.00</a>
                    <a id="waktu" class="waktu-red" href="#">17.30</a>
                    <a id="waktu" class="waktu-red" href="#">18.30</a>
                    <a id="waktu" class="waktu-red" href="#">19.00</a>
                    <a id="waktu" class="waktu-red" href="#">19.30</a>
                    <a id="waktu" class="waktu-red" href="#">20.00</a>
                </div>
            </div>  
        </div>
    </div>

    <script>

      $(".date a").click(function(){
        const id = $(this).data('id');
        if(!$(this).hasClass('active')){
          $(".date a").removeClass('active');
          $(this).addClass('active');
          
          $('.time').hide();
          $(`[data-content=${id}]`).show();
        }
      });

      
    </script>

  </body>
</html>
