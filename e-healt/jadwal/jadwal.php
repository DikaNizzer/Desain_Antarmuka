<?php
include '../method.php';
$layanan = $_GET["layanan"];
$tgl = date('Y-m-d');
$day = date('D', strtotime($tgl));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);
$hariIni = $dayList[$day];


if (isset($_GET['tgl'])){
  $tgl = $_GET['tgl'];
  $day = date('D', strtotime($tgl));
  $dayList = array(
      'Sun' => 'Minggu',
      'Mon' => 'Senin',
      'Tue' => 'Selasa',
      'Wed' => 'Rabu',
      'Thu' => 'Kamis',
      'Fri' => 'Jumat',
      'Sat' => 'Sabtu'
  );
  $hariIni = $dayList[$day];
}

$waktuIsi = query("SELECT jam FROM pendaftaran WHERE tgl_daftar = '$tgl'");

if (count($waktuIsi)>0){
  $a = 0;
  foreach ($waktuIsi as $waktuIsi){
    $waktu[$a] = $waktuIsi["jam"];
    $a++;
  }

  $nDokters = 0;
  $i = 0;
  foreach ($dokters as $dokters){
    if($dokters["layanan"] === $layanan){
      $nDokters++;
      $idDokter[$i] = $dokters["id"];
      $i++;
    }
  }
  $idDokter = implode("','", $idDokter  );
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
                    <a href="#">Jadwal</a>
                </div>
                <div class="tab">
                    <a href="../dokter/dokter.php?layanan=<?=$layanan?>">Dokter</a>
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
                    $tanggalAsli = date('Y-m-d', strtotime($tanggal));
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
                    <a href="jadwal.php?layanan=<?=$layanan?>&tgl=<?=$tanggalAsli;?>">
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
                    <?php
                    $nJam = count($jam);
                    if ($hariIni === "Minggu"){
                      for ($i=0; $i<$nJam; $i++){
                        ?>  
                          <a class="waktu-red" href="#"><?=$jam[$i];?></a>
                        <?php
                      } 
                    } else {
                      if (count($waktuIsi)>0){
                        $i=0;
                        while($i<$nJam){
                          $nDokterIsi = count(query("SELECT dokter FROM pendaftaran WHERE tgl_daftar = '$tgl' AND jam = '$jam[$i]' AND dokter IN ($idDokter)"));
                          if($nDokters == $nDokterIsi){
                            ?>  
                              <a class="waktu-red" href="#"><?=$jam[$i];?></a>
                            <?php
                          } else {
                            ?>  
                              <a class="waktu-normal" href="dokter.php?layanan=<?=$layanan?>&tgl=<?=$tgl;?>&jam=<?=$jam[$i];?>"><?=$jam[$i];?></a>
                            <?php
                          }
                          $i++;
                        }
                      } else {
                        for ($i=0; $i<$nJam; $i++){
                          ?>  
                            <a class="waktu-normal" href="dokter.php?layanan=<?=$layanan?>&tgl=<?=$tgl;?>&jam=<?=$jam[$i];?>"><?=$jam[$i];?></a>
                          <?php
                        } 
                      }
                    }
                    ?>
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
