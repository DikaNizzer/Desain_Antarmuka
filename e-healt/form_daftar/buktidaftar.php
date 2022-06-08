
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

.container1 {
  max-width: 1170px;
  padding: 0 15px;
  margin: center;
}

.border-schedule1 {
  width: 40%;
  border-style: solid;
  border-width: medium;
  border-color: rgba(0,43,125,1.00);
  display: inline-block;
  border-radius: 15px;
  text-align: center;
}

.schedule1 {
  text-align: center;
  margin: 20px 0 20px 0px;
}

.schedule1 h2 {
  color: rgba(0,43,125,1.00);
  margin-left: 0px;
}

.line-content1 h2 {
  color: rgba(0,43,125,1.00);
  margin-left: 0px;
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
        <br>

        
        <div class="container1">
          <div class="schedules">
            
            <div class="border-schedule1">
              <div class="schedule1">
                <form class="" action="">
                  <h2>E - Health</h2>
                  <p>Jl. Airlangga No.4 - 6, Airlangga, Kota Surabaya</p>
                  <p>+62 81234567</p>
                  <div class="line-content1"><hr><div> 
                  <h2>Gigi</h2>
                  <h2>3</h2>
                  <h4>3578152011513034</h4>
                  <h4>Andika Surya Rahmad</h4>
                  <p>Hadir Pada :</p> 
                  <p>24 Mei 2022, Pukul 19.00</p>
                </form> 
              </div>
            </div>
          </div>
        </div>
        <br><br><center><input type="submit" value="Cetak" name="Cetak"></center>

    </body>
</html>