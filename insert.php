<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tugas Crud</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Bootstrap CSS File -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/validasi.js" type="text/javascript"></script>

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="detail-program">

<?php
    include 'modul/koneksi.php';
?>

    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="#intro">Home</a></li>
                    <li><a href="index.php">Lihat Data</a></li>
                    <li><a href="insert.php">Tambah Data</a></li>
                </ul>
            </nav>
            <!-- .main-nav -->

        </div>
    </header>
    <!-- #header -->
<br><br><br>
    <main id="main">
    <!--Tambah Data-->
    <section id="insert" class="section-bg">
        <div class="container">
            <div class="section-header">
                <br><br>
                <h3>Tambah Data</h3>
            </div>
          <div class="container">   
    <form style="width: 60%;" method="post" action="modul/tambah_data.php">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('nama tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required oninvalid="this.setCustomValidity('username tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group ">
        <label>Email</label>
        <input type="text" class="form-control" name="email" required oninvalid="this.setCustomValidity('email tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required oninvalid="this.setCustomValidity('password tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
       
        <button type="submit" value="simpan" class="btn btn-success">Submit</button>
        <button type="reset"  class="btn btn-danger">Reset</button><br>
    </form>
        
        </div>
        
    </section>
    </div>  
    </main><br>
    

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>