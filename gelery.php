<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require_once 'config.php';

$title = "Sekolah - SMP Anigou";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";

?>

<main class="col-md-9 col-lg-10 px-md-4 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <div class="text-center">
        <img src="asset/gambar/home.png" class="card-img" alt="...">
        <div class="card-img">
      
        <nav class="navbar navbar-expand-lg bg-body-tertiary-dark">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="">SMP | Anigou</a>
                      </li>
                    <a button class="nav-link" href="profile.php"></a>
                    </li>
                    <li class="nav-item">
                    <a button class="nav-link btn btn-outline-success" href="profile-sekolah.php">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a button class="nav-link btn btn-outline-success" href="visimisi.php">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                    <a button class="nav-link btn btn-outline-success" href="gelery.php">Gelery</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
          <ol class="breadcrumb mb-0">
         
      </div>
        <h1 class="mt-4">Gambar | SMP Anigou</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></i>Kami mengerti bahwa Karakter, Kreatifitas dan Inovasi adalah bagian terpenting dalam pendidikan Vokasi yang profesional. Itu sebabnya kami datangkan guru-guru profesional yang memiliki komitmen yang kuat untuk memajukan, SMP Nusantara Doutou Papua</li>
          </ol>
                <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <div class="row g-1 bg-body card-img position-relative">
                <div class="card-center">
                <div class="container-fluid">
                <div class="col">
                  <div class="card">
                    <img src="asset/gambar/siswa.jpg" class="card-img-top" alt="...">
                 
                      <h5 class="card-title">Foto Guru-guru</h5>
                      <p class="card-text">Bersama Guru Staf SD SMP SMK Usai Ulangan Kebersamaan Ambil gambar guru-guru Mengajar, Yayasan Anigou .</p>
                      </ol>
                      </div>
                          <div class="text-bg-dark p-2">Gambar Dibawah ini Ruang belajar SMP Nusantara Doutou Anigou Nabire Papua</div>
                          <h1 class="mt-4">Gambar Ruang Belajar</h1>
                          <div>
                          
                              <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-6 pb-4 mb-6">
                              
                              <div class="col">
                                <div class="card h-100">
                                  <img src="asset/gambar/kls1.png" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">Ruang Kls I</h5>
                                    <p class="card-text">Jumlah Siswa 20</p>
                                  </div>
                                  <div class="card-footer">
                                    <small class="text-body-secondary">SMP Anigou</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="card h-100">
                                  <img src="asset/gambar/kls2.png" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">Ruang Kls II</h5>
                                    <p class="card-text">Jumlah Siswa 30</p>
                                  </div>
                                  <div class="card-footer">
                                    <small class="text-body-secondary">SMP Anigou</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="card h-100">
                                  <img src="asset/gambar/kls3.png" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">Ruang Kls III</h5>
                                    <p class="card-text">jumlah siswa 23</p>
                                  </div>
                                  <div class="card-footer">
                                    <small class="text-body-secondary">SMP Anigou</small>
                                  </div>
                                </div>
                              </div>
                            <main class="col-md-6 ms-sm-auto col-lg-5 px-md-4 min-vh-500">
                            <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                               <div>
                               <h5 class="card-title">Mahasiswa Magan dan Beberapa Siswa Foto Bersama</h5>
                                <img src="asset/gambar/profil.png" class="card-img" alt="...">
                                <div class="card-img">
                            </div>
                              
                                  