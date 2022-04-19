<?php
    include_once("koneksi.php");
    $jn = "Patung";
    $sql = "DELETE FROM karya WHERE JENIS ='$jn';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Terhapus <br>";
    }else{
        echo "hapus tidak bisa";
    }