<?php include 'head.php'; ?>
<div class="container-fluid">
    <?php
    $Titolo = 'prova';
    $Righe = 10;
    $Colonne = 10;
    ?>
    <table>
        <thead>
        <center>
            <hgroup>
                <h2>Tabella 10 * 10</h2>
                <h3>Se sei curioso prova anche <a href="/esercizi/tabella/autoTable.php">questo</a></h3>
            </hgroup>
        </center>
        </thead>
        <?php
        for ($i = 0; $i < $Righe; $i++) {
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
</div>
<?php include 'footer.php'; ?>