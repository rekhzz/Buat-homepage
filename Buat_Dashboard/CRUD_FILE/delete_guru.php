<?php 

require 'fungsi_guru.php';

	$id = $_GET["id_guru"];

	if (delete_guru($id) > 0) {
		echo"<script>
			alert('Data Berhasil Dihapus');
			document.location.href = 'listguru.php';
		</script>";
	} else {
		echo"<script>
			alert('Data Gagal Dihapus');
			document.location.href = 'listguru.php';
		</script>";

	}


 ?>