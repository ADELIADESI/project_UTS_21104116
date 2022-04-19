<?php
    include_once ("koneksi.php");
    $jd ="Looseme";
    $art = "Margo Tobaco";
    $thn = "1997";
    $jn = "Lukisan";
    $hrg = "$230";

    $jd ="Paradise Dream";
    $art = "Luigi rainey";
    $thn = "1990";
    $jn = "fotography";
    $hrg = "$130";

    $jd ="Anxiety";
    $art = "Bernaldin Bodle";
    $thn = "2020";
    $jn = "Patung";
    $hrg = "$100";
    
    $sql = "INSERT INTO karya( JUDUL, ARTIS, TAHUN, JENIS, HARGA) Values('$jd','$art','$thn','$jn','$hrg');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "input data berhasil<br>";
    }else{
        echo "input data  gagal<br>";
    }