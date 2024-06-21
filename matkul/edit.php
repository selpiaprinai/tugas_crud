
<?php 
//Menmanggil file confing
require '../config/matkul.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$matkul = queryMatkul("SELECT * FROM makul WHERE id_mk = $id")[0];

// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi ubah yang sdh dibuat di config.php
	if( editMatkul($_POST) > 0){
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
              <h1>Form edit Mata kuliah</h1>
          <form method="POST">
                <div class="form-row">
                <input type="hidden" name="id" value="<?= $matkul["id_mk"]; ?>">
                    

                <div class="">
                    <div class="form-group col-md-12">
                        <label for="makul">MATKUL</label>
                        <input type="text" class="form-control" name="makul" value="<?= $matkul["makul"]; ?>">
                    </div>
                </div>

                <div class="d-flex">
                    <div class=" col-md-6">
                        <label for="kdmk">KDMK</label>
                        <input type="text" class="form-control" name="kdmk" value="<?= $matkul["kdmk"]; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sks">SKS</label>
                        <input type="number" class="form-control" name="sks" value="<?= $matkul["sks"]; ?>">
                    </div>
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