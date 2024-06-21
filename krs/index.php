<?php

require '../config/matkul.php';
// Koneksi Ke dalam database

//$koneksi = mysqli_connect("localhost", "root", "", "belajarphp");


// Tes Koneksi Ke dalam database
// if (!$koneksi){
// 	die("Konesi Gagal : ". mysqli_connect_error());
// }

// echo "Koneksi Berhasil";

// mengambil data 
// $krs = mysqli_query($koneksi, "SELECT * FROM krs");

$matkul = queryMatkul("SELECT * FROM krs");

//ambil data (fetch) matkul dari oject result 
// mysqli_fetch_row -> mengembalikan array numerik
// mysqli_fetch_assoc -> menembalikan array asosiativ
// mysqli_fetch_array -> menembalikan array menjadi array
// mysqli_fetch_object -> menembalikan array menjadi object

?>
        <?php
        include'../template/header.php';
        include'../template/sidebar.php';
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php
                include'../template/navbar.php';
                ?>
                <!-- End of Topbar -->
                <div class="container m-3">
                <a href="/TUGAS_PEMROGRAMAN"><i class="fa fa-home"></i> Home</a> /<b>KRS</b>
                    <center><b> <h3 style="font-weight: bold">DATA KRS</h3></b></center>
                    <a href="#create.php" class="btn btn-primary mb-4">Add <i class="fa fa-plus"></i></a>
                    <!-- tempat tabel -->
                    <table class="table table-striped table-responsiv">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KDMK</th>
                                <th scope="col">MATKUL</th>
                                <th scope="col">SKS</th>
                                <!-- <th scope="col">GAMBAR</th> -->
                                <th scope="col">ACTION</th>
                            </tr>
                            <?php $no=1;  foreach ($matkul as $row) {?>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $no++;?></td>
                                <td>
                                    <a href="show.php?id=<?= $row["kdmk"]; ?>">
                                        <?= $row["kdmk"];?>
                                    </a>
                                </td>
                                <td><?= $row["makul"];?></td>
                                <td><?= $row["sks"];?></td>
                                <td class="gap-4">
                                    <a class="text-primary mr-3" href="edit.php?id=<?= $row["kdmk"]; ?>"><i class="fa fa-edit"></i></a>|
                                    <a onclick="return confirm('Apakah Yakin Ingin Hapus Data?')" class="text-danger ml-3" href="delete.php?id=<?= $row["kdmk"]; ?>"><i class="fa fa-trash"></i></a>
                                </td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- /.container-fluid -->
                </div>
                <div class="d-flex justify-content-center">
                <img src="../gambar/sleep-sleeping.gif" alt="">

                </div>
            </div>
            <!-- End of Main Content -->

         <?php
         include '../template/footer.php'
         ?>