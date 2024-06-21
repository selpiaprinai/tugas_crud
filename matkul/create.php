<?php 
//Menmanggil file confing
require '../config/matkul.php';
// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi tambah yang sdh dibuat di config.php
	if(tambahMatkul($_POST) > 0){
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
        <div class="form box m-5 ">
            <h1>Form Tambah MATKUL</h1>
            <form method="POST" class="justify-content mt-6">


                <div class="">
                    <div class="form-group col-md-12">
                        <label for="makul">MATKUL</label>
                        <input type="text" class="form-control" name="makul" placeholder="makul">
                    </div>
                </div>

                <div class="d-flex">
                    <div class=" col-md-6">
                        <label for="kdmk">KDMK</label>
                        <input type="text" class="form-control" name="kdmk" placeholder="kdmk">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sks">SKS</label>
                        <input type="number" class="form-control" name="sks" placeholder="kdmk">
                    </div>
                </div>

                <div class="box me-8">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-danger">balik</a>
                </div>


            </form>
        </div>
        <style>
        .gap {
            gap: 2em;
        }
        </style>

    </div>
    <?php
        include'../template/footer.php';
    ?>