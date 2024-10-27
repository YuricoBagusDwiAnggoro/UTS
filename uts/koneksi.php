<?php
$server = "localhost";
$user = "root";
$pass = "";
$namaDB = "texts";
$port = 3306;
/*
//buat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port);

if (!$koneksi){
    die("koneksi gagal : " . mysqli_connect_error());
}*/
//aktifin mode exception utk mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    //buat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port);
}
catch (mysqli_sql_exception $errornih){
    //kl ada kesalahan koneksi
    echo "koneksi gagal : " .$errornih->getMessage();
}
?>