<form method="post">
    <label for="dpt">Numéro de département :</label>
    <input type="number" name="dpt" />
    <input type="submit"></input>
</form>

<?php
if (isset($_POST["dpt"])) {
    $dept = $_POST["dpt"];
} else {
    echo "Merci de renseigner un numéro de département";
}

$array = array_map('str_getcsv', file('departement.csv'));


function searchForDept($dept, $array)
{
    foreach ($array as $key => $val) {
        if ($key == $dept) {
            return $val[2];
        }
    }
    return "introuvable";
}

print_r(searchForDept($dept, $array));
