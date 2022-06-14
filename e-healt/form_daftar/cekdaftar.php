<?php
require '../method.php';
if(isset($_POST['Submit'])){
    // echo "DIPENCET";
    // exit;
    $nik = $_POST['nik'];
    

    $cekid = mysqli_query($koneksi, "SELECT * FROM desmuk.pendaftaran where `NIK` = '$nik' ");
    //cek id,  idnya ada tidak
    if( mysqli_num_rows($cekid) === 1){

        //cek paswword
        $user = mysqli_fetch_assoc($cekid);

        
            // Kalau NIK Ada DI pendaftaran
            echo "<script> 
            document.location.href = 'verifikasi.php';
            example();
            </script>";
        }else{
            echo "<script> 
            example();
            
            </script>";
            
        }
    
}


?> 