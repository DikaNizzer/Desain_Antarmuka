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
                    <a href="../dokter/dokter.php">Dokter</a>
                </div>
            </div> 
            <div class="line-content">
                <hr>
            </div> 
            <div class="schedules">
                <div class="border-schedule">
                    <div class="schedule">
                      <form class="" action="dokter.php">
                          <h2>Pilih Tanggal dan Waktu</h2>
                          <div class="input">
                              <p>Tanggal</p>
                              <input type="text" name="tanggal" placeholder="<?= date('Y-m-d');?>" onfocus="(this.type='date')">
                          </div>
                          <div class="input">
                              <p>Waktu</p>
                              <select name="waktu" id="waktu">
                                  <option value="">Pilih Jam</option>
                                  <option value="05.30">05.30</option>
                                  <option value="06.00">06.00</option>
                                  <option value="06.30">06.30</option>
                                  <option value="07.00">07.00</option>
                                  <option value="07.30">07.30</option>
                                  <option value="08.00">08.00</option>
                                  <option value="17.00">17.00</option>
                                  <option value="17.30">17.30</option>
                                  <option value="18.30">18.30</option>
                                  <option value="19.00">19.00</option>
                                  <option value="19.30">19.30</option>
                                  <option value="20.00">20.00</option>
                              </select>
                          </div>
                          <div class="">
                              <input class="submit" type="submit" name="submit" placeholder="Submit">
                          </div>
                      </form> 
                    </div>
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
