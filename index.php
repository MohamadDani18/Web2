<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Politeknik Tegal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Bootstrap CSS File -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    

</head>

<body id="detail-program">

    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#detail_mahasiswa">Lihat Data</a></li>
                    <li><a href="insert.php">Tambah Data</a></li>
                </ul>
            </nav>
            <!-- .main-nav -->

        </div>
    </header>
    <!-- #header -->

    <main id="main">
<br><br>
        
        <!--==========================
      Media Partner Section
    ============================-->
    <section id="detail_barang" class="section-bg">
    <div class="container">
            <br><br>
            <header class="section-header">
                <h3>Data Mahasiswa</h3>
            </header>
    <br/>
    <br/>
    <table border="1" class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <?php 
      include 'modul/koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from mahasiswa");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['username']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['password']; ?></td>
          <td>
                <a href="edit.php?nama=<?php echo $d['nama']; ?>" onClick="return confirm('edit data mahasiswa?')"/><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                <a href="modul/delete.php?nama=<?php echo $d['nama']; ?>" onClick="return confirm('Hapus Inputan?')"/><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
		    </td>
        </tr>
        <?php 
      }
      ?>
    </table>
    </div>
    </section>
        <!-- end media partners -->


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>