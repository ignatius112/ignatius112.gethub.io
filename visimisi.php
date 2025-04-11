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

<main class="col-md-9 col-lg-10 px-md-5 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <div class="text-center">
        <img src="asset/gambar/home.png" class="card-img" alt="...">
        <div class="card-img">
      
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
        <h1 class="mt-4">Visi-Misi</h1>
        
            <li class="breadcrumb-item active"></i>Tentang Pendidikan Sekolah Kami SMP Nusantara Anigou Nabire Papua</li>
            </ol>
              <div class="alert alert-success" role="alert">
              <div class="card-center">
              <div class="card-body">
              <img src="asset/gambar/smpanigou.png" class="card-img" alt="...">
                 <div class="card-img">
                  </div>
    
                      <h1 class="card-title">VISI-MISI</h1>
                      <p class="card-text"></p>
                      <h1 class="card-title">VISI:</h1>
                      <p class="card-text">Pembangunan di bidang pendidikan diarahkan kepada pengembangan sumberdaya manusia yang berkualitas, guna memenuhi kebutuhan dan menghadapi tantangan kehidupan di masa depan. Melalui pendidikan, potensi sumber daya manusia diaktualisasikan hingga optimal dan seluruh aspek kepribadian dikembangkan secara terpadu.</p>
                    </div>
                    <div class="card-footer text-body-secondary">
                      1 Praf
                    </div>
                  </div>
                  </div>
                  <div class="card text-center">
              <div class="card-header">
              <div class="card-body">
                  </div>
                      <h1 class="card-title">VISI:</h1>
                      <p class="card-text">Peningkatan mutu pendidikan di sekolah tidak hanya terpaku pada pencapaian aspek akademik, melainkan aspek non-akademik juga, baik penyelenggaraannya dalam bentuk kegiatan kurikuler ataupun ekstra-kurikuler, melalui berbagai program kegiatan yang sistematis dan sistemik. Dengan upaya demikian, peserta didik diharapkan memperoleh pengalaman belajar yang utuh, hingga seluruh modal belajarnya berkembang secara optimal.</p>
                    </div>
                    <div class="card-footer text-body-secondary">
                      2 Praf 
                    </div>
                  </div>
                </div>


