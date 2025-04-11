<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require 'config.php';

if (isset($_POST['simpan'])) {
    $nis     = $_POST['nis'];
    $nama    = htmlspecialchars($_POST['nama']);
    $kelas   = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $alamat  = htmlspecialchars($_POST['alamat']);

    mysqli_query($koneksi, "INSERT INTO tbl_siswa VALUES('$nis','$nama','$alamat','$kelas','$jurusan')");

    echo "<script>
                alert('Data siswa berhasil disimpan');
                document.location.href = 'add-siswa.php';
    </script>";
return;

}