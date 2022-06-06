<?php


// menghubungkan ke db
$koneksi = mysqli_connect("localhost", "root", "", "desmuk");

function query($query){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $query); //membuat query mysql
    $data = [];

    while($siswa = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
        $data[] = $siswa;
    }

    return  $data;
}