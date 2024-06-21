<?php 
//Menmanggil file confing
require '../config/matkul.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = queryMatkul("SELECT * FROM makul WHERE id_mk = $id")[0];



?>

<?php
        include'../template/header.php';
        include'../template/sidebar.php';
        ?>
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php
                include'../template/navbar.php';
                ?>
        <div class="container m-5">
        </div>
        <div class="form box m-5">
            <h1>Detail Data Mahasiswa</h1>
            <div class="card m-4 p-4">
                <div class="image d-flex">
                    <!-- <img src="../gambar/pp.png" class="img" alt="gambar"> -->
                <div class="px-4 d-blok">
                    
                    <pre class="text-secondary">Nama Mata Kuliah :  <?= $mhs["makul"]; ?></pre>
                    <pre class="text-secondary">Kode Mata Kuliah :  <?= $mhs["kdmk"]; ?></pre>
                    <pre class="text-secondary">SKS              :  <?= $mhs["sks"]; ?></pre>
                    <a href="/TUGAS_PEMROGRAMAN/matkul" class="btn btn-danger">Balik</a>
                </div>
                </div>
            </div>
        </div>
        <style>
            .text-secondary{
                font-weight:bold;
                font-size: 20px;
            }
            .img{
                width: 20px;
            }
        </style>

    </div>
    <?php
        include'../template/footer.php';
        ?>