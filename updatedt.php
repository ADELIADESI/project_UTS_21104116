<?php

    include_once("koneksi.php");
    $hrg = "$530";
    $jd='Looseme';
    $sql = "UPDATE karya SET HARGA ='$hrg' WHERE JUDUL= '$jd';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Update data sukses<br>";
    }else{
        echo "Update data gagal";
    }