<?php
// include("jours_feries_metropole.csv");
// $csv = array_map('str_getcsv', file('jours_feries_metropole.csv'));


// $Data = str_getcsv($CsvString, "\n"); //parse the rows
// foreach($Data as &$Row) $Row = str_getcsv($Row, ";"); //parse the items in rows

// $json = include("joursFeries.json");



$data = json_decode(file_get_contents("joursFeries.json"), true);
echo "<pre>";
print_r($data);
echo "</pre>";

function getFerie($data)
{
    foreach ($data as $key => $val) {
        echo "$key" . " : " . "$val" . "<br>";
    }
}

getFerie($data);
