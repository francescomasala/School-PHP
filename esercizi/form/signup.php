<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/css/bootstrap-italia.min.css"
	      integrity="sha256-OAlsfaN58WYNlpH0uSz3xuJ8vrujFxoIlIFr8rySXqc=" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/js/bootstrap-italia.min.js"></script>
</head>
<body>
<script>
    window.__PUBLIC_PATH__ = 'https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/fonts'
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/js/bootstrap-italia.bundle.min.js"
        crossorigin="anonymous"></script>

<div id="navbar-snippet"></div>


<!-- CONTENUTI -->
<div class="container">
	<div class="row mt-5 text-center">
		<div class="col-12">
			<h3>Effettua la registrazione per continuare.</h3>
		</div>
	</div>
	<div class="row text-center mt-5 col-auto">
		<div class="row-card text-center">
			<div class="text-center">
				<h4 class="card-title text-center">Registrazione</h4>
				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$Email = htmlspecialchars($_REQUEST['email']);
						$Password = htmlspecialchars($_REQUEST['password']);
					} else {
						$Email = '';
						$Password = '';
					}
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						?>
						<h2 class="text text-center">Grazie per esserti registrato!</h2>
						<h3 class="text text-center">DEBUG: Le credenziali sono.</h3>
						<form action="/esercizi/form/login.php" enctype="application/x-www-form-urlencoded"
						      method="POST">
							<input type="email" placeholder="<?php echo $Email?>" name="email" disabled>
							<input type="password" placeholder="<?php echo $Password?>" name="password" disabled>
						</form>
						<?php
					} else {
						?>
						<h3 class="text text-center">Inserisci le tue
							credenziali.</h3>
						<form action="/esercizi/form/login.php" enctype="application/x-www-form-urlencoded"
						      method="POST">
							<input type="email" placeholder="Email" name="email" required
							       pattern="/[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm">
							<input type="password" placeholder="Password" name="email"
							       pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])[A-Za-z\d$@$!%*?&_]{8,12}$/">
							<button type="submit" class="form-control btn btn-primary mt-3">Registrati</button>
						</form>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
