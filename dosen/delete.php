<?php 
require '../config/dosen.php';

$id = $_GET["id"];

// cek kondisi
if( hapusDosen($id) > 0 ) {
	// kondisi pertama
	echo "
		<script>
			document.location.href = '/TUGAS_PEMROGRAMAN/dosen';
		</script>
	";
} else {
	// kondisi kedua
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = '/TUGAS_PEMROGRAMAN/dosen';
		</script>
	";
}

?>