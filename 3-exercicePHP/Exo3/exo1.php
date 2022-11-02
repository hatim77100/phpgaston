<?php
include("common/header.php");
include("common/menu.php");
?>

<h1 class="titreBleu">Affichage des tables de multiplication</h1>
<form action="#" method="GET">
    <label for="table">Choisir une table de multiplication:</label>
    <input type="number" name="table" id="table" />
    <input type="submit" value="Valider" />
</form>
<?php
// define("TABLE", 4);

if (isset($_GET["table"])) {
    echo '<h3>Table de ' . $_GET["table"] . '</h3>';
    for ($i = 1; $i < 10; $i++) {
        $resultat = $i * $_GET["table"];
        echo $i . '*' . $_GET["table"] . '=' . $resultat . '<br/>';
    }
} else {
    echo "<h2> Saisir une valeur dans le champs ci-dessus</h2>";
}
?>

<?php
include("common/footer.php");

?>