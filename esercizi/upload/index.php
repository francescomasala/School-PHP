<?php include 'head.php'; ?>

<body>
<main class="container">
    <h1> CSS Stylesheet iniettato tramite il file head.php</h1>
    <div class="grid">
        <div>
            <form action="CheckPhotoUpload.php" method="post" enctype="multipart/form-data">
                Carica un file JPG, JPEG, PNG o GIF:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
        </div>
    </div>
</main>
</body>
</html>
