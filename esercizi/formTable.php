<!DOCTYPE html>
<html lang="it-IT">

<head>

    <!-- RIFERIMENTI GENERICI -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Creazione tabella con POST</title>

    <!-- RIFERIMENTI BOOTSTRAP ITALIA 2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/css/bootstrap-italia.min.css"
          integrity="sha256-OAlsfaN58WYNlpH0uSz3xuJ8vrujFxoIlIFr8rySXqc=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.0.4/dist/js/bootstrap-italia.bundle.min.js"></script>


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
<header class="it-header-wrapper">

    <style>
        table, tr, td {
            border: 2.5px solid #0066CC;
        }

        td {
            padding: 5px;
        }
    </style>
    <!-- SNIPPET NAVBAR -->

    <div class="it-header-center-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-center-content-wrapper">
                        <div class="it-brand-wrapper">
                            <a href="/">
                                <div class="it-brand-text">
                                    <div class="it-brand-title">Esercizi PHP Masala</div>
                                    <div class="it-brand-tagline d-md-block">Sito web in php per il quinto anno</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center" style="margin: 30px">
            <div class="col-auto">
                <div class="card-wrapper card-space">
                    <div class="card card-bg shadow ">
                        <div class="card-body">
							<?php
								
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									$Righe = htmlspecialchars($_REQUEST['row']);
									$Colonne = htmlspecialchars($_REQUEST['col']);
									$Titolo = htmlspecialchars($_REQUEST['name']);
								} else {
									$Titolo = 'Test';
									$Righe = 5;
									$Colonne = 5;
								}
							?>
							<?php
								/*
								$Titolo = 'prova';
								$Righe = 10;
								$Colonne = 10;
	
								echo('<h1> $Titolo </h1>');
								echo('<table>');
								for ($i = 0; $i < $Righe; $i++) {
									echo('<tr>');
									for ($x = 0; $x <= $Colonne; $x++) {
										echo("<td>$i,$x</td>");
									}
									echo("</tr>");
								}
								echo("</table>");
								/*
								-------------
								|1,1|1,2|1,3|
								-------------
								*/
							?>
                        </div>
						<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
						?>
                        <div class="card-body col-auto justify-content-center">
                            <h4 class="card-title text-center"><?= $Titolo ?></h4>
                            <table>
								<?php
									for ($i = 0; $i <= $Righe; $i++) {
										?>
                                        <tr>
											<?php
												for ($x = 0; $x <= $Colonne; $x++) {
													?>
                                                    <td>
														<?= $i . ',' . $x ?>
                                                    </td>
													<?php
												}
											?>
                                        </tr>
										<?php
									}
								?>
                            </table>
							<?php
								} else {
								?>
                                <div class="card-body col-auto justify-content-center">
                                    <h4 class="card-title text-center">Creazione tabella con POST</h4>
                                    <br>
                                    <form action="/esercizi/formTable.php" enctype="application/x-www-form-urlencoded"
                                          method="POST">
                                        <div class="col-auto">
                                            <div class="form-group col">
                                                <input type="text" class="form-control"
                                                       id="name" name="name" placeholder="Titolo della tabella">
                                                <br>
                                                <input type="number" class="form-control"
                                                       id="col" name="col" placeholder="Colonne da generare">
                                                <br>
                                                <input type="number" class="form-control"
                                                       id="row" name="row" placeholder="Righe da generare">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Conferma</button>
                                            </div>
                                    </form>
                                </div>
								<?php
							}
							?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
