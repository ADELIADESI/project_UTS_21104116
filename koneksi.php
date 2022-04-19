<?php
include_once("konfig.php");
//server : localhost ( 127.0.0.1 )
//user : root
//password :
//Dapat dipilih salah satunya


//metode prosedural
$cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT) 
or die("Terjadi kesalahan koneksi ke database");

/*
//metode OOP
$cn = new mysqli(dbSERVER,dbUSER,dbPWD);

if($cn->connect_error){
    die("Terjadi kesalahan");
}
*/

echo "koneksi berhasil<br>";