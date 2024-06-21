<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php
        include 'template/navbar.php';
        ?>
        <!-- End of Topbar -->
        <div class="container m-3">
            <a href="/tugas"><i class="fa fa-home"></i></a> <b class="text-primary">HOME</b>


            <div class="d-flex justify-content-center p-3 gap">



                <a href="index2.php" id="demo" class="btn shadow mb-4 ">
                    <div class="image d-grid">
                        <img src="gambar/regalo.gif" class="img" width="300" alt="gambar">
                        <br>
                        <button class="btn btn-primary mt-8">Claim</button>
                    </div>
                </a>
            </div>
            <style>
                .mt-8 {
                    position: relative;
                    margin-bottom: 20px;
                }

                .ngantuk {
                    margin-top: -120px;
                }

                .audio {
                    margin-top: 120px;
                }
            </style>
            <div class="d-flex justify-content-between ngantuk">
                <img src="gambar/11.gif" class="img" width="150" alt="gambar">
                <div class="audio">
                    <audio controls="true" loop="true" >
                        <source src="audio/kalimba.mp3" type="audio/mpeg">
                        Browsermu tidak mendukung tag audio, upgrade donk!
                    </audio>
                </div>
                <script>

                </script>
                <img src="gambar/sleep-sleeping.gif" class="img" width="180" alt="gambar">

            </div>
            <style>
                center{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            </style>
            <center>
                <h3 >welcome <p> </p> <h3 id="name"> </h3></h3>
            </center>
        </div>

        <div class="dialog">
            <dialog id="dialog" open>
                
            </dialog>
            
        </div>
        <!-- End of Main Content -->
         <script>
           
         </script>

        <?php
        include 'template/footer.php'
        ?>

        <style>
            img {
                border-radius: 8px;
                margin-top: 8px;
                margin-bottom: 8px;
            }

            .gap {
                gap: 2em;
            }
        </style>