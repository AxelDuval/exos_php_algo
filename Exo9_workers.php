<?php
include('tableau.php');

echo "<pre>";
// print_r($tableau);
echo "</pre>";
?>
<form method="post">
    <label for="city"> Nom de ville : </label>
    <select id="city" name="city">
        <option value="<?php if (isset($_POST["city"])) {echo $_POST["city"];}?>" selected><?php if (isset($_POST["city"])) {echo $_POST["city"];}?></option>
        <option value="Edinburgh">Edinburgh</option>
        <option value="Tokyo">Tokyo</option>
        <option value="San Francisco">San Francisco</option>
        <option value="New York">New York</option>
        <option value="London">London</option>
        <option value="Sydney">Sydney</option>
        <option value="Singapore">Singapore</option>
    </select>
    <input type="submit"></input>
</form>

<?php

if (isset($_POST["city"])) {
    $city = $_POST["city"];



    function countPeople($tableau, $city)
    {
        $people = 0;
        foreach ($tableau as $val) {
            if ($city == $val[2]) {
                $people++;
            }
        }
        return $people;
    }

    if (countPeople($tableau, $city) === 0) {
        echo "Ville introuvable !";
    } else {
        echo "Nombre de personnes : " . countPeople($tableau, $city);
    }
}
