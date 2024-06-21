<?php 
//Menmanggil file confing
require '../config/dosen.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM dosen WHERE id_dosen = $id")[0];



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
            <h1>Detail</h1>
            <div class="card m-4 p-4">
                <center><h3><u>dosen</u></h3></center>
                <hr>
                <div class="image d-flex">
                    <img src="../gambar/pp.png" class="img" alt="gambar">
                <div class="px-4 d-blok">
                    
                    <pre class="text-secondary">NIDN   :  <?= $mhs["nidn"]; ?></pre>
                    <pre class="text-secondary">Nama   :  <?= $mhs["nama"]; ?></pre>
                    <pre class="text-secondary">Email  :  <?= $mhs["email"]; ?></pre>
                    <a href="/tugas/dosen" class="btn btn-danger"><i class="fa fa-home"></i></a>
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
                width: 250px;
            }
        </style>

    </div>
    <?php
        include'../template/footer.php';
        ?>