<?php
include 'head.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weatherStation = htmlspecialchars($_REQUEST['weatherStation']);
    $terms = htmlspecialchars($_REQUEST['terms']);

    $curl = curl_init();

    curl_setopt_array($curl, [CURLOPT_URL => "https://meteostat.p.rapidapi.com/stations/daily?station=$weatherStation&start=2023-02-13&end=2023-02-13&model=true&freq=B", CURLOPT_RETURNTRANSFER => true, CURLOPT_FOLLOWLOCATION => true, CURLOPT_ENCODING => "", CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => ["X-RapidAPI-Host: meteostat.p.rapidapi.com", "X-RapidAPI-Key: "],]);

    $response = curl_exec($curl);
    $err = curl_error($curl);


    curl_close($curl);

    if ($err) {
        ?>
        <div class="container">
            <center>
                <hgroup>
                    <h2>Qualcosa è andato storto</h2>
                    <h3>Non è colpa tua, ma se ti interessa:</h3>
                </hgroup>
                <a><?= $err ?></a>
            </center>
        </div>
        <?php
    } else {
        $obj = json_decode($response);
        ?>
        <div class="container">
            <center>
                <hgroup>
                    <h2>Previsioni per <?php
                    if ($weatherStation == "16023") {
                        echo "Trento";
                    } elseif ($weatherStation == "16020") {
                        echo "Bolzano";
                    } elseif ($weatherStation == "KQLQ0") {
                        echo "Napoli";
                    }
                    ?></h2>
                <h3>Ottenute il: <?= $obj->data[0]->date ?></h3>
            </hgroup>
            <hgroup>
                <h2>Temperatura media:</h2>
                <h3><?= $obj->data[0]->tavg ?>°C</h3>
            </hgroup>
            <hgroup>
                <h2>Temperatura minima:</h2>
                <h3><?= $obj->data[0]->tmin ?>°C</h3>
            </hgroup>
            <hgroup>
                <h2>Temperatura massima:</h2>
                <h3><?= $obj->data[0]->tmax ?>°C</h3>
            </hgroup>
            <hgroup>
                <h2>Pressione:</h2>
                <h3><?= $obj->data[0]->pres ?> hPa</h3>
            </hgroup>
            <hgroup>
                <h2>Velocità del vento:</h2>
                <h3><?= $obj->data[0]->wspd ?> km/h</h3>
            </hgroup>
            <hgroup>
                <h2>Direzione del vento:</h2>
                <h3><?= $obj->data[0]->wdir ?>°</h3>
            </hgroup>
            <hgroup>
                <h2>Velocità del vento massima:</h2>
                <h3><?= $obj->data[0]->wpgt ?> km/h</h3>
            </hgroup>
            <?php
            if ($obj->data[0]->snow == 0) {
                ?>
                <hgroup>
                    <h2>Neve:</h2>
                    <h3>No</h3>
                </hgroup>
                <?php
            } else {
                ?>
                <hgroup>
                    <h2>Neve:</h2>
                    <h3><?= $obj->data[0]->snow ?> mm</h3>
                </hgroup>
                <?php
            }
            ?>
            <?php
            if ($obj->data[0]->prcp == 0) {
                ?>
                <hgroup>
                    <h2>Pioggia:</h2>
                    <h3>No</h3>
                </hgroup>
                <?php
            } else {
                ?>
                <hgroup>
                    <h2>Pioggia:</h2>
                    <h3><?= $obj->data[0]->prcp ?> mm</h3>
                </hgroup>
                <?php
            }
            ?>
            </center>
        </div>
        <?php
        include 'footer.php';
    }
} else {
    ?>
    <div class="container">
        <center>
            <hgroup>
                <h2>Scegli tra le alternative disponibili</h2>
                <h3>Ma mi raccomando non esagerare con le richieste</h3>
            </hgroup>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="weatherStation">Città</label>
                <select name="weatherStation" id="weatherStation" required>
                    <option value="12345" selected>Seleziona una città!</option>
                    <option value="16023">Trento</option>
                    <option value="16020">Bolzano</option>
                    <option value="KQLQ0">Napoli</option>
                </select>
                <br/>
                <label for="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    Acconsento a fare una richiesta API che costerà un rene e mezzo a Francesco Masala
                </label>
                <br/>
                <button type="submit" class="btn btn-primary">Ne sono sicuro!</button>
            </form>
        </center>
    </div>
    <?php
    include 'footer.php';
}
?>
