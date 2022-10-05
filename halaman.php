<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

        case 'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        
        default:
          echo "halaman tidak ditemukan";
            break;
    }
}else{
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat, Dimana Aplikasi ini dibuat untuk melaporkan tindakan dari ketentuan. <br>";
    echo "Anda Login Sebagai : "$_SESSION['nama'];
}