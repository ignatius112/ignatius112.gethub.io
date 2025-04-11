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
      <div class="card text-center">
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
      </div>
      </div>
      <div class="text-center">
        <h1 class="mt-4">Profil Sekolah SMP Nusantara Anigou</h1>
        <ol class="breadcrumb mb-4">
          </ol>
        <div class="row g-50 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
    <img src="asset/gambar/papannama.jpg" class="w-100">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
  <div class="card-center">
    <h5 class="mt-2">TENTANG SEKOLAH KAMI :</h5>
    <h2 class="mt-1">SMP Nunsatara Anigou Nabire.</h2>
    <p>SsalamuAlaikum Wr.Wb. Salam sejahtera bagi kita semua.</p>
    <p>Para pengunjung yang berbahagia, kami ucapkan selamat datang di website resmi SMP Anigou Nabire Papua. Kami sangat menyadari sepenuhnya bahwa dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat,</p>
    <p>Sangat diperlukan berbagai sarana prasarana yang tepat dan relevan terhadap kebutuhan berbagai informasi siswa, guru, orang tua maupun masyarakat. Oleh sebab itu, kami</p>
    <p>Senantiasa Berusaha mewujudkan hal tersebut salah satunya dengan peluncuran website Kami sangat berharap, dengan adanya media layanan informasi dalam bentuk website ini</p>
       </ol>
    </div>
  </div>
  <div class="card-dark">
  <div class="text-center">
  <div class="text">
    Tentang Kami Mengpublikasi media
  </div>
  <div class="card-body">
    <h5 class="card-title">TENTANG SEKOLAH SMP ANIGOU</h5>
    <a href="#" class="btn btn-primary">Kami sangat berharap, dengan adanya media layanan informasi dalam bentuk website ini dapat mewujudkan hubungan yang lebih erat lagi, menambah wawasan, menjadi sarana bagi SMP Nusantara Anigou Nabire memberi pelayanan informasi secara cepat, jelas, dan akuntable.</a>
  </div>
  </div>
</div>
  <div class="card text-bg-dark-centar">
  <div class="col-md-6 p-4 ps-md-0">
 
 
    <h4 class="card-title">IDENTITAS SEKOLAH</h4>
    <p class="card-text">SMP Nusantara Anigou</p>
  </div>
    <div class="col-md-6 p-4 ps-md-0">
    <div class="card text-white bg-primary">
      <img class="card-img-top" src="asset/gambar/anigou.png" alt="">
      <div class="card-body">
    <div class="card" style="width: 23rem;">
  <div class="card-header">
    Identitas Sekolah
  </div>
  <div class="card-body">
  <i class="fa fa-cc-discover" aria-hidden="true"></i>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NPSN        : 4647558</li>
    <li class="list-group-item">Akreditasi  : B</li>
    <li class="list-group-item">Status      : Yayasan Anigou</li>
    <li class="list-group-item">Sekolah     : SMP Anigou</li>
    <li class="list-group-item">Alamat      : Jl Wonerejo Kalibobo</li>
  </ul>
  </div>
</div>