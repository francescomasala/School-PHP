<?php
include 'head.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = htmlspecialchars($_REQUEST['email']);
    $Password = htmlspecialchars($_REQUEST['password']);
} else {
    $Email = '';
    $Password = '';
}
?>
<div class="container-fluid">
    <center>
        <hgroup>
            <h2>Effettua il log-in per continuare.</h2>
            <p>Form di accesso</p>
        </hgroup>
    </center>
</div>
<div class="container-fluid">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <h2 class="text text-center">Grazie per esserti loggato!</h2>
        <h3 class="text text-center">DEBUG: Le credenziali sono.</h3>
        <form action="/esercizi/form/login.php" enctype="application/x-www-form-urlencoded"
              method="POST">
            <input type="email" placeholder="<?php echo $Email ?>" name="email" aria-invalid="false">
            <input type="password" placeholder="<?php echo $Password ?>" name="password" aria-invalid="false">
        </form>
        <?php
    } else {
        ?>
        <h3 class="text text-center">Se hai già effettuato la registrazione in precedenza, inserisci le tue
            credenziali.</h3>
        <form action="/esercizi/form/login.php" enctype="application/x-www-form-urlencoded" method="POST">
            <label for="email">Indirizzo email</label>
            <input type="email" placeholder="Email" name="email" id="email"
                   pattern="/[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password"
                   pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])[A-Za-z\d$@$!%*?&_]{8,12}$/">
            <button type="submit">Accedi</button>
        </form>
    <?php } ?>
</div>
<?php include 'footer.php'; ?>
