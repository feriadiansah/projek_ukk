<?php

$nik =$_POST['nik'];
$password =$_POST['password'];

include 'koneksi.php';
$sql = "SELECET*FROM masyarakatrpl WHERE nik='$nik' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['nik'] = $nik;
    $data = mysqli_fecth_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSSION['username'] = $data['username'];

    header("location:masyarakat.php");
}else{
    echo"<script>alert('Maaf Anda Gagal Login'); window.location.assign('login.php');</script>";
}