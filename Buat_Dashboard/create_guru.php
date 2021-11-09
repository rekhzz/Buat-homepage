<?php 
require 'fungsi.php' ;



if (isset($_POST["submit"])) {

	if (create_guru($_POST) > 0) {
		echo "
		<script>
			alert('Data Berhasil Masuk');
			document.location.href = 'listguru.php';
		</script>
		";
	}
	 else {
		echo "Data Gagal masuk";
	}
	
	
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Tambah Data Guru</title>
	     <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Halaman Admin</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="listsiswa.php" class="nav-link" aria-current="page">Daftar Siswa</a></li>
        <li class="nav-item"><a href="listguru.php" class="nav-link ">Daftar Guru</a></li>
        <li class="nav-item"><a href="listmapel.php" class="nav-link">Jadwal Pelajaran</a></li>
      </ul>
    </header>
  </div>
</head>
<body>

<div class="container">
	<form aciton="" method="post">
		<div class="card mt-3">
			<div class="card-header bg-primary text-white">
				TAMBAH DATA GURU
			</div>
			<div class="card-body">
									<div class="mb-3" >
										<label class="form-label" for="NIP">NIP :</label>
										<input class="form-control" type="text" name="NIP" id="NIP" required>	
									</div>
									<div class="mb-3" >
										<label class="form-label" for="nama">Nama :</label>
										<input class="form-control" type="text" name="nama" id="nama">	
									</div>
									<div class="mb-3" >
										<label class="form-label" for="tanggal_lahir">Tanggal Lahir :</label>
										<input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir">	
									</div>
									<div class="mb-3" >
										<label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>
										<input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin">	
									</div>
									<div class="mb-3" >
										<label class="form-label" for="alamat">Alamat :</label>
										<input class="form-control" type="text" name="alamat" id="alamat">	
									</div>
									<div class="mb-3" align="">
										<button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
									</div>
			</div>
		</div>
	</form>
</div>
	<div class="container">
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-bottom">
    <span align = "bottom" class="text-muted" >&copy; 2021 Company, Inc</span>
    
  </footer>
  </div>
</body>
</html>