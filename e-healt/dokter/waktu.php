<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progate</title>
    <link rel="stylesheet" href="../../assets/stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
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
                    <a href="#">Dokter</a>
                </div>
            </div> 
            <div class="line-content">
                <hr>
            </div> 
            <div class="dates">
                <?php
                function tgl_indo($tanggal){
                  $bulan = array (
                    1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                  );
                  $pecahkan = explode('-', $tanggal);
                  
                  // variabel pecahkan 0 = tanggal
                  // variabel pecahkan 1 = bulan
                  // variabel pecahkan 2 = tahun
                 
                  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                }
                $tanggal = tgl_indo(date('Y-m-d'));
                for ($i=0; $i<7; $i++){
                    $day = date('D', strtotime($tanggal));
                    $dayList = array(
                        'Sun' => 'Minggu',
                        'Mon' => 'Senin',
                        'Tue' => 'Selasa',
                        'Wed' => 'Rabu',
                        'Thu' => 'Kamis',
                        'Fri' => 'Jumat',
                        'Sat' => 'Sabtu'
                    );
                ?>
                <div class="date">
                    <a href="#">
                        <p class="hari"><?= $dayList[$day] ?></p>
                        <p class="tanggal"><?= $tanggal ?></p>
                    </a>
                </div> 
                <?php
                $tanggal = tgl_indo(date('Y-m-d', strtotime('+1 days', strtotime($tanggal))));
                }
                ?>
            </div>
            <div class="times">
                <div class="time">
                    <a>05.30</a>
                    <a>06.00</a>
                    <a>06.30</a>
                    <a>07.00</a>
                    <a>07.30</a>
                    <a>08.00</a>
                    <a>17.00</a>
                    <a>17.30</a>
                    <a>18.30</a>
                    <a>19.00</a>
                    <a>19.30</a>
                    <a>20.00</a>
                </div>
            </div>  
        </div>
    </div>


    
    <footer>
      <div class="container">
        <img src="https://prog-8.com/images/html/advanced/footer_logo.png">
        <p>Learn to code, learn to be creative.</p>
      </div>
    </footer>
  </body>
</html>
