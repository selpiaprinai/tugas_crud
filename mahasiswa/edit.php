<?php 
//Menmanggil file confing
require '../config/mahasiswa.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id_mhs = $id")[0];

// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi ubah yang sdh dibuat di config.php
	if( editMahasiswa($_POST) > 0){
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href= 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal di ubah');
				document.location.href= 'index.php';
			</script>
		";
	}
}

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
            <h1>Form edit Mahasiswa</h1>
            <form method="POST">
                <div class="form-row">
                    <input type="hidden" name="id" value="<?= $mhs["id_mhs"]; ?>">



                    <div class="form-group col-md-6">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" name="nim" value="<?= $mhs["nim"]; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $mhs["nama"]; ?>">
                    </div>
                </div>

                <div class="form-row mt-4">
                    <div class="form-group col-md-6">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" value="<?= $mhs["email"]; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option><?= $mhs["jurusan"]; ?></option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar">
                    </div>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-danger">Balik</a>
            </form>
        </div>


    </div>
    <?php
        include'../template/footer.php';
        ?>