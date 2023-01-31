<?php include 'head.php'; ?>

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
        <form method="post" action="sendEmail.php">
            <label for="email">
                Email Rivecente
                <input type="text" id="email" name="email" placeholder="areapenale.dgsia@giustizia.it" required>
            </label>
            <div class="grid">
                <label for="object">
                    Oggetto Email
                    <input type="text" id="object" name="object" placeholder="Bossetti è innocente" required>
                </label>
                <label for="body">
                    Testo Email
                    <input type="text" id="body" name="body" placeholder="Caro Ministro, volevo comunicarle che..." required>
                </label>
            </div>
            <button type="submit">Invia</button>
        </form>
    </center>
    </div>
</main>
</body>
</html>