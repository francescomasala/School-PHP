<?php
include 'head.php';
try {
    $to = $_REQUEST['email'];
    $subject = $_REQUEST['object'];
    $message = $_REQUEST['body'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

} catch (Exception $e){
    ?>
    <body>
    <main>
        <div class="container-fluid">
            <hgroup>
                <h1>Test E-Mail PHP</h1>
                <h2>Per fortuna che ho un mail server selfhostato</h2>
            </hgroup>
        </div>
        <div class="container-fluid">
            <center>
                <form>
                    <label for="email">
                        Email Rivecente
                        <input type="text" id="email" name="email" placeholder="<?= $_REQUEST['email'] ?>" required>
                    </label>
                    <div class="grid">
                        <label for="object">
                            Oggetto Email
                            <input type="text" id="object" name="object" placeholder="<?= $_REQUEST['object'] ?>" required>
                        </label>
                        <label for="body">
                            Testo Email
                            <input type="text" id="object" name="object" placeholder="<?= $_REQUEST['body'] ?>" required>
                        </label>
                    </div>
                    <button aria-busy="true"></button>
                </form>
            </center>
        </div>
    </main>
    </body>
    </html>
<?php

}
?>
