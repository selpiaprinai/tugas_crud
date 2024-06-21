<?php

include '../config/mahasiswa.php';

$foto = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
echo $foto;