<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];  

    
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$username','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>