<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require_once 'config.php';

$title = "Home - SMP Anigou";

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
        <h1 class="mt-4">Menu SMP | Anigou</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="profile-sekolah.php">Profile</a></li>
            <li class="breadcrumb-item"><a href="add-siswa.php">Data Siswa</a></li>
            <li class="breadcrumb-item"><a href="data-guru.php">Data Guru</a></li>
            <li class="breadcrumb-item"><a href="pelajaran.php">MT Pelajaran</a></li>
            <li class="breadcrumb-item active"></i>SMP | Nusanta Anigou</li>
            <li class="breadcrumb-item active"></i>Prov Papua Tengah</li>
            <li class="breadcrumb-item active"></i>Kab Nabire Papua</li>
            <li class="breadcrumb-item active"></i>Tautan Link diatas Halaman Masing-masing.</li>


        </ol>
        
        <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
    <img src="asset/gambar/profile.png" class="w-100">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-2">SELAMAT DATANG :</h5>
    <h2 class="mt-1">SMP Nunsatara Anigou Nabire Papua.</h2>
    <p>SsalamuAlaikum Wr.Wb. Salam sejahtera bagi kita semua.</p>
    <p>Para pengunjung yang berbahagia, kami ucapkan selamat datang di website resmi SMP Anigou Nabire Papua. Kami sangat menyadari sepenuhnya bahwa dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, </p>
    <p>Sangat diperlukan berbagai sarana prasarana yang tepat dan relevan terhadap kebutuhan berbagai informasi siswa, guru, orang tua maupun masyarakat. Oleh sebab itu, kami </p>
    <p>Senantiasa Berusaha mewujudkan hal tersebut salah satunya dengan peluncuran website Kami sangat berharap, dengan adanya media layanan informasi dalam bentuk website ini </p>
</ol>
    </div>
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <div class="card text-bg-danger text-bg-width">
  </div>
  <div class="row g-0 bg-body-secondary position-relative">
    <div class="clearfix">
  <img src="asset/gambar/pendaftaran.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
  <h2 class="mt-1">Tempat Penerimaan Siswa Baru.</h2>

  <p>
    Menerima Siswa Baru tempat Pendaftaran secara Manual SD SMP SMP Yayasan Anigou Papua Nabire Tahun 2024
    .
  </p>

  <p>
   CALON PESERTA DIDIK BARU SMP NUSANTARA ANIGOU, INFORMASI DAN KOMUNIKASI - NABIRE TAHUN PELAJARAN 2023/2024.
  </p>
</div>
      
 <div>
  </ol>
   </div>
      <div class="text-bg-primary p-2">Kepemimpinan SMP Nusantara Doutou Anigou Nabire Papua</div>
      <div>
       
          <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-6 pb-4 mb-6">
          
          <div class="col">
            <div class="card h-100">
              <img src="asset/gambar/kepsek.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kepalah Sekolah</h5>
                <p class="card-text">Anance Lina Nawipa.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Kepsek SMP Anigou</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="asset/gambar/kepsek-sma.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kepsek</h5>
                <p class="card-text">Demianus Nawipa Nawipa</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Kepsek SMK Anigou</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="asset/gambar/user.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ketua Yayasan</h5>
                <p class="card-text">Yosafat Nawipa</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Ketua Yayasan</small>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <div class="card text-center accordion-button bg-dark-subtle">
            <img src="asset/gambar/home.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
            <div class="row g-50 bg-body-secondary position-relative">
        </div>
          <div class="col">
              <h5 class="card-title">Keungulan Sekolah</h5>
              <p class="card-text">Pembangunan di bidang pendidikan diarahkan kepada pengembangan sumberdaya manusia yang berkualitas, guna memenuhi kebutuhan dan menghadapi tantangan kehidupan di masa depan. Melalui pendidikan, potensi sumber daya manusia diaktualisasikan hingga optimal dan seluruh aspek kepribadian dikembangkan secara terpadu.</p>
              <p class="card-text"><small>tentang sekolah kami</small></p>
            </div>
          </div>
          <div>