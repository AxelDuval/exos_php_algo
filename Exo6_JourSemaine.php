<form method="get">
    <label for="date">Saisir une date :</label>
    <input name="date" type="date"></input>
    <input type="submit"></input>
</form>


<?php

if (isset($_GET['date'])) {
    $date = strtotime($_GET["date"]);
    echo '<pre>';
    echo date('D/m/Y', $date);
    echo '</pre>';
}

function whatDay($date)
{
    $jour = date("D", $date);

    switch ($jour) {
        case 'Mon':
            return 'Lundi';
            break;
        case 'Tue':
            return 'Mardi';
            break;
        case 'Wed':
            return 'Mercredi';
            break;
        case 'Thu':
            return 'Jeudi';
            break;
        case 'Fri':
            return 'Vendredi';
            break;
        case 'Sat':
            return 'Samedi';
            break;
        case 'Sun':
            return 'Dimanche';
            break;
    }
}
?>

<?php
echo "<br>" . whatDay($date);
?>