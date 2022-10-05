<?php
//didalam array [] itu harus sesuai dengan name dari masyarakat.php, sementara $nik itu adalah values atau nilai untung menampung dari data name nik
$nik         = $_POST['nik'];
$nama        = $_POST['nama'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$telp        = $_POST['telp'];

include 'koneksi.php';

$sqli = "INSERT INTO masyarakatrpl(nik, nama, username, password, telp) VALUES('$nik',$nama','$username','$password','$telp')";

$query = mysqli_query($koneksi, $sqli);

if($query){
    echo "<script>alert('Anda Berhasil Mendaftar. ')window.location.assign('login.php');</script>";
}else{
    echo "<script>alert('Anda Gagal Mendaftar. ')window.location.assign('register.php');</script>";
}