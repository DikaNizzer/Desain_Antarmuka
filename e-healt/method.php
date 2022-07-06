<?php

// menghubungkan ke db
$koneksi = mysqli_connect("localhost", "root", "", "desmuk");

function query($query){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $query); //membuat query mysql
    $data = [];

    // while($siswa = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
    //     $data[] = $siswa;
    // }

    return  $data;
}

$jam = array("05.30","06.00","06.30","07.00","07.30","08.00","17.00","17.30","18.30","19.00","19.30","20.00");

$dokters = array(
    array(
        "id" => "1",
        "layanan" => "umum",
        "nama" => "dr. Andika Surya Rahmad",
        "img" => "doctor1.jpg"
    ),
    array(
        "id" => "2",
        "layanan" => "gigi",
        "nama" => "drg. Annisa Aristawati",
        "img" => "doctor2.jpg"
    ),
    array(
        "id" => "3",
        "layanan" => "gigi",
        "nama" => "dr. M. Hilmi Zain, Sp.A.",
        "img" => "doctor1.jpg"
    ),
    array(
        "id" => "4",
        "layanan" => "kia",
        "nama" => "dr. Afif Raihan Z., Sp.OG.",
        "img" => "doctor1.jpg"
    ),
);