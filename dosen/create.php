<?php 
//Menmanggil file confing
require '../config/dosen.php';
// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi tambah yang sdh dibuat di config.php
	if(tambahDosen($_POST) > 0){
		echo "
			<script>
				alert('Data berhasil di simpan');
				document.location.href= 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal di simpan');
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
            <h1>Form Tambah Dosen</h1>
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nidn">NIDN</label>
                        <input type="text" class="form-control" name="nidn" placeholder="NIDN">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                </div>

                <div class="form-row mt-4">
                    <div class="form-group col-md-8">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-danger">balik</a>
            </form>
        </div>


    </div>
    <?php
        include'../template/footer.php';
        ?>