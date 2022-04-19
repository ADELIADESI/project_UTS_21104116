<?php
include_once("koneksi.php");
$sql = "CREATE TABLE karya(
    JUDUL Varchar(50) PRIMARY KEY,
    ARTIS Varchar(30),
    TAHUN Varchar(4),
    JENIS Varchar (10),
    HARGA Varchar (20)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "TABEL BERHASIL DIBUAT";
}else{
    echo "TABEL GAGAL DIBUAT";
}
