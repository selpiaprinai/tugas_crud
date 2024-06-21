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
            <a href="/tugas/"><i class="fa fa-home"></i><b class="text-primary"> HOME</b></a>



            <center>
                <dialog id="dialog">
                    <b>
                        <!-- text di atas -->
                        <!-- <h2 id="demo"><marquee behavior="" direction="">coba ketik : zaini , 1 , dinda ,selpi nuri, </marquee></h2> -->
                        <div class="">
                            <h2 class="" id="heading"></h2>
                    </b>
        </div>
        <button id="close" autofocus class="btn btn-primary">Close</button>
        </dialog>
        <button id="show" autofocus hidden></button>
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






        <!--=================== script joged" ======================================= -->
        <div class="d-flex justify-content-center p-3 gap">
            <a onclick="reload()" class="btn  mb-4 ">
                <div class="image d-grid">
                    <img src="gambar/makan.gif" class="img" width="120" alt="gambar">
                    <br>
                    <b id="input1">Bombom</b>
                </div>
            </a>
            <a href="index1.php" class="btn  mb-4 ">
                <div class="image d-grid">
                    <img src="gambar/Gambar Gif - Download Animasi Bergerak Gratis - JAGAD ID.gif" class="img" width="150" alt="gambar">
                    <br>
                    <b id="input2">Fikri</b>
                </div>
            </a>

            <a href="wa.php" id="next" class="btn  mb-4 ">
                <div class="image d-grid">
                    <img src="gambar/ngantuk.gif" class="img" width="120" alt="gambar">
                    <br>
                    <b id="input2">zaini</b>
                </div>
            </a>

            <a class="btn  mb-4 ">
                <div class="image d-grid">
                    <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar">
                    <br>
                    <b id="input3">pala</b>
                </div>
            </a>
            <a class="btn  mb-4 ">
                <div class="image d-grid">
                    <img src="gambar/bocil.gif" class="img" width="170" alt="gambar">
                    <br>
                    <b id="input4">firman</b>
                </div>
            </a>
        </div>


       


        <style>
            .btn-chat {
                background-color: grey;
                color: white;
                border-radius: 0 12px 12px 12px;
            }

            .btn-chat:hover {
                background-color: grey;
                color: white;
                border-radius: 0 12px 12px 12px;
            }
        </style>
        <b class="pl-2 btn btn-chat" id="notipe">coba ketik di bawah !!</b><br>
        <b class="pl-2 btn" id="value1"></b><b class="text-primary " style="font-size: 20px;" id="value"> </b><b id="sambungan"></b>

        <div class="pn">
            <audio class="text-right" controls="true" loop="true" autoplay="true">
                <source src="audio/ssstik.io_1717341974299.mp3" type="audio/mpeg">
                Browsermu tidak mendukung tag audio, upgrade donk!
            </audio>
            <span class="text-primary">
                <p><small>01:00</small>✓✓</p>
            </span>
        </div>

        <!-- from input -->

        <div class="form d-flex col-8 justify-content-center gap">
            <label for=""><b>Nama:</b> </label><br>
            <input id="chat" type="text" class="form-control bg-secondaryy text-white p-2" placeholder="😊 Ketik pesan" value="">
            <button type="button" class="btn btn-success btn-sm px--2" id="myBtn" onclick="myFunction()"><i class="fa fa-play"></i></button>
        </div>

        <!--=================== script inputan nama ======================================= -->
        <script>
            // dialog
            dialog = document.querySelector('dialog');
            showButton = document.querySelector('dialog + button')
            closebtn = document.getElementById('close')

            showButton.addEventListener('click', () => {
                dialog.showModal()
            })

            closebtn.addEventListener('click', () => {
                dialog.close()
            })



            let input = document.getElementById("chat")
            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("myBtn").click();
                    // document.getElementById("show").click();

                }
            });

            function reload() {
                // document.getElementById("myBtn").click();
                confirm('halaman ini akan di reload? ')
                document.location.reload();
            }


            // promp tambah 
            // let person = aler("Nama Anda : ", "");
            if (x != null) {
                document.getElementById("demo").innerHTML =
                    "Hello " + person + "🙌 Coba Ketik Pesan anda di bawah ";
                "demo".style.textTransform = "uppercase"
            }

            // ketika di klik

            // cungsi rubah text
            function myFunction() {
                dialog = document.querySelector('dialog');
                showButton = document.querySelector('dialog + button')
                closebtn = document.getElementById('close')


                modal = () => {

                    document.getElementById("show").click();
                    showButton.addEventListener('click', () => {
                        dialog.showModal()
                    })
                }

                // Get the value of the input field with id="chat"
                let x = document.getElementById("chat").value;
                let y = document.createElement("p");
                // If x is Not a Number or less than one or greater than 10
                let text;

                a = "kangen";
                b = "zaini"
                c = "nuri";
                d = "dinda";
                e = "riska"
                f = "selpi"
                g = "zhy"
                h = "zhyy"
                i = "cinta"
                j = "nuri dinda lestari"
                k = "bombom"
                l = "atur"

                if (x == a || x == b || x == c || x == d || x == e || x == f || x == g || x == h || x == i) {
                    // document.getElementById("bls").innerHTML = text;
                    // document.getElementById("input1").innerHTML = text;
                    text = "Lovyuu 😍";
                    text2 = "Lovyuu 😂";
                    text3 = "Lovyuuuuu"
                    nambah = document.createElement("p");
                    nambah.innerHtml == text3;
                    document.body.appendChild(y);

                    modal();
                    document.getElementById("heading").innerHTML = x + '  ' + text3;


                } else if (x == j || x == "nuri" || x == "nuri dinda") {

                    text3 = "Lovyuuuuu"
                    modal();
                    document.getElementById("heading").innerHTML = x + '  ' + text3;
                    document.getElementById("heading").innerHTML = x + ' jlekk otak batu 😂🩻';
                } else if (x == "r") {
                    document.location.reload(true)

                } else if (x == e) {
                    a = "Baik "
                    document.getElementById("input4").innerHTML = a;
                    document.getElementById("input6").innerHTML = a;
                } else if (x == a || x == e) {
                    document.getElementById("input3").innerHTML = "samaa <small>01:00</small>";

                } else if (x == "" || x == "atur") {
                    text = "tidak boleh";
                    document.getElementById("heading").innerHTML = "";

                } else if (x == 1 || x == "chat") {

                    document.getElementById("next").click();

                } else {
                    // document.getElementById("demo2").innerHTML = "gaboleh random ";
                    // document.location.reload(true)
                    // alert('Keywoard Tidak terdaftar')
                    document.getElementById('value1').innerHTML = "helloo ";
                    value = document.getElementById('value').innerHTML = x;
                    document.getElementById('sambungan').innerHTML = " nama mu gaa ada di dafatr broo !! ";
                    document.getElementById('notipe').innerHTML = "";
                    value.style.color = "blue";
                }


            }
        </script>

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
            align-items: center;
        }
    </style>