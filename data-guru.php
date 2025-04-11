<?php 

require "config.php";

$title = "Tambah Guru - SMP Anigou";
require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";

if (isset($_GET['msg'])) {
   $msg = $_GET['msg'];
} else { 
    $msg = '';
}

$alert = '';
if ($msg == 'cancel') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah user gagal, username sudah ada..
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if ($msg == 'notimage') {
  $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-xmark"></i> Tambah user gagal, file yang anda upload bukan gambar..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($msg == 'oversize') {
  $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-xmark"></i> Tambah user gagal, maximal ukuran gambar 1 MB..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($msg == 'hidden') {
  $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-circle-check"></i> Tambah User berhasil, segera ganti password anda !
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>  

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <div class="card text-bg-dark">
      </div>
      </div>   
       <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Guru</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="data-guru.php">Home</a></li>
            <li class="breadcrumb-item"><a href="data-guru-proses.php">Guru</a></li>
            <li class="breadcrumb-item active">Tambah Guru</li>
            <li class="breadcrumb-item active">SMP Nusantara Anigou Nabire Papua 2024</li>
        </ol>
        <form action="data-guru-proses.php" method="POST" enctype="multipart/from-data">
           <?php
          if ($msg !== '') {
              echo $alert;
              }
          ?>
            
        <div class="card">
         <div class="card-header">
          <div class="card"> 
          <div class="card-header">
            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Biodata Guru</span>
            <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
            </div>
          <div class="card-body">
          <div class="row">
            <div class="col-8">
              <div class="mb-3 row">
            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
            <label for="" class="col-sm-1 col-form-label">:</label>
            <div class="col-sm-7" style="margin-left: -40px;">
              <input type="text" pattern="[A-Za-z0-9]{3,}" title="minimal 3 karakter Kombinasi huruf besar huruf kecil dan angka"
              class="form-control border-0 border-bottom" id="nip" name="nip" maxlength="20" reqiured>
            </div>
          </div> 
          <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <label for="" class="col-sm-1 col-form-label">:</label>
            <div class="col-sm-7" style="margin-left: -40px;">
              <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" maxlength="20" reqiured>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="mapel" class="col-sm-3 col-form-label">Mata Pelajaran</label>
            <label for="" class="col-sm-1 col-form-label">:</label>
            <div class="col-sm-7" style="margin-left: -40px;">
              <select name="mapel" id="mapel" class="from-select border-0 border-bottom" reqiured>
                <Option value="" selected>--Pilih Pelajaran--</Option>
                <Option value="Mt Bhs indonesia">Mt Bhs Indonesia</Option>
                <Option value="Mt Matematika">Mt Matematika</Option>
                <Option value="Mt Bhs Inggris">Bhs Inggris</Option>
                <Option value="Mt TIK">Mt TIK</Option>
                <Option value="Mt Prakarya">Mt Prakarya</Option>
                <Option value="Mt Seni Budaya">Mt Seni Budaya</Option>
                <Option value="Mt Penjas">Mt Penjas</Option>
              </select>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="gurukel" class="col-sm-2 col-form-label">Guru Kelas</label>
            <label for="" class="col-sm-1 col-form-label">:</label>
            <div class="col-sm-7" style="margin-left: -50px;">
              <select name="gurukel" id="gurukel" class="from-select border-0 border-bottom" reqiured>
                <Option value="" selected>--Pilih Guru Kelas--</Option>
                <Option value="VII">VII</Option>
                <Option value="VIII">VIII</Option>
                <Option value="IX">IX</Option>
              </select>
              </div>
            </div>
            <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <label for="" class="col-sm-1 col-form-label">:</label>
            <div class="col-sm-8" style="margin-left: -40px;">
            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="domisli" reqiured></textarea>
          </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </from>
  </div>
 </main>

<?php 

 require_once "template/footer.php";

?>
