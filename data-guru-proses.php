<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require 'config.php';

if (isset($_POST['simpan'])) {
    $nip     = $_POST['nip'];
    $nama    = htmlspecialchars($_POST['nama']);
    $alamat   = htmlspecialchars($_POST['alamat']);
    $mapel = htmlspecialchars($_POST['mapel']);
    $gurukel = htmlspecialchars($_POST['gurukel']);


    mysqli_query($koneksi, "INSERT INTO tbl_guru VALUES ('$nip','$nama','$alamat','$mapel','$gurukel')");

    echo "<script>
                alert('Data siswa berhasil disimpan');
                document.location.href = 'data-guru.php';
    </script>";
return;

}