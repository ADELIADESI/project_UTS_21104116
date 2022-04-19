<?php

/*  1. Buka koneksi ke DBMS MySQL dan buka database mahasiswa
    2. Buat Query untuk insert data ke tabel mhs
    3. Excute query insert data 
    4. Tutup koneksi 
*/


if (isset($POST['txJUDUL'])){
    include_once("koneksi.php");
    $jd=$POST['txJUDUL'];
    $art=$POST['tXARTIS'];
    $thn=$POST['txTAHUN'];
    $jn=$POST['txJENIS'];
    $hrg=$POST['txHARGA'];
   
    $sql = "INSERT INTO karya( JUDUL, ARTIS, TAHUN, JENIS, HARGA) Values('$jd','$art','$thn','$jn','$hrg');";
    $hsl = mysqli_query ($cnn,$sql);
    if ($hsl){
        echo "INPUT Data ke tabel karya sukses <br>";
    
    }else{
        echo "INPUT Data Gagal  <br>";
    }

}else{
    header ("location: inputdata.php");


}