<?php
// Koeneksi Database 
$koneksi = mysqli_connect("localhost", "root", "", "belajar_php");


// matkul
function queryKrs($query_krs) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query_krs);
	$rows = [];
	while ($krs = mysqli_fetch_assoc($result)) {
		$rows[] = $krs;
	}
	return $rows;
}

function tambahKrs($data){
	global $koneksi;

	$id = htmlspecialchars($data['kdmk ']);
	$matkul = htmlspecialchars($data['makul']);
	$sks = htmlspecialchars($data['sks']);
    

	$query_matkul = "INSERT INTO krs VALUES
				('','$kdmk','$matkul','$sks')";
	mysqli_query($koneksi, $query_matkul);
	return mysqli_affected_rows($koneksi);

    
}

function editMatkul($data){
	global $koneksi;

	$id_mk = ($data['id']);
	$kdmk = ($data['kdmk']);
	$matkul = ($data['makul']);
	$sks = ($data['sks']);

	$query_matkul = "UPDATE makul SET
				kdmk = '$matkul',
				makul = '$matkul',
				sks = '$sks'
				WHERE 
				id_mk = $id_mk";
	mysqli_query($koneksi, $query_matkul);
	return mysqli_affected_rows($koneksi);
}



function hapusMatkul($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM makul WHERE id_mk = $id");
	return mysqli_affected_rows($koneksi);
}