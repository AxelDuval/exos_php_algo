<form method="get">
    <label for="date">Saisir votre date de naissance :</label>
    <input name="date" type="date"></input>
    <input type="submit"></input>
</form>

<?php

if (isset($_GET['date'])) {
    $birthdate = $_GET["date"];
}

function CalcAge($birthdate)
{
    $date = new DateTime($birthdate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}

echo "<br> Vous avez : " . CalcAge($birthdate) . " ans";

?>