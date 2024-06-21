<?php 
require '../config/mahasiswa.php';

$id = $_GET["id"];

// cek kondisi
if( hapusMahasiswa($id) > 0 ) {
	// kondisi pertama
	echo "
		<script>
			
			document.location.href = '/TUGAS_PEMROGRAMAN/mahasiswa';
		</script>
	";
} else {
	// kondisi kedua
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'latihan.php';
		</script>
	";
}

?>