<?php 

session_start();

if (!isset($_SESSION['sslogin'])) {
  header('location: login.php');
  exit();
}

require 'config.php';

$title = "Seting - SMP Anigou";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";


?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Pengaturan</h1>
      </div>

        <form action="proses.php" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama Aplikasi</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $name ?>" placeholder="nama aplikasi anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tag" class="form-label">Tag Line</label>
                        <input type="text" name="tag" class="form-control" id="tag" value="<?= $tagline ?>" placeholder="masukkan tag line anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="sesi" class="form-label">Lock Screen (dalam detik)</label>
                        <input type="text" name="sesi" pattern="[0-9]+" title="hanya angka" class="form-control" id="sesi" value="<?= $sesi ?>" placeholder="waktu lock screen dalam detik" required>
                        <span class="text-danger fst-italic" style="font-size: 13px;" id="pesan" hidden>Beri angka 0 jika ingin mengosongkan</span>
                    </div>
                    <button type="reset" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-lg align-top"></i> Reset</button>
                    <button type="submit" name="simpan" class="btn btn-outline-primary btn-sm"><i class="bi bi-save align-top"></i> Simpan</button>
                </div>
            </div>
        </form>

    </main>
        
    <script>
        let sesi    = document.getElementById('sesi');
        let pesan   = document.getElementById('pesan');
        sesi.oninput = () => {
            if (sesi.value == '') {
                pesan.removeAttribute('hidden');
            } else {
                pesan.setAttribute('hidden', true);
            }
        }
    </script>
  
<?php 

require "template/footer.php";

?>
