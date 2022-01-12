<form method="post">
    <label for="num-secu">Numéro de Sécurité Sociale :</label>
    <input type="text" name="num-secu" size="45" />
    <input type="submit"></input>
</form>


<?php
if (isset($_POST["num-secu"])) {
    $numSecu = $_POST["num-secu"];
}
if (preg_match("#^[12][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}[0-9]{2}$#", $numSecu)) {
    echo "$numSecu" . " : " . "Le numéro de sécurité sociale est correct";
} else {
    echo "$numSecu" . " : " . "Le numéro de sécurité sociale n'est pas valide";
}

?>