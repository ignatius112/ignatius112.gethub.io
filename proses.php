<?php

session_start();

require 'config.php';

// login to system
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = sha1(trim(htmlspecialchars($_POST['password'])));

    $cekUser = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($cekUser) > 0) {
        // set session
        $_SESSION['sslogin'] = true;
        $_SESSION['ssuser'] = $username;
        header('location: index.php');
        exit();
    }else {
        echo "<script>
                alert('Login gagal... ');
                document.location.href = 'login.php';
              </script>";
        exit();
    }
}

// update data pengaturan
if (isset($_POST['simpan'])) {
    $nama  = htmlspecialchars($_POST['nama']);
    $tag  = htmlspecialchars($_POST['tag']);
    $sesi  = htmlspecialchars($_POST['sesi']);

    mysqli_query($koneksi, "UPDATE tbl_pengaturan SET 
                            nama_aplikasi = '$nama', 
                            tagline       = '$tag',
                            sesi          = $sesi
                            WHERE id = 1
                ");
     echo "<script>
            alert('data berahsil disimpan');
            document.location.href = 'pengaturan.php';
        </script>";
}

// lock the screen
if (isset($_GET['param']) == 'lock') {
    unset($_SESSION['sslogin']);
    header('location: locked.php');
}


// unlock the screen
if (isset($_POST['unlock'])) {
    $username = $_SESSION['ssuser'];
    $password = sha1(trim(htmlspecialchars($_POST['password'])));

    $cekPass = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($cekPass) > 0) {
        // set session
        $_SESSION['sslogin'] = true;
        
        header('location: index.php');
        exit();
    }else {
        echo "<script>
                alert('Password salah... ');
                document.location.href = 'locked.php';
              </script>";
        exit();
    }
}

?>