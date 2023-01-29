<?php include 'head.php'; ?>
<div class="container-fluid">
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
<div class="container-fluid">
    <center>
        <hgroup>
            <h2><?= $Titolo ?></h2>
            <h3>Sei felice di aver ritrovato il tuo titolo?</h3>
        </hgroup>
    </center>
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
        <div class="container-fluid">
            <center>
                <hgroup>
                    <h2>Creazione tabella tramite FORM</h2>
                    <h3>E tramite delle ✨ bellissime ✨ richieste POST</h3>
                </hgroup>
            </center>
            <form action="/esercizi/tabella/autoTable.php"
                  enctype="application/x-www-form-urlencoded"
                  method="POST">
                <div class="grid">
                    <label for="col">
                        Inserisci il numero delle colonne da generare
                        <input type="number" class="form-control"
                               id="col" name="col" placeholder="Colonne da generare">
                    </label>
                    <label for="col">
                        Inserisci il numero delle righe da generare
                        <input type="number" class="form-control"
                               id="row" name="row" placeholder="Righe da generare">
                    </label>
                </div>
                <label for="name">
                    Inserisci il titolo della tabella
                    <input type="text" class="form-control"
                           id="name" name="name" placeholder="Titolo della tabella">
                </label>
                <button type="submit" class="btn btn-primary">Conferma</button>
            </form>
        </div>
        <?php
    }
    ?>

</div>
<?php include 'footer.php'; ?>
