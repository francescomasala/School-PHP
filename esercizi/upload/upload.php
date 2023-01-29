<?php
try {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            ?>
            <?php include 'head.php'; ?>
            <div class="container-fluid">
                <center>
                    <hgroup>
                        <h2>Complimenti, sai caricare un immagine</h2>
                        <p>Yay!</p>
                    </hgroup>
                </center>
            </div>
            <?php
            $uploadOk = 1;
        } else {
            throw new Exception("");
            $uploadOk = 0;
        }
    }
    } catch
(Exception $e) {
    ?>
    <?php include 'head.php'; ?>
    <div class="container-fluid">
        <center>
            <hgroup>
                <h2>Scusa ma il file che hai caricato non era un immagine</h2>
                <p>La prossima volta caricane una, please 🥺</p>
            </hgroup>
        </center>
    </div>
    <?php

}
?>
