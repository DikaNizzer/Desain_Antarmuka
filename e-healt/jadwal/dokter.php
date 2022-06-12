<?php
include '../method.php';
$layanan = $_GET["layanan"];
$tgl = $_GET['tgl'];
$jam = $_GET['jam'];

$dokterIsi = query("SELECT dokter FROM pendaftaran WHERE tgl_daftar = '$tgl'");

if (count($dokterIsi)>0){
  $a = 0;
  foreach ($dokterIsi as $dokterIsi){
    $dokter[$a] = $dokterIsi["dokter"];
    $a++;
  }
  //$waktu = implode("','", $waktu  );
  //$jamBiru = query("SELECT jam FROM jam WHERE jam NOT IN ($waktu)");
  //$jamMerah = query("SELECT jam FROM jam WHERE jam IN ($waktu)");
}
?>
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
                    <a href="../jadwal/jadwal.php?layanan=<?=$layanan?>">Jadwal</a>
                </div>
                <div class="tab">
                    <a href="../dokter/dokter.php?layanan=<?=$layanan?>">Dokter</a>
                </div>
            </div> 
            <div class="line-content">
                <hr>
            </div> 
            <div class="doctors">
                <h2>Pilih Dokter</h2>
                <?php
                foreach($dokters as $dokters){
                  if ($dokters["layanan"] === $layanan){
                    if (count($dokterIsi)>0){
                      $nDokter = count($dokter);
                      $iDokter = 0;
                      if ($iDokter<$nDokter){
                        if ($dokters["id"] != $dokter[$iDokter]){
                          ?>
                          <a class="doctor" href="../form_daftar/konfirmasi.php?layanan=<?=$layanan?>&tgl=<?=$tgl;?>&jam=<?=$jam;?>&dokter=<?=$dokters["nama"]?>">
                            <img src="../../assets/doctor/<?=$dokters["img"]?>" alt="">
                            <h4><?=$dokters["nama"]?></h4>
                          </a>
                          <?php
                          $iDokter++;
                        }
                      }
                    } else {
                      ?>
                      <a class="doctor" href="../form_daftar/konfirmasi.php?layanan=<?=$layanan?>&tgl=<?=$tgl;?>&jam=<?=$jam;?>&dokter=<?=$dokters["nama"]?>">
                        <img src="../../assets/doctor/<?=$dokters["img"]?>" alt="">
                        <h4><?=$dokters["nama"]?></h4>
                      </a>
                      <?php
                    }
                  }
                }
                ?>
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
