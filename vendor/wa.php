<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper -->

<style>
    .black {
        background-color: black;
    }
</style>
<div id="content-wrapper" class="d-flex flex-column black">
    <!-- Main Content -->
    <div id="content bg-white rounded">
        <!-- Topbar -->
        <?php
        include 'template/navbar.php';
        ?>
        <!-- End of Topbar -->
        <div class="container m-3 ">
            <a href="/tugas/"><i class="fa fa-home"></i><b class="text-primary"></a> HOME</b>
            <a href="/tugas/index2.php"><b class="text-danger"><i class="fa fa-backward"></i> </b></a>



            <center>
                <b>
                    <h2 id="demo"></h2>
                </b>
            </center>


            <!--=================== script inputan nama ======================================= -->
            <!-- <script>
            let person = prompt("Nama Anda : ", "");
            if (person != null) {
                document.getElementById("demo").innerHTML =
                    "Hello " + person + "🙌 mau tanaya apa ?";
                "demo".style.textTransform = "uppercase"
            }
            </script> -->

            <!--=================== script joged" ======================================= -->
            <div class="d-flex justify-content-center p-3 gap">
                <a class="btn  mb-4 ">
                    <div class="image d-grid">
                        <!-- <img src="gambar/Gambar Gif - Download Animasi Bergerak Gratis - JAGAD ID.gif" class="img" width="150" alt="gambar"> -->
                        <br>
                        <!-- <b id="input4"></b> -->
                    </div>
                </a>
                <a class="btn  mb-4 ">
                    <div class="image d-grid">
                        <!-- <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar"> -->
                        <br>
                        <!-- <b id="input5"></b> -->
                    </div>
                </a>


                <!--=================== script wa" ======================================= -->
                <div class="card-wa bg-secondar shadow">
                    <div class="header bg-secondar">
                        <p id="demo" class="p-2 text-white">
                            <!--========== poto profile wa" ======================================= -->
                            <span class="d-flex w-full align-items-center">
                                <img src="gambar/Screenshot 2024-06-16 072048.png" class="pp" width="40" alt="">
                                <b class="pl-2 pr-5 d-flex justify-content-center">kak zhyyy </b>
                                <a pl-5 text-white"><i class="fa fa-phone text-center pr-2"></i>
                                    <!-- <i class="fa fa-video text-center"></i></a> -->
                            </span>
                        </p>
                    </div>
                    <div class="chat">

                        <p class="text-left">coba ketik zaini, kangen <small>01:00</small><span class="text-primary"><time datetime="22:00"></time></span></p>
                        <p class="text-right">jgn galau deeck <span class="text-primary"><small>01:00</small>✓✓</span>
                        </p>

                        <!--=================== musiik joged" ======================================= -->
                        <div class="pn">
                            <audio class="text-right" controls="true" loop="true" autoplay="true">
                                <source src="audio/river flows in you _ kalimba .mp3" type="audio/mpeg">
                                Browsermu tidak mendukung tag audio, upgrade donk!
                            </audio>
                            <span class="text-primary">
                                <p><small>01:00</small>✓✓</p>
                            </span>
                        </div>

                        <center>
                            <dialog id="">
                                <b>
                                    <!-- text di atas -->
                                    <!-- <h2 id="demo"><marquee behavior="" direction="">coba ketik : zaini , 1 , dinda ,selpi nuri, </marquee></h2> -->
                                    <div class="">
                                        <h2 class="" id="text-modal"></h2>
                                </b>
                    </div>
                    <button id="close" autofocudialogs class="btn btn-primary">Close</button>
                    </dialog>
                    <button id="open" autofocus hidden></button>
                    </center>
                    <style>
                        dialog {
                            /* background-color: ; */
                            border: none;
                            border-radius: 12px;
                            box-shadow: #ececec 1 12px 0px 1px;
                            padding: 40px;
                        }

                        #close {
                            margin-top: 10px;
                        }
                    </style>

                    <p class="text-left">Oke 😭<span class="text-primary"><small>01:00</small></span></p>
                    <p id="inputt" class="text-right">
                        <b id="input1"> </b> kak 😭<span class="text-primary"><small> 01:00</small>✓✓</span>
                    <p class="text-left">kakak mu lagi gabut😭<span class="text-primary"><small>01:00</small></span>
                    <p class="text-left">spa yg sring kamu pikirin? <span class="text-primary"><small>01:00</small></span>
                    <p class="text-left"><span id="input2"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input3"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input4"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input5"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input6"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input7"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input8"></span> <span class="text-primary"><small></small></span></p>
                    <p class="text-left"><span id="input9"></span> <span class="text-primary"><small></small></span></p>
                    </p>

                    <div class="form d-flex gap">
                        <input id="chat" type="text" class="form-control bg-secondaryy text-white p-2" placeholder="😊 Ketik pesan" value="">
                        <button type="button" class="btn btn-success btn-sm px--2" id="myBtn" onclick="myFunction()"><i class="fa fa-play"></i></button>
                    </div>


                    <!-- <br> -->
                    <!-- <p>Coba kentik kangeenn</p> -->



                    <!-- <p id="chat"></p> -->

                    <script>
                        // fungsi untuk klik tombol
                       
                        let input = document.getElementById("chat")
                        input.addEventListener("keypress", function(event) {
                            if (event.key === "Enter") {
                                event.preventDefault();
                                document.getElementById("myBtn").click();
                            }
                        });

                        dialog = document.querySelector('dialog');
                        showButton = document.querySelector('dialog + button')
                        closebtn = document.getElementById('close')

                        closebtn.addEventListener('click', () => {
                            dialog.close()
                        })
                        modal = () => {

                            document.getElementById("open").click();
                            showButton.addEventListener('click', () => {
                                dialog.showModal()
                            })
                        }

                        // fungsi DOM mengubah text
                        function myFunction() {




                            // Get the value of the input field with id="chat"
                            let x = document.getElementById("chat").value;
                            let y = document.createElement("p");
                            // If x is Not a Number or less than one or greater than 10
                            let text;

                            a = "kangen";
                            b = "zaini"
                            c = "nuri";
                            d = "selpi";
                            e = "cinta"
                            f = "selpi"

                            if (x == d || x == b || x == c) {
                                // document.getElementById("bls").innerHTML = text;
                                // document.getElementById("input1").innerHTML = text;
                                text = "Lovyuu 🤣";
                                text2 = "anjaaay 😂";
                                text3 = "bungung"
                                text4 = "ayoolooo"
                                text5 = "mau ngapain"
                                nambah = document.createElement("p");
                                nambah.innerHtml == text3;
                                document.body.appendChild(y);
                                document.getElementById("input1").innerHTML = text3;
                                document.getElementById("input2").innerHTML = text;
                                document.getElementById("input3").innerHTML = text;
                                document.getElementById("input4").innerHTML = text2;
                                document.getElementById("input5").innerHTML = text3;
                                document.getElementById("input6").innerHTML = text4;
                                document.getElementById("input7").innerHTML = text5;
                                document.getElementById("input8").innerHTML = text2;
                                document.getElementById("input9").innerHTML = text2;

                            }else if( x == "kangenn"){
                                window.location.assign("index.php")
                            }
                            
                            else if (x == "r") {
                                document.location.reload(true)

                            } else if (x == e) {
                                a = "Baik "
                                document.getElementById("input4").innerHTML = a;
                                document.getElementById("input6").innerHTML = a;
                            } else if (x == a || x == e) {
                                document.getElementById("input3").innerHTML = "samaa <small>01:00</small>";
                            } else if (x == a) {
                                text = "tidak boleh";
                                document.getElementById("input2").innerHTML = text;
                                document.getElementById("input4").innerHTML = "gaboleh random ";
                                document.getElementById("input5").innerHTML = "coba ketik 1 ";
                                document.getElementById("input6").innerHTML = "coba ketik zhy ";
                                document.getElementById("input7").innerHTML = "gaboleh random ";
                            } else {

                                modal();
                                document.getElementById("text-modal").innerHTML = "yg bner napa ngetik !!";
                                document.getElementById("input2").innerHTML = "yg bner napa ngetik ";
                                document.getElementById("input4").innerHTML = " ";
                                document.getElementById("input5").innerHTML = " ";
                                document.getElementById("input6").innerHTML = " ";
                                document.getElementById("input8").innerHTML = " ";
                                document.getElementById("input9").innerHTML = " ";
                                document.getElementById("input7").innerHTML = " ";
                                document.getElementById("input3").innerHTML = " ";
                                document.getElementById("input1").innerHTML = " ";
                                // document.location.reload(true)
                                document.getElementById("input10").innerHTML = " ngetik nya yg bneer ";
                                alert('gaboleh random')
                            }


                        }
                    </script>
                </div>
                <div class="menu d-flex justify-content-around p-2 bg-secondaryy">
                    <button type="button" value="" class="btn btn-outline-secondary" onClick="document.location.reload(true)"><i class="fa-solid fa-rotate-right"></i></button>
                    <a href="index.php" class="btn btn-outline-secondary"><i class="fa fa-home"></i></a>
                    <a href="index2.php" class="btn btn-outline-secondary"><i class="fa fa-left-long"></i></a>
                </div>
            </div>


            <a class="btn  mb-4 ">
                <div class="image d-grid">
                    <!-- <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar"> -->
                    <br>
                    <b id="input6"></b>
                </div>
            </a>
            <a class="btn  mb-4 ">
                <div class="image d-grid">
                    <!-- <img src="gambar/Gambar Gif - Download Animasi Bergerak Gratis - JAGAD ID.gif" class="img" width="150" alt="gambar"> -->
                    <br>
                    <b id="input7"></b>
                </div>
            </a>
        </div>

        <!--=================== gambar paling bawah ======================================= -->
        <div class="d-flex justify-content-between">
            <img src="gambar/kipas.gif" class="img" width="150" alt="gambar">
            <!-- <div class="audio bg-secondar">
                    <p>minta lagu galau dong 🎶<span class="text-primary">✓✓</span></p>
                    <audio class="text-right" controls="true" loop="true" autoplay="true">
                        <source src="template/ssstik.io_1717341974299.mp3" type="audio/mpeg">
                        Browsermu tidak mendukung tag audio, upgrade donk!
                    </audio>
                    <p class="text-right">jgn galau deeck 😭<span class="text-primary">✓✓</span></p>
                    <p class="text-left">Oke 😭<span class="text-primary">✓✓</span></p>
                </div> -->
            <script>

            </script>
            <img src="gambar/ngoding.gif" class="img" width="150" alt="gambar">
        </div>

    </div>
    <!-- End of Main Content -->

    <?php
    include 'template/footer.php'
    ?>



    <!-- css untuk ngerubah tampilan index2 -->
    <style>
        .pp {
            border-radius: 50%;
        }

        .tlpn {
            text-align: end;
            margin-left: 200px;
        }

        small {
            font-size: 10px;
            color: grey;
        }


        .chat {
            padding: 10px;
        }

        .pn {
            display: flex;
            justify-content: end;
            align-items: end;
        }

        .header {
            border-radius: 5px 5px 0px 0px;
            background-color: #303832;
        }

        .bg-secondaryy {
            background-color: #303832;
            color: white;
            padding-left: 14px;
        }

        .bg-secondaryy:focus {
            background-color: #303832;
            color: white;
        }

        .card-wa {
            width: 700px;
            border-radius: 10px;
        }

        audio {
            width: 200px;
        }

        p {
            font: 1em sans-serif;
            font-size: 13px;
        }

        img {
            border-radius: 8px;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .gap {
            gap: 6px;
        }
    </style>