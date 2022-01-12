<form method="post">
    <label for="parking"> Nom de parking strasbourgeois : </label>
    <input type="text" name="parking">
    <input type="submit"></input>
</form>

<?php
function csv_to_array($filename = 'occupation-parkings-temps-reel.csv', $delimiter = ';')
{
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header)
                $header = $row;
            else {
                $id = $row[0];
                $data[$id] = array_combine($header, $row);
            }
        }
        fclose($handle);
    }
    return $data;
}

$array = csv_to_array($filename = 'occupation-parkings-temps-reel.csv', $delimiter = ';');


if (isset($_POST["parking"])) {
    $parking = $_POST["parking"];
}


function parking($parking, $array)
{

    foreach ($array as $key => $val) {
        if ($parking == $key) {
                return $val['Libre'];
        } else {
            return "parking introuvable";
        }
    } 
}


echo "Le $parking a encore : " . parking($parking, $array) . " places disponibles";
