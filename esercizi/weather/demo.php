<!DOCTYPE html>
<html>
<body>

<?php
$jsonobj = '{"meta": {"generated": "2023-02-13 17:09:57"},"data": [{"date": "2023-02-13","tavg": 5.5,"tmin": 2.5,"tmax": 9,"prcp": 0,"snow": null,"wdir": 69,"wspd": 6,"wpgt": 18.5,"pres": 1039,"tsun": 0}]}';

$obj = json_decode($jsonobj);

var_dump(json_decode($jsonobj));


?>
<br/>
<?php
// Get data from the json object
echo $obj->meta->generated;
echo "<br>";
echo $obj->data[0]->date;
echo "<br>";
echo $obj->data[0]->tavg;
echo "<br>";
echo $obj->data[0]->tmin;
echo "<br>";
echo $obj->data[0]->tmax;
echo "<br>";
echo $obj->data[0]->prcp;
echo "<br>";
echo $obj->data[0]->snow;
echo "<br>";
echo $obj->data[0]->wdir;
echo "<br>";
echo $obj->data[0]->wspd;
echo "<br>";
echo $obj->data[0]->wpgt;
echo "<br>";
echo $obj->data[0]->pres;
echo "<br>";
echo $obj->data[0]->tsun;
?>

</body>
</html>
