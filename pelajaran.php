<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require 'config.php';

$title = "MT Pelajaran - SMP Anigou";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <div class="card text-dark">
        <img src="asset/gambar/home.png" class="card-img" alt="...">
        <div class="card-img-overlay">
        </div>
      </div>
      </div>
        <h1 class="mt-4">MT Pelajaran SMP | Anigou</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
            <li class="breadcrumb-item"><a href="laporan.php">Laporan</a></li>
            <li class="breadcrumb-item"><a href="add-siswa.php">Data Siswa</a></li>
            <li class="breadcrumb-item"><a href="data_guru.php">Data Guru</a></li>
            <li class="breadcrumb-item"><a href="pelajaran.php">MT Pelajaran</a></li>
            <li class="breadcrumb-item active"></i>SMP | Nusanta Anigou</li>
            <li class="breadcrumb-item active"></i>Prov Papua Tengah</li>
            <li class="breadcrumb-item active"></i>Kab Nabire Papua</li>
            <li class="breadcrumb-item active"></i>Tautan Link diatas Halaman Masing-masing.</li>


        </ol>

      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Guru</th>
              <th scope="col">MT Pelajaran</th>
              <th scope="col">Kelas</th>
              <th scope="col">Waktu Mengajar</th>
            
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Anance Nawipa</td>
              <td>Bhs Indonesia</td>
              <td>VII VIII IX</td>
              <td>Pertama Kls IX</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Yuliance Yogi</td>
              <td>Matematika</td>
              <td>VII VIII IX</td>
              <td>Kedua Kls VIII</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Anastasia Nawipa</td>
              <td>Biologi</td>
              <td>VII IX</td>
              <td>Kedua Kls VII</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Meri Talenta</td>
              <td>Bhs Inggris</td>
              <td>VII VIII IX</td>
              <td>Ketiga Kls IX</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Yuliance </td>
              <td>Seni Budaya</td>
              <td>VII VIII IX</td>
              <td>Kedua Kls VIII</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Yosafat Nawipa</td>
              <td>Seni Budaya</td>
              <td>IX</td>
              <td>Ketiga Kls IX</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Yolanda Anou</td>
              <td>Prakarya</td>
              <td>IX VIII</td>
              <td>Kedua VII</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Jhon Edowai</td>
              <td>TIK</td>
              <td>IX VII VIII</td>
              <td>Ketiga VIII</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  
<?php 

require "template/footer.php";

?>