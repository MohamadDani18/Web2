<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 

// update data ke database

mysqli_query($koneksi,"update mahasiswa set nama='$nama', username='$username', email='$email', password='$password' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>