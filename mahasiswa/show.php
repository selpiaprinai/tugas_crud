<?php 
//Menmanggil file confing
require '../config/mahasiswa.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id_mhs = $id")[0];



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
                    <img src="../gambar/pp.png" class="img" alt="gambar">
                <div class="px-4 d-blok">
                    
                    <pre class="text-secondary">Nim    :  <?= $mhs["nim"]; ?></pre>
                    <pre class="text-secondary">Nama   :  <?= $mhs["nama"]; ?></pre>
                    <pre class="text-secondary">email  :  <?= $mhs["email"]; ?></pre>
                    <pre class="text-secondary">prodi  :  <?= $mhs["jurusan"]; ?></pre>
                    <a href="/tugas/mahasiswa" class="text-danger mr-4"><i class="fa fa-home"></i></a>
                    <a class="text-primary mr-3" href="edit.php?id=<?= $mhs["id_mhs"]; ?>"><i class="fa fa-edit"></i></a>
                   
                </div>
            </div>
        </div>
        <style>
            .text-secondary{
                font-weight:bold;
                font-size: 20px;
            }
            .img{
                width: 250px;
            }
        </style>

    </div>
    <?php
        include'../template/footer.php';
        ?>