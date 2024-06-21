<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php include 'template/navbar.php';  ?>
        <!-- End of Topbar -->
        <div class="container m-3">
            <a href="/tugas"><i class="fa fa-home"></i></a> <b class="text-primary">HTML MODERN</b>




            <div class="dialog" id="dialog">
                <dialog open>
                    <div class="from">
                    <p>This modal dialog has a groovy backdrop!</p>
                    <label for="">nama</label>
                    <input type="text">
                    <button autofocus>Close</button>
                    </div>
                </dialog>
                <button>Show the dialog</button>
            </div>


            <style>
                button{
                    border-radius: 11px;
                    border: none;
                    background-color: blue;
                    color: white;
                    outline: 1 wheat;
                }
                dialog{
                    background-color: white;
                    width: 100vh;
                    border-radius: 12px;
                    border: none;
                    box-shadow: grey 1px 2px 14px 2px;
                }
            </style>

            <script>
                const dialog = document.querySelector("dialog");
                const showButton = document.querySelector("dialog + button");
                const closeButton = document.querySelector("dialog button");

                // "Show the dialog" button opens the dialog modally
                showButton.addEventListener("click", () => {
                    dialog.showModal();
                });

                // "Close" button closes the dialog
                closeButton.addEventListener("click", () => {
                    dialog.close();
                });
            </script>


        </div>
        <!-- End of Main Content -->

        <?php
        include 'template/footer.php'
        ?>