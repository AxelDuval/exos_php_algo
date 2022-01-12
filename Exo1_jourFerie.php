<form method="get">
    <label for="date">Saisir une date :</label>
    <input name="date" type="date"></input>
    <input type="submit"></input>
</form>

<?php

if (isset($_GET['date'])) {
    $date = strtotime($_GET["date"]);
    echo '<pre>';
    echo date('d/M/Y', $date);
    echo '</pre>';
}

function jour_ferie($date)
{
    $jour = date("d", $date);
    $mois = date("m", $date);
    $estFerie = 0;

    // jours fériées
    if ($jour == 01 && $mois == 01) $estFerie = 1; // 1er janvier
    if ($jour == 01 && $mois == 05) $estFerie = 1; // 1er mai
    if ($jour == 8 && $mois == 5) $estFerie = 1; // 8 mai
    if ($jour == 14 && $mois == 07) $estFerie = 1; // 14 juillet
    if ($jour == 15 && $mois == 8) $estFerie = 1; // 15 aout
    if ($jour == 01 && $mois == 11) $estFerie = 1; // 1 novembre
    if ($jour == 11 && $mois == 11) $estFerie = 1; // 11 novembre
    if ($jour == 25 && $mois == 12) $estFerie = 1; // 25 décembre

    if ($estFerie) {
        return 'Ce jour est férié !';
    } else {
        return "Ce jour n'est pas férié ;(";
    }
}
?>

<?php
echo "<br>" . jour_ferie($date);
?>