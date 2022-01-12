<form method="post">
    <label for="dpt">Numéro de département :</label>
    <input type="number" name="dpt" />
    <input type="submit"></input>
</form>

<?php
$array = array_map('str_getcsv', file('villes_france.csv'));

if (isset($_POST["dpt"])) {
    $dept = $_POST["dpt"];
} else {
    echo "Merci de renseigner un numéro de département";
}


function searchForDept($dept, $array)
{
    $villes = [];
    foreach ($array as $val) {
        if ($val[1] == $dept) {
            array_push($villes, $val[3]);
        }
    }
    if (!empty($villes)) {
        echo '<pre>';
        print_r($villes);
        echo '</pre>';
    } else {
        echo 'Département introuvable !';
    }
}

SearchForDept($dept, $array);
