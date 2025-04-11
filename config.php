<?php

$koneksi = mysqli_connect('localhost','root','','db_profile_smp_anigou');

if(!$koneksi) {
    die('koneksi gagal');
} 

$queryApp  = mysqli_query($koneksi, "SELECT * FROM 
tbl_pengaturan");
$app       = mysqli_fetch_assoc($queryApp);
$name      = $app['nama_aplikasi'];
$tagline   = $app['tagline'];
$sesi      = $app['sesi'];

?>