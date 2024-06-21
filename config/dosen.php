<?php
// Koeneksi Database 
$koneksi = mysqli_connect("localhost", "root", "", "belajar_php");


// Dosen
function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($dsn = mysqli_fetch_assoc($result)) {
		$rows[] = $dsn;
	}
	return $rows;
}

function tambahDosen($data){
	global $koneksi;

	$nidn = htmlspecialchars($data['nidn']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
    

	$query = "INSERT INTO dosen VALUES
				('','$nidn','$nama','$email')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);

    
}

function editDosen($data){
	global $koneksi;

	$id = ($data['id_dosen']);
	$nidn = ($data['nidn']);
	$nama = ($data['nama']);
	$email = ($data['email']);

	$query = "UPDATE dosen SET
				nidn = '$nidn',
				nama = '$nama',
				email = '$email'
				WHERE 
				id_dosen = $id";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}



function hapusDosen($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM dosen WHERE id_dosen = $id");
	return mysqli_affected_rows($koneksi);
}