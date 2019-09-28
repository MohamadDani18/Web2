<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Politeknik tegal</title>
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
                    <li><a href="index.php">Lihat Data</a></li>
                    <li><a href="insert.php">Tambah Data</a></li>
                </ul>
            </nav>
            <!-- .main-nav -->

        </div>
    </header>
    <!-- #header -->
    <br><br>

    <div class="section-header"><br><br>
        <h3>EDIT DATA</h3>
    </div>

    <main id="main">
        <div class="container">
<?php
	include 'modul/koneksi.php';
	$nama = $_GET['nama'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where nama='$nama'");
	while($d = mysqli_fetch_array($data)){
		?>
        <form method="post" style="width: 50%;" action="modul/update.php">
        <div class="form-group">
        <label>Nama</label>
        <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
        <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('nama tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $d['nama']; ?>">
        </div>
        <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required oninvalid="this.setCustomValidity('username tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $d['username']; ?>">
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" required oninvalid="this.setCustomValidity('email tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $d['email']; ?>">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required oninvalid="this.setCustomValidity('password tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $d['password']; ?>">
        </div>
        <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        <?php 
	}
    ?>
    
</body>
</html>